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
        $items=  Yii::app()->db->createCommand()
            ->select('al.nombre,al.apellido,al.telefono,al.email, cur.nombrecurso , cur.nivel')
            ->from('alumno al')
            ->join('matricula mat','mat.alumno_idalumno = al.idalumno')
            ->join('curso cur', 'cur.idcurso = mat.curso_idcurso')
            ->join('profesor profe', 'profe.idprofesor = cur.profesor_idprofesor')
            ->where('profe.idprofesor="13864900-8"')
            
            ->query();
 

        $this->renderPartial('mis_alumnos',array('items'=>$items));
    }
    
      
    public function actionMis_colegas()
    { 
     $items=  Profesor::model()->findAll(array('index'=>'idprofesor'));
    $this->render('mis_colegas',array('items'=>$items));
        
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
        
         
        $items=  Yii::app()->db->createCommand()
            ->select('*')
            ->from('profesor_has_asignatura')            
            ->where('profesor_idprofesor="13864900-8"')            
            ->query();
                 
   
        
        $this->renderPartial('mis_asignaturas',array('items'=>$items));
    }
    
    public function actionGestionar_anotaciones()
    {
        $this->renderPartial('gestionar_anotaciones');
    }
    
    
    
   
    
}
?>


