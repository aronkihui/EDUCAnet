<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class PortaldocenteController extends Controller{
    
    public function actionPortaldocente()
    {
        
        $this->render('portaldocente');
    }
    
    public function actionMis_alumnos()
    {
        $this->renderPartial('mis_alumnos');
    }
    
      
    public function actionMis_colegas()
    {
        $this->renderPartial('mis_colegas');
    }
    
      
    public function actionGestion_evaluaciones()
    {
        $this->renderPartial('gestion_evaluaciones');
    }
    
    public function actionGestion_asistencia_alumno()
    {
        $this->renderPartial('gestion_asistencia_alumno');
    }
    
    public function actionMis_asignaturas()
    {
        $this->renderPartial('mis_asignaturas');
    }
    
    public function actionGestionar_anotaciones()
    {
        $this->renderPartial('gestionar_anotaciones');
    }
    
    
}
?>


