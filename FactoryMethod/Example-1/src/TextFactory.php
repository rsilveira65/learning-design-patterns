<?php
namespace src;
use src\Creator;
use src\TextProduct;
/**
 * Created by PhpStorm.
 * User: cliente
 * Date: 29/05/16
 * Time: 15:50
 */
class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return ($product->getProperties());
    }
}