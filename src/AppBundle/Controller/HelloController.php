<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController {

    public function indexAction($name)
    {
        return new Response('<html><body>Hello : '.$name.'</body></html>');
    }
}