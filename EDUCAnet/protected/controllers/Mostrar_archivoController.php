<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */






class Mostrar_archivoController extends Controller
{
  //esta accion logra tomar el dato del menu seleccionado y renderizar en pantalla
    public function actionView()
    {
         //menu 
        
      switch ($dato=$_GET['view'])
      {
          //case para seccion mecanica
      case $dato== 'mecanica primero':
          {//aqui llamo a mis funciones auxiliares creadas en el archivo misConsultas.php
           $xD=Yii::app()->misconsultas->misConsultaSeccion('mecanica','primero');  
           break;
          }
      case $dato=='mecanica segundo':
          {
            $xD=Yii::app()->misconsultas->misConsultaSeccion('mecanica','segundo');   
             break;
          }
      case $dato=='mecanica tercero':
          {
            $xD=Yii::app()->misconsultas->misConsultaSeccion('mecanica','tercero');
             break;
          }
      case $dato=='mecanica cuarto':
          {              
            $xD=Yii::app()->misconsultas->misConsultaSeccion('mecanica','cuarto'); 
             break;
          }
          
          //case para seccion electricidad
      case $dato=='electricidad primero':
          {
            $xD=Yii::app()->misconsultas->misConsultaSeccion('electricidad','primero');  
             break;
          }
          
         
      case $dato=='electricidad segundo':
          {
             $xD=Yii::app()->misconsultas->misConsultaSeccion('electricidad','segundo');   
              break;
          }
      case $dato=='electricidad tercero':
          {
              $xD=Yii::app()->misconsultas->misConsultaSeccion('electricidad','tercero');  
               break;
          }
      case $dato=='electricidad cuarto':
          {
              $xD=Yii::app()->misconsultas->misConsultaSeccion('electricidad','cuarto'); 
               break;
          }
          
          
          //case para instalaciones sanitarias
      case $dato=='instalaciones_sanitarias primero':
          {
          
          $xD=Yii::app()->misconsultas->misConsultaSeccion('instalaciones sanitarias','primero');     
           break;
          }
      case $dato=='instalaciones_sanitarias segundo':
          {
          $xD=Yii::app()->misconsultas->misConsultaSeccion('instalaciones sanitarias','segundo');   
           break;
          }  
      case $dato=='instalaciones_sanitarias tercero':
          {
          $xD=Yii::app()->misconsultas->misConsultaSeccion('instalaciones sanitarias','tercero');   
           break;
          } 
      case $dato=='instalaciones_sanitarias cuarto': 
          {
          $xD=Yii::app()->misconsultas->misConsultaSeccion('instalaciones sanitarias','cuarto');  
           break;
          }
          
          
          //este case es para estructuras metalicas
          case $dato=='estructuras metalicas primero':
          {
          $xD=Yii::app()->misconsultas->misConsultaSeccion('estructuras metalicas','primero');     
           break;
          }
          
          case $dato=='estructuras metalicas segundo':
          {
          $xD=Yii::app()->misconsultas->misConsultaSeccion('estructuras metalicas','segundo');     
           break;
          }
          
          case $dato=='estructuras metalicas tercero':
          {          
          $xD=Yii::app()->misconsultas->misConsultaSeccion('estructuras metalicas','tercero');     
           break;
          }
          
          case $dato=='estructuras metalicas cuarto':
          {          
          $xD=Yii::app()->misconsultas->misConsultaSeccion('estructuras metalicas','cuarto');     
           break;
          }
      
      }
      $this->render('mostrar_archivo',array('seccion'=>'$seccion','models'=>$xD));  
    }
    
    
    
    
    //aqui mostrar archivos de la bibliografia en general
    public function actionView_general()
    {
        $this->render('mostrar_archivo',array());
        
    }
    
    //aqui muestra un formulario para busqueda avanzada de archivos
    
    public function actionView_avanzada()
    {        
        $model=new BusquedaAvanzada;
         
        if(isset($_POST['BusquedaAvanzada']))
        {
        $model->attributes=$_POST['BusquedaAvanzada'];
        }
        
        
        $respuesta= Yii::app()->misconsultas->misConsultaBusquedaAvanzada($model->archivo_nombre,$model->archivo_area,$model->archivo_cursonivel);
        
        $this->render('mostrar_archivo',array('model'=>$model,'respuesta'=>$respuesta));
    }
     
    

    //cambiar el permiso para el usuario logeado con sesion activa 
    public function accesRules()
   {
       return array(
        array('allow',  

        'actions'=>array('view'),
        'users'=>array('*'),
        ));
   }
   
   

    public function actionMostrar_archivo()
    {         
      

//$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM archivo')->queryScalar();
        
        $mods= Yii::app()->misconsultas->mostrarArchivos();

        $this->render('mostrar_archivo',array('models'=>$mods));
 
    }
    
    
    
    
    public function actionDescargar()
    {
        $model = new Archivo();
        $name = $_GET['file'];
        $upload_path = Yii::app()->params['uploadPath'];

        if( file_exists( $upload_path.$name ) ){
        Yii::app()->getRequest()->sendFile( $name , file_get_contents( $upload_path.$name ) );
        }
        else{
        $this->render('download404');
        } 
        } 
}