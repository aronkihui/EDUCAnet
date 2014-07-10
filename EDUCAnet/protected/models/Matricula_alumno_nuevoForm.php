<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Matricula_alumno_nuevoForm extends CFormModel
{
    //datos formulario para ingreso de apoderado
    public $nombreApoderado, $apellidoApoderado, $telefonoApoderado, $direccionApoderado, $rutApoderado, $fecha_creacionApoderado;

    //datos formulario para ingreso de alumno
    public $nombreAlumno, $apellidoAlumno, $direccionAlumno, $telefonoAlumno, $emailAlumno, $fecha_nacimientoAlumno, $rutAlumno, $fecha_creacionAlumno;
    

    //datos formulario matricula
    public $apoderado_idapoderado, $alumno_idalumno, $fecha, $estadoMatricula, $matriculador_idmatriculador;
                    
   

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// apoderado
			array('nombreApoderado, apellidoApoderado, telefonoApoderado, direccionApoderado, rutApoderado, fecha_creacionApoderado', 'required'),
                 
                    //alumno
                    array('nombreAlumno, apellidoAlumno, telefonoAlumno, direccionAlumno, rutAlumno, fecha_creacionAlumno', 'required'),
                    //matricula
                    array('apoderado_idapoderado, alumno_idalumno, fecha, estadoMatricula, matriculador_idmatriculador', 'required'),
                    
			// rememberMe needs to be a boolean
			
			// password needs to be authenticated
			
		);
	}
    
        
    
}