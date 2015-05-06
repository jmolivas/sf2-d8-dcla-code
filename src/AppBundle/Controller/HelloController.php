<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller {

    public function indexAction($name)
    {
        return $this->render(
          'hello/index.html.twig',
          [ 'name' => $name ]
        );
    }
}