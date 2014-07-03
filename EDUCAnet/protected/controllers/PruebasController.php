<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PruebasController extends Controller 

{
    public function actionPruebas()
    {
        $this->render('pruebas');
    }
    
    
    public  function actionAutocomplete()
    {
        $data=array('hola','holas','holass','perro');
                exit($data);
        exit('hola');
         $request=trim($_GET['term']);
	    if($request!=''){
	        $model=Yii::Archivo()->findAll(array("condition"=>"archivo_nombre like '$request%'"));
	        $data=array();
	        foreach($model as $get){
	            $data[]=$get->name;
	        }
	        $this->layout='empty';
                
                
	        echo json_encode($data);
	    }
    }
}