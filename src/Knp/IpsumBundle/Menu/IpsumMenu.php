<?php

namespace Knp\IpsumBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\MenuItem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;

class IpsumMenu extends MenuItem
{
    /**
     * @param Request $request
     * @param Router $router
     */
    public function __construct(FactoryInterface $factory, Router $router)
    {
        parent::__construct('ipsum', $factory);

        $this->setAttributes(array(
            'id'    => 'nav-ipsum',
            'class' => 'menu'
        ));

        $this->addChild('menu', $router->generate('knp_ipsum_knp_menu'))->setLabel("KnpMenuBundle");
        $this->addChild('menu-john', $router->generate('knp_ipsum_knp_menu', array('name' => "John")))->setLabel("KnpMenuBundle with John");
        $this->addChild('menu-bob', $router->generate('knp_ipsum_knp_menu', array('name' => "Bob")))->setLabel("KnpMenuBundle with Bob");
        $this->addChild('menu-bill', $router->generate('knp_ipsum_knp_menu', array('name' => "Bill")))->setLabel("KnpMenuBundle with Bill");
    }
}
