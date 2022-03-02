<?php
// project-name/src/controller/DefaultController.php

declare(strict_types=1);
namespace App\controller;
use App\core\Controller;

class DefaultController extends Controller
{
    public function accueil(){
        //...

        $this->renderView('default/accueil');
       
    } 
    public function contact(){
        //...

        $this->renderView('default/contact');
       
    } 
    public function about(){
        //...

        $this->renderView('default/about');
       
    } 
   
}
