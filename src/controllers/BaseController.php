<?php
namespace MyFrame\controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BaseController
{
    public $twig;
    public function __construct()
    {
        $load = new FilesystemLoader(dirname(__DIR__)."/resources/views");
        $this->twig = new Environment($load,[
            'cache' =>dirname(__DIR__).'/vars/caches'
        ]);
    }

    public function render($path = null,$args = []){
        return $this->twig->display($path,$args);
    }

}