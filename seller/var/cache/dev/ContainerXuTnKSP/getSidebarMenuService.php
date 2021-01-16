<?php

namespace ContainerXuTnKSP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSidebarMenuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Menu\SidebarMenu' shared autowired service.
     *
     * @return \App\Menu\SidebarMenu
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Menu/SidebarMenu.php';

        return $container->privates['App\\Menu\\SidebarMenu'] = new \App\Menu\SidebarMenu(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), ($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()));
    }
}