<?php
namespace MyFrame\Controllers;


use Http\HttpRequest;

class HomeController extends BaseController
{
    public function index(HttpRequest $request){
        return $this->render('index.twig',[]);
    }
    public function slug(HttpRequest $request,string $slug){
      echo $slug;
    }
}