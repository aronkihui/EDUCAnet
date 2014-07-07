<?php


class UserIdentity extends CUserIdentity
{
private $_id;
 public function authenticate()
 {
$use= new Usuario();
$nombreusuario= strtolower($this->username);

 $usuario= Usuario::model()->find("LOWER(nombreusuario)=?",array($nombreusuario));
 
 if($usuario===null)
 {
 $this->errorCode=self::ERROR_USERNAME_INVALID;
 } 
 else
 {
     if($usuario->password !== $this->password)
 {
 $this->errorCode=self::ERROR_PASSWORD_INVALID;
 }
 else
 {
 $this->_id=$usuario->idusuario;

 $this->errorCode=self::ERROR_NONE;
 }
 
 }
 return $this->errorCode==self::ERROR_NONE;
 }
 
 public function getId()
 {
 return $this->_id;
 }
}