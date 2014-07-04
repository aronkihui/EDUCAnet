<?php
class PortalalumnoController extends Controller
{
    public function actionPortalalumno()
    {
        $this->render('portalalumno'); 
    }
    
    
      
    public function actionInfo_academica()
    {
        $this->renderPartial('informacion_academica');
    }
      
    public function actionMi_curso()
    {
        $this->renderPartial('mi_curso');
    }
    
     public function actionMis_profesores()
    {
        $this->renderPartial('mis_profesores');
         
        
        
    }
    
    public function actionMis_anotaciones()
    {
        $this->renderPartial('mis_anotaciones');
    }
}