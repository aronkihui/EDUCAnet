<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mostrar_archivoController extends Controller
{
    
    public function actionMostrar_archivo()
    {
                 
              
              //SELECT * FROM `archivo` WHERE archivo_fecha <= '$fecha' ORDER BY idarchivo desc limit 3 
      $fecha=date('Y-m-d H:i:s');
              $criteria = new CDbCriteria;
              $criteria->condition = 'archivo_fecha<=:fecha ';
              $criteria->limit = '10';
              $criteria->order= 'idarchivo desc';
              $criteria->params = array(':fecha'=>$fecha);  
     //toma todos los registros de la base de datos
        //obtener el modelo, usar el nombre y ::model()
   $mi_modelo=  Archivo::model();
   //obtener todos los registros de la tabla
   //$model=$mi_modelo->findAll($criteria);
    $model=$mi_modelo->findAll($criteria);
    $models = new CActiveDataProvider($mi_modelo,array('criteria'=>$criteria));
   
  

//$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM archivo')->queryScalar();
$sql='SELECT * FROM archivo ORDER BY idarchivo desc';
$mods=new CSqlDataProvider($sql, array(
    'totalItemCount'=>3,
    'sort'=>array('attributes'=>array('idarchivos', 'archivo_path',),),
    'pagination'=>array('pageSize'=>8,),
    'keyField'=>'idarchivo'));

   //prueba 
//exit (Yii::app()->db->getLastInsertID()); 
 
//$ultimo=$mi_modelo::model()->find();
  


 
        $this->render('mostrar_archivo',array('model'=>$model,'models'=>$mods));
 
    }
    
}