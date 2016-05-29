<?php
require __DIR__.'/vendor/autoload.php';
use src\GraphicFactory;
use src\TextFactory;

/**
 * Created by PhpStorm.
 * User: cliente
 * Date: 29/05/16
 * Time: 16:22
 */
class Client
{
    private $someGraphicObject;
    private $someTextObject;

    public function __construct()
    {
        $this->someGraphicObject = new GraphicFactory();
        echo $this->someGraphicObject->startFactory() . PHP_EOL;

        $this->someTextObject    = new TextFactory();
        echo $this->someTextObject->startFactory() . PHP_EOL;
    }
}

$worker = new Client();