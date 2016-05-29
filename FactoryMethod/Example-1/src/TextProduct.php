<?php
namespace src;
use src\Product;
/**
 * Created by PhpStorm.
 * User: cliente
 * Date: 29/05/16
 * Time: 15:50
 */
class TextProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "This is text.";
        return $this->mfgProduct;
    }

}