<?php
class PortalbibliotecaController extends Controller 
{
    public function actions()
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
                    //fileadminmanager
                       'yiifilemanagerfilepicker'=>array(
                    'class'=>'ext.yiifilemanagerfilepicker.YiiFileManagerFilePickerAction'),
		);    
        }
    
    
    public function actionPortalbiblioteca()
    {      
        $this->render('portalbiblio');           
    }
    
    
    
   
        
        
        
        
    public function actionArch_usuario()
    {
        
         //$model = new Contenidos('');
        //$model->unsetAttributes();
        $dataProvider = '';
        $this->render('arch_usuario',array('thumbDataProvider'=>$dataProvider));
        
    }
}