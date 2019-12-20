<?php


namespace controllers;

use core\Controller;

class MainController extends Controller
{
    public function IndexAction()
    {
        $this->view->render('Main page');
    }
}