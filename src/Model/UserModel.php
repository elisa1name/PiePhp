<?php
namespace Model;
class UserModel
{
  private $_email;
  private $_password;
  
  public function save()
  {
    $sql = "INSERT INTO users (email, password) VALUES ($this->_email, $this->_password)";
      $req = $this->bdd->prepare($sql);
      $req->execute();
  }
}