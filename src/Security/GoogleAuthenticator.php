<?php
# src/Security/GoogleAuthenticator.php
namespace App\Security;

use App\Entity\User;
use League\OAuth2\Client\Provider\GoogleUser;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;

class GoogleAuthenticator extends OAuth2Authenticator
{
    private ClientRegistry $clientRegistry;
    private EntityManagerInterface $entityManager;
    private RouterInterface $router;

    public function __construct(ClientRegistry $clientRegistry, EntityManagerInterface $entityManager, RouterInterface $router)
    {
        $this->clientRegistry = $clientRegistry;
        $this->entityManager = $entityManager;
        $this->router = $router;
    }

    public function supports(Request $request): ?bool
    {
        // continue ONLY if the current ROUTE matches the check ROUTE
        return $request->attributes->get('_route') === 'connect_google_check';
    }

    public function authenticate(Request $request): Passport
    {
        $client = $this->clientRegistry->getClient('google');
        $accessToken = $this->fetchAccessToken($client);

        return new SelfValidatingPassport(
            new UserBadge($accessToken->getToken(), function () use ($accessToken, $client) {
                /** @var GoogleUser $googleUser */
                $googleUser = $client->fetchUserFromToken($accessToken);
                $email = $googleUser->getEmail();

                // Check if a user with this Google ID already exists
                $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['googleId' => $googleUser->getId()]);

                if (!$existingUser) {
                    // No user with this Google ID, check by email
                    $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]) ?? new User();
                    $existingUser->setEmail($email);
                    $existingUser->setGoogleId($googleUser->getId());
                    $existingUser->setHostedDomain($googleUser->getHostedDomain() ?? "");
                }

                // Generate a random password
                $password = $this->generateRandomPassword();
                // Set the password for the user
                $existingUser->setPassword($existingUser->getPassword() != "none" ? $existingUser->getPassword() : $password);

                // Set the user's name and ensure uniqueness
                $originalName = $googleUser->getName();
                $uniqueName = $this->makeNameUnique($originalName);
                $existingUser->setName($existingUser->getName() ?? $uniqueName);
                $existingUser->setAvatar($existingUser->getAvatar() ?? $googleUser->getAvatar());

                $this->entityManager->persist($existingUser);
                $this->entityManager->flush();

                return $existingUser;
            })
        );
    }

    private function generateRandomPassword(int $length = 12): string
    {
        // Define characters to be used in the random password
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|';

        // Generate random password
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }

        return $password;
    }

    private function makeNameUnique(string $name): string
    {
        $baseName = $name;
        $suffix = 1;

        // Loop until a unique name is found
        while ($this->isNameExists($baseName)) {
            $baseName = $name . '-' . $suffix;
            $suffix++;
        }

        return $baseName;
    }

    private function isNameExists(string $name): bool
    {
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['name' => $name]);

        return ($existingUser !== null);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {

        // change "app_dashboard" to some route in your app
        return new RedirectResponse(
            $this->router->generate('app_index')
        );

        // or, on success, let the request continue to be handled by the controller
        //return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());

        return new Response($message, Response::HTTP_FORBIDDEN);
    }

    //    public function start(Request $request, AuthenticationException $authException = null): Response
    //    {
    //        /*
    //         * If you would like this class to control what happens when an anonymous user accesses a
    //         * protected page (e.g. redirect to /login), uncomment this method and make this class
    //         * implement Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface.
    //         *
    //         * For more details, see https://symfony.com/doc/current/security/experimental_authenticators.html#configuring-the-authentication-entry-point
    //         */
    //    }
}
