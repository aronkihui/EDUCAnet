<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MiperfilController extends Controller
{
    public function actionMiperfil()
    {
        $model=new Archivo;
      
        $this->render('miperfil',array('model'=>$model,'respuesta'=>''));
        
    }
    
    
     public function accesRules()
   {
       return array(
        array('allow',  

        'actions'=>array('view'),
        'users'=>array('*'),
        ));
       
   }
   
    
     
    
    
    public function actionAutobusqueda() {
	    $res =array();
	 
	    if (isset($_GET['term'])) {
	        
	        $qtxt ="SELECT archivo_nombre FROM archivo WHERE archivo_nombre LIKE :nombre";
	        $command =Yii::app()->db->createCommand($qtxt);
	        $command->bindValue(":nombre", '%'.$_GET['term'].'%', PDO::PARAM_STR);
	        $res =$command->queryColumn();
	    }
	 
	    echo CJSON::encode($res);
	    Yii::app()->end();
	}
        
        
        public function  actionRegistroSesion()
        {
            
            $id=1;
            $datos=Yii::app()->misconsultas->consultaRegSesion($id);
            
           $this->render('miperfil',array('respuesta'=>'registrosesion','datos'=>$datos));
            
        }
        
        
        public function actionComentarios()
        {
            $id=1;
            $this->render('miperfil',array('respuesta'=>'comentarios'));
        }
        
        
        public  function actionMisDescargas()
        {
           
           //tomar el id del usuario activo
            $id=1;
            $datos=Yii::app()->misconsultas->consultaRegDescargas($id);
           $this->render('miperfil',array('respuesta'=>'misdescargas','datos'=>$datos));
            
        }
        
         public  function actionMisSubidas()
        {
             
             //tomar id del usuario activo
             $id=1;
            $datos=Yii::app()->misconsultas->consultaPorId($id);
           $this->render('miperfil',array('respuesta'=>'missubidas','datos'=>$datos));
            
        }
        
        
        public function actionMisDatosPersonales()
        {
            $this->render('miperfil',array('respuesta'=>'misdatos'));
        }
        
        
        //esto muestra las archivos subidos
        public function actionListarMisArchivos()
    {     
            
            
        $model=new Archivo;
        
        
        
        //$respuesta= Yii::app()->misconsultas->misConsultaBusquedaAvanzada($model->archivo_nombre,$model->archivo_area,$model->archivo_cursonivel);
         //consultar en la base datos tomando 
            //datos de cokie id de usuario
            //consultar en bd sobre datos de id usuario
            
        $respuesta= 'hola';//Yii::app()->misconsultas->mostrarArchivos();
        
        return array('respuesta'=>$respuesta);
    }
        
    
}