<?php

# Controller/GoogleController
namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use App\Security\GoogleAuthenticator;

class GoogleController extends AbstractController
{

    #[Route('/connect/google', name: 'connect_google')]
    public function connectAction(ClientRegistry $clientRegistry)
    {
        //Redirect to google
        return $clientRegistry->getClient('google')->redirect([], []);
    }

    /**
     * After going to Google, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     */
    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectCheckAction(Request $request, GoogleAuthenticator $googleAuthenticator)
    {
        // ** if you want to *authenticate* the user, then
        // leave this method blank and create a Guard authenticator
        // (read below)

        // Let GoogleAuthenticator handle the authentication process
        $passport = $googleAuthenticator->authenticate($request);

        // If authentication was successful, $passport will contain the authenticated user
        if ($passport->getUser() instanceof \App\Entity\User) {
            // Redirect to the index page or any other page you want
            return $this->redirectToRoute('app_index');
        }

        // If authentication failed, you may handle it here
        // You can customize the behavior for failed authentication
        
        // For example, redirect back to the login page with an error message
        return $this->redirectToRoute('app_login', ['error' => 'Authentication failed']);
    
    }
}