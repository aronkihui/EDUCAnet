<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Matricula_alumno_nuevoForm extends CFormModel
{
    //datos formulario para ingreso de apoderado
    
       
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
			array('nombreusuarioApoderado, passwordApoderado,nombreusuarioAlumno ,passwordAlumno','required'),
                 
			// rememberMe needs to be a boolean
			
			// password needs to be authenticated
			
		);
	}
    
        
    
}