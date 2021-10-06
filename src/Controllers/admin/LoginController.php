<?php
 namespace MyFrame\Controllers\Admin;
use MyFrame\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index(){
        return $this->render('index.twig',[]);
    }
}