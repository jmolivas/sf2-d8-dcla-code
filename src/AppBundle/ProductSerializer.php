<?php

namespace AppBundle;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class ProductSerializer
{
    private $router;

    public function __construct(Router $router) {
        $this->router = $router;
    }

    public function serialize(Product $product)
    {
        $data = [
          'id' => $product->getId(),
          'name' => $product->getName(),
          'price' => $product->getPrice(),
          'url' => $this->router->generate('product_show', ['id' => $product->getId()])
        ];

        return $data;
    }
}
