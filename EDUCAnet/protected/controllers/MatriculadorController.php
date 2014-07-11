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
    
    public function actionMostrar_alumnos()
    {
                
       $this->renderPartial('mostrar_alumnos');
    }
 
    
    public function actionMatricula_alumno_nuevo()
    {
       
       $this->render('matricula_alumno_nuevo'); 
        
    }
    
    public function actionMatricula_alumno_antiguo()
    {
         $model= new Matricula;
       $this->render('matricula_alumno_antiguo',array('model'=>$model)); 
        
    }
    
    
    
    
    public function actionAdmin_cursos()
    {
        
        $this->renderPartial('admin_cursos');
    }
    
    public function actionCrear_curso()
            {
        
        //crear model del form personalizado
        $model= new Curso;
        $this->render('crear_curso',array('model'=>$model));
    }
    
    
    public function actionAdmin_asignaturas()
            {
        $this->renderPartial('admin_asignaturas');
    }
    
    public function actionCrear_asignatura()
            {
        $model=new Asignatura;
      
     $item = new Asignatura;

     $items=  Asignatura::model()->findAll();

            if(isset($_POST['Asignatura']))
            {
                $model->attributes=$_POST['Asignatura'];
                 if($model->validate())
                 {
                     $model->save();
                 $this->refresh();
                    }

                    $valid=true;
                    foreach($items as $i=>$item)
                    {
                            if(isset($_POST['Asignatura'][$i]))
                            $item->attributes=$_POST['Asignatura'][$i];
                            $valid=$item->validate() && $valid;
                            if($valid)
                                $item->save();
                    }


            }
        
        
        
        $this->render('crear_asignatura',array('model'=>$model,'items'=>$items,));
    }
    
    
    
    
    public function actionCrear_bloque()
    {
  
     $model=new Bloques;
   
     
     $item = new Bloques;

     $items=Bloques::model()->findAll();

            if(isset($_POST['Bloques']))
            {
                $model->attributes=$_POST['Bloques'];
                 if($model->validate())
                 {
                     $model->save();
                 $this->refresh();
                    }

                    $valid=true;
                    foreach($items as $i=>$item)
                    {
                            if(isset($_POST['Bloques'][$i]))
                            $item->attributes=$_POST['Bloques'][$i];
                            $valid=$item->validate() && $valid;
                            if($valid)$item->save();
                    }


            }
    $this->render('crear_bloque',array('items'=>$items,'model'=>$model));
    }


    
    public function actionAdmin_profesores() 
      {
      
        $this->renderPartial('admin_profesores');
    }
    
    public function actionCrear_profesor() 
            {
        
        $model=new Profesor;
        $this->render('crear_profesor',array('model'=>$model));
    }


    
    
    
    public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			//array('deny',  // deny all users
				//'users'=>array('*'),
			//),
		);
	}

    
    
    
}