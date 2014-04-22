<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Subir_archivoController extends Controller
{
    
    public  function actions()
    {
        
        return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),                    
		); 
    }

    public function actionSubir_archivo()
	{
		
         $model=new Subir_archivo;

                if(isset($_POST['Subir_archivo']))
                {
                        $model->attributes=$_POST['Subir_archivo'];
                        $model->archivo=CUploadedFile::getInstance($model,'archivo');
                          
                        $model->setAttribute('usuario_idusuario',1);

                        if($model->archivo == null)
                        {
                            
                            echo "Null file";
                            
                        }
                              if($model->save())
                            {  
                                $estructura ="store/$model->archivo_area/$model->archivo_cursonivel/$model->archivo_nombre/$model->usuario_idusuario";
                         
                                if(!file_exists($estructura))
                                    { 
                                        mkdir($estructura,0775,true);             
                                         $path="$estructura/$model->archivo";
                                        
                                        $model->archivo->saveAs($path);
                                     $model->archivo_path=$path;
                                     
                                         Yii::app()->user->setFlash('subir_archivo', "Archivos subidos exitosamente");
                                         $this->refresh();           
                                    }
                                else{
                                        $path="$estructura/$model->archivo";
                                        $model->archivo->saveAs($path);                                        
                                      
                                      Yii::app()->user->setFlash('subir_archivo', "Archivo subido exitosamente!");
                                      $this->refresh();
                                }
                       
                                     
                              
                                     }
                             
                                  
                             
                }

                $this->render('subir_archivo',array('model'=>$model,));
        
                             
        
	}
        
}

//extra
/*Yii::app()->user->setFlash('subir_archivo','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
 * 
 */

?>