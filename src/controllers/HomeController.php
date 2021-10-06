<?php
namespace MyFrame\controllers;


use Http\HttpRequest;
use http\Exception;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class HomeController extends BaseController
{
    public function index(HttpRequest $request){
        return $this->render('index.twig',[]);
    }
    public function slug(HttpRequest $request,string $slug){
      echo $slug;
    }
}