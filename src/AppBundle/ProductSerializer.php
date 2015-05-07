<?php

namespace AppBundle;

use AppBundle\Entity\Product;

class ProductSerializer
{

    public function serialize(Product $product)
    {
        $data = [
          'id' => $product->getId(),
          'name' => $product->getName(),
          'price' => $product->getPrice(),
        ];

        return $data;
    }
}
