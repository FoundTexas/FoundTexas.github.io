<?php

namespace ContainerLHQHK9x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTimelineEventsCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\TimelineEventsCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\TimelineEventsCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('TimelineEventsCommand', [], 'Add a short description for your command', false, #[\Closure(name: 'App\\Command\\TimelineEventsCommand')] fn (): \App\Command\TimelineEventsCommand => ($container->privates['App\\Command\\TimelineEventsCommand'] ?? $container->load('getTimelineEventsCommandService')));
    }
}
