<?php

class HorarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
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
				'users'=>array('admin'),
			),
			//array('deny',  // deny all users
			//	'users'=>array('*'),
			//),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            
            //MODELOS ?
		$model0=new Horario;
                $model1=new Horario;
                $model2=new Horario;
                $model3=new Horario;
                $model4=new Horario;
                $model5=new Horario;
                $model6=new Horario;
                $model7=new Horario;
                $model8=new Horario;
                $model9=new Horario;
                $model10=new Horario;
                $model11=new Horario;
                $model12=new Horario;
                $model13=new Horario;
                $model14=new Horario;
                $model15=new Horario;
                $model16=new Horario;
                $model17=new Horario;
                $model18=new Horario;
                $model19=new Horario;
                $model20=new Horario;
                $model21=new Horario;
                $model22=new Horario;
                $model23=new Horario;
                $model24=new Horario;
                $model25=new Horario;
                $model26=new Horario;
                $model27=new Horario;
                $model28=new Horario;
                $model29=new Horario;
                $model30=new Horario;
                $model31=new Horario;
                $model32=new Horario;
                $model33=new Horario;
                $model34=new Horario;
                $model35=new Horario;
                $model36=new Horario;
                $model37=new Horario;
                $model38=new Horario;
                $model39=new Horario;
                $model40=new Horario;
                $model41=new Horario;
                $model42=new Horario;
                $model43=new Horario;
                $model44=new Horario;
                $model45=new Horario;
                $model46=new Horario;
                $model47=new Horario;
                $model48=new Horario;
                $model49=new Horario;
                $model50=new Horario;
                $model51=new Horario;
                $model52=new Horario;
                $model53=new Horario;
                $model54=new Horario;
                $model55=new Horario;
                $model56=new Horario;
                $model57=new Horario;
                $model58=new Horario;
                $model59=new Horario;
                $model60=new Horario;
                $model61=new Horario;
                $model62=new Horario;
                $model63=new Horario;
                $model64=new Horario;
                $model65=new Horario;
                $model66=new Horario;
                $model67=new Horario;
                $model68=new Horario;
                $model69=new Horario;
               

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Horario']))
		{
                   
			$model0->attributes=$_POST['Horario'];   
                        if($model0->save())
                          
                       
                        $this->redirect(array('view','id'=>$model0->id));;
                           
		}

		$this->render('create',
                   array('model0'=>$model0
                        ,'model1'=>$model1
                        ,'model2'=>$model2
                        ,'model3'=>$model3
                        ,'model4'=>$model4 
                        ,'model5'=>$model5
                        ,'model6'=>$model6
                        ,'model7'=>$model7
                        ,'model8'=>$model8
                        ,'model9'=>$model9
                        ,'model10'=>$model10
                        ,'model11'=>$model11
                        ,'model12'=>$model12
                        ,'model13'=>$model13
                        ,'model14'=>$model14
                        ,'model15'=>$model15
                        ,'model16'=>$model16
                        ,'model17'=>$model17
                        ,'model18'=>$model18
                        ,'model19'=>$model19
                        ,'model20'=>$model20
                        ,'model21'=>$model21
                        ,'model22'=>$model22
                        ,'model23'=>$model23
                        ,'model24'=>$model24
                        ,'model25'=>$model25
                        ,'model26'=>$model26
                        ,'model27'=>$model27
                        ,'model28'=>$model28
                        ,'model29'=>$model29
                        ,'model30'=>$model30
                        ,'model31'=>$model31
                        ,'model32'=>$model32
                        ,'model33'=>$model33
                        ,'model34'=>$model34
                        ,'model35'=>$model35                        
                        ,'model36'=>$model36
                        ,'model37'=>$model37
                        ,'model38'=>$model38
                        ,'model39'=>$model39
                        ,'model40'=>$model40
                        ,'model41'=>$model41
                        ,'model42'=>$model42
                        ,'model43'=>$model43
                        ,'model44'=>$model44
                        ,'model45'=>$model45
                        ,'model46'=>$model46
                        ,'model47'=>$model47
                        ,'model48'=>$model48
                        ,'model49'=>$model49
                        ,'model50'=>$model50
                        ,'model51'=>$model51
                        ,'model52'=>$model52
                        ,'model53'=>$model53
                        ,'model54'=>$model54
                        ,'model55'=>$model55
                        ,'model56'=>$model56
                        ,'model57'=>$model57
                        ,'model58'=>$model58
                        ,'model59'=>$model59
                        ,'model60'=>$model60
                        ,'model61'=>$model61
                        ,'model62'=>$model62
                        ,'model63'=>$model63
                        ,'model64'=>$model64
                        ,'model65'=>$model65
                        ,'model66'=>$model66
                        ,'model67'=>$model67
                        ,'model68'=>$model68
                        ,'model69'=>$model69));
	}
        
        
        
        
        	public function actionCreate1()
	{
            
            //MODELOS ?
		$model=new MatriculaForm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MatriculaForm']))
		{
                   
			$model->attributes=$_POST['MatriculaForm'];   
                      
                        if($model->save())                                                 
                        $this->redirect(array('view','id'=>$model0->id));;
                           
		}

		$this->render('matricula_form',array('model'=>$model));
	}
        
        
        
        

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Horario']))
		{
			$model->attributes=$_POST['Horario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Horario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Horario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Horario']))
			$model->attributes=$_GET['Horario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Horario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Horario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Horario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='horario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
