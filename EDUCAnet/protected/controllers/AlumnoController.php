<?php

class AlumnoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/portalalumno';

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
            
                $tipoUsuario = Yii::app()->user->getState('tipoUsuario');
                if($tipoUsuario==='1')
                {
                        return array(
                                array('allow',  // allow all users to perform 'index' and 'view' actions
                                        'actions'=>array('view'),
                                        'users'=>array('*'),
                                ),
                                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                        'actions'=>array('portalalumno','infoacademica', 'anotaciones', 'calendario', 'micurso', 'misprofes', 'salir'),
                                        'users'=>array('@'),
                                ),
                                array('allow', // allow admin user to perform 'admin' and 'delete' actions
                                        'actions'=>array('create','update','admin','delete'),
                                        'users'=>array('admin'),
                                ),
                                array('deny',  // deny all users
                                        'users'=>array('*'),
                                ),
                        );
                }                
                else
                {
                        return array(
                                array('allow',  // allow all users to perform 'index' and 'view' actions
                                        'actions'=>array('view'),
                                        'users'=>array('*'),
                                ),
                                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                        'actions'=>array(''),
                                        'users'=>array('@'),
                                ),
                                array('allow', // allow admin user to perform 'admin' and 'delete' actions
                                        'actions'=>array('create', 'update','admin','delete'),
                                        'users'=>array('admin'),
                                ),
                                array('deny',  // deny all users
                                        'users'=>array('*'),
                                ),
                        );
                }
		
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
		$model=new Alumno;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Alumno']))
		{
			$model->attributes=$_POST['Alumno'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idalumno));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Alumno']))
		{
			$model->attributes=$_POST['Alumno'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idalumno));
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
		$dataProvider=new CActiveDataProvider('Alumno');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Alumno('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Alumno']))
			$model->attributes=$_GET['Alumno'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Alumno the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Alumno::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Alumno $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='alumno-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionPortalalumno()
        {
            
                $this->render('infoacademica'); 
        }

        public function actionInfoacademica()
        {
                $idcurso = Yii::app()->user->getState('idcurso');
                $idelectivo = Yii::app()->user->getState('idelectivo');
                $idalumno = Yii::app()->user->getState('idalumno');
                $asignaturas = Asignaturacomun::model()->findAll(array(
                                        'condition'=>'cursocomun_idcurso = :cursoID',
                                        'params'=>array(':cursoID'=>$idcurso),
                                ));
                if($idelectivo!==NULL)
                {
                        $electivos = Asignaturaelectivo::model()->findAll(array(
                                                'condition'=>'cursoelectivo_idcursoelectivo = :cursoID',
                                                'params'=>array(':cursoID'=>$idelectivo),
                        ));
                        $this->render('infoacademica', array('asignaturas'=>$asignaturas, 'electivos'=>$electivos, 'idalumno'=>$idalumno));
                }
                else
                {
                        $electivos=NULL;
                        $this->render('infoacademica', array('asignaturas'=>$asignaturas, 'electivos'=>$electivos, 'idalumno'=>$idalumno));
                }
        }

        public function actionAnotaciones()
        {
                $idalumno = Yii::app()->user->getState('idalumno');
                $anotaciones = Anotaciones::model()->findAll(array(
                                        'condition'=>'alumno_idalumno = :alumnoID',
                                        'params'=>array(':alumnoID'=>$idalumno),
                                ));
                $this->render('anotaciones', array('anotaciones'=>$anotaciones));
        }

        public function actionCalendario()
        {
                
                $this->render('calendario');
        }

        public function actionMicurso()
        {                
                $idcurso = Yii::app()->user->getState('idcurso');
                $idelectivo = Yii::app()->user->getState('idelectivo');
                $listacompañeros = Alumno::model()->findAll(array(
                                        'condition'=>'cursocomun_idcurso = :cursoID',
                                        'params'=>array(':cursoID'=>$idcurso),
                                ));
                if($idelectivo !== NULL)
                {
                        $listacompañeroselectivo = Alumno::model()->findAll(array(
                                        'condition'=>'cursoelectivo_idcursoelectivo = :cursoelectivoID',
                                        'params'=>array(':cursoelectivoID'=>$idelectivo),
                                ));
                        $this->render('micurso', array('listacompañeros'=>$listacompañeros, 'listacompañeroselectivo'=>$listacompañeroselectivo));
                }
                else
                {
                        $this->render('micurso', array('listacompañeros'=>$listacompañeros));
                }
        }

        public function actionMisProfes()
        {                
                $idcurso = Yii::app()->user->getState('idcurso');
                $idelectivo = Yii::app()->user->getState('idelectivo');
                $asignaturas = Asignaturacomun::model()->findAll(array(
                                        'condition'=>'cursocomun_idcurso = :cursoID',
                                        'params'=>array(':cursoID'=>$idcurso),
                                ));
                if($idelectivo !== NULL)
                {
                        $asignaturaselectivo = Asignaturaelectivo::model()->findAll(array(
                                               'condition'=>'cursoelectivo_idcursoelectivo = :cursoelecID',
                                                'params'=>array(':cursoelecID'=>$idelectivo),
                                        ));
                        $this->render('misprofes', array('listaasignaturas'=>$asignaturas, 'electivos'=> $asignaturaselectivo));
                }
                else
                {
                        $this->render('misprofes', array('listaasignaturas'=>$asignaturas));
                }
        }
        
        public function actionSalir()
        {
                Yii::app()->user->logout();
                $this->redirect(Yii::app()->homeUrl);
        }
}