<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Matricula_alumno_nuevoForm extends CFormModel
{
    
   
    
    public $nombreusuario;
	public $password;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are requiredUsuario()
			array('nombreusuario, password','required'),
			// rememberMe needs to be a boolean
			
			// password needs to be authenticated
			
		);
	}
    
        
    
}