<?php
namespace src;
/**
 * Created by PhpStorm.
 * User: cliente
 * Date: 29/05/16
 * Time: 15:45
 */
abstract class Creator
{
    protected abstract function factoryMethod();

    public function startFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}