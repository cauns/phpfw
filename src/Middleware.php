<?php

namespace MyFrame;

class Middleware
{
    public function __construct()
    {
    }

    public function admin(){
        return false;
    }
}