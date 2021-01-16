<?php

declare(strict_types=1);

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class SidebarMenu
{
    private $factory;
    private $auth;

    public function __construct(FactoryInterface $factory, AuthorizationCheckerInterface $auth)
    {
        $this->factory = $factory;
        $this->auth = $auth;
    }

    public function build(): ItemInterface
    {
        $menu = $this->factory->createItem('root')
            ->setChildrenAttributes(['class' => 'c-sidebar-nav']);


        $menu->addChild('Dashboard', ['route' => 'home'])
            ->setExtra('icon', 'c-sidebar-nav-icon icon-speedometer')
            ->setAttribute('class', 'c-sidebar-nav-item')
            ->setLinkAttribute('class', 'c-sidebar-nav-link');

        $menu->addChild('Incomes', ['route' => 'supplier.stats.incomes'])
            ->setExtra('icon', 'c-sidebar-nav-icon icon-speedometer')
            ->setAttribute('class', 'c-sidebar-nav-item')
            ->setLinkAttribute('class', 'c-sidebar-nav-link');

        return $menu;
    }
}
