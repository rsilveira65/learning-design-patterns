<?php
namespace src;
use src\Creator;
use src\GraphicProduct;
/**
 * Created by PhpStorm.
 * User: cliente
 * Date: 29/05/16
 * Time: 15:50
 */
class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return ($product->getProperties());
    }
}