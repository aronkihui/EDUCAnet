<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MatriculadorController extends Controller
{
    
    public function actionMatriculador()
    {
        
        $this->render('matriculador');
    }
    
    public function actionMatricula_alumno_nuevo()
    {
        $model= new Matricula_alumno_nuevoForm;
        
        $this->renderPartial('alumno_nuevo',array('model'=>$model));
    }


    
    public function actionMatricula_alumno_antiguo()
    {
        $this->renderPartial('alumno_antiguo');
        
    }
}