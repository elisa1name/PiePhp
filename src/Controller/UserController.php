<?php

namespace Controller;
use Core\Controller;
use Model\UserModel;

class UserController extends Controller
{
  public function indexAction()
  {
    
  }
  public function addAction()
  {
    $this->render('register');
  }

  public function registerAction(){

    $UserModel = new UserModel;
    $add->save();
  }
}