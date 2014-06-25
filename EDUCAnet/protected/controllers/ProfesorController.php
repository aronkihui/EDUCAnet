<?php

class ProfesorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/portaldocente';

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
                if($tipoUsuario==='2')
                {
                        return array(
                                array('allow',  // allow all users to perform 'index' and 'view' actions
                                        'actions'=>array('index'),
                                        'users'=>array('*'),
                                ),
                                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                        'actions'=>array('portaldocente', 'gestionacademica', 'gestionasistencia', 'gestionanotaciones', 'gestioncalendario', 'misalumnos', 'mostraralumnos', 'mostraralumnosa', 'notas', 'notaselectivo', 'anotacion', 'historial', 'mostraralumnoselectivo', 'mostraralumnoselectivoa','miscolegas', 'salir'),
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
                else
                {
                        return array(
                                array('allow',  // allow all users to perform 'index' and 'view' actions
                                        'actions'=>array('index'),
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
		$model=new Profesor;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Profesor']))
		{
			$model->attributes=$_POST['Profesor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idprofesor));
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

		if(isset($_POST['Profesor']))
		{
			$model->attributes=$_POST['Profesor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idprofesor));
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
		$dataProvider=new CActiveDataProvider('Profesor');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Profesor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Profesor']))
			$model->attributes=$_GET['Profesor'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Profesor the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Profesor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Profesor $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='profesor-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionPortaldocente()
        {
            $this->render('gestionacademica'); 
        }
    
        public function actionGestionacademica()
        {
                $idprofesor = Yii::app()->user->getState('idprofesor');
                $asignaturas = Asignaturacomun::model()->findAll(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                $verificacion = Asignaturaelectivo::model()->find(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                if($verificacion !== NULL)
                {
                        Yii::app()->user->setState('idelectivos', $verificacion->idasignaturaelectivo);
                        $electivos = Asignaturaelectivo::model()->findAll(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                        $this->render('gestionacademica', array('asignaturas'=>$asignaturas, 'electivos'=>$electivos));
                }
                else
                {
                        $this->render('gestionacademica', array('asignaturas'=>$asignaturas));
                } 
        }

        public function actionGestionasistencia()
        {
            $this->render('gestionasistencia'); 
        }

        public function actionGestionanotaciones()
        {
                $idprofesor = Yii::app()->user->getState('idprofesor');
                $asignaturas = Asignaturacomun::model()->findAll(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                $verificacion = Asignaturaelectivo::model()->find(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                if($verificacion !== NULL)
                {
                        Yii::app()->user->setState('idelectivos', $verificacion->idasignaturaelectivo);
                        $electivos = Asignaturaelectivo::model()->findAll(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                        $this->render('gestionanotaciones', array('asignaturas'=>$asignaturas, 'electivos'=>$electivos));
                }
                else
                {
                        $this->render('gestionanotaciones', array('asignaturas'=>$asignaturas));
                } 
        }

        public function actionGestioncalendario()
        {
            $this->render('gestioncalendario'); 
        }

        public function actionMisalumnos()
        {
                $idprofesor = Yii::app()->user->getState('idprofesor');
                $asignaturas = Asignaturacomun::model()->findAll(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                $verificacion = Asignaturaelectivo::model()->find(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                if($verificacion !== NULL)
                {
                        Yii::app()->user->setState('idelectivos', $verificacion->idasignaturaelectivo);
                        $electivos = Asignaturaelectivo::model()->findAll(array(
                                                   'condition'=>'profesor_idprofesor = :profesorID',
                                                    'params'=>array(':profesorID'=>$idprofesor),
                                            ));
                        $this->render('misalumnos', array('asignaturas'=>$asignaturas, 'electivos'=>$electivos));
                }
                else
                {
                        $this->render('misalumnos', array('asignaturas'=>$asignaturas));
                }                
        }
        
        public function actionNotas()
        {
            $idasignatura = $_GET['idasignatura'];            
            $idcurso = $_GET['idcurso'];
            $seleccion = $_GET['seleccion'];
            $notas = new Notas;
            Yii::app()->user->setState('seleccion', $seleccion);
            Yii::app()->user->setState('idcurso', $idcurso);
            Yii::app()->user->setState('idasignatura', $idasignatura);
            if(isset($_POST['Notas']))
            {
                $idalumno = $_GET['idalumno'];
                $notas->attributes = $_POST['Notas'];
                $notas->setAttribute('asignaturacomun_idasignaturacomun',$idasignatura);
                $notas->setAttribute('alumno_idalumno',$idalumno);
                $notas->save();
            }
            $alumnos = Alumno::model()->findAll(array(
                                                'condition'=>'cursocomun_idcurso = :cursoID',
                                                'params'=>array(':cursoID'=>$idcurso),
                                        ));
            $this->render('notas', array('alumnos'=>$alumnos, 'seleccion'=>$seleccion, 'idasignatura'=>$idasignatura, 'notas'=>$notas));           
        }
        
        public function actionNotaselectivo()
        {
            $idasignaturaelectivo = $_GET['idasignaturaelectivo'];            
            $idcursoelectivo = $_GET['idcursoelectivo'];
            $seleccion = $_GET['seleccion'];
            $notas = new Notas;
            Yii::app()->user->setState('seleccion', $seleccion);
            Yii::app()->user->setState('idcursoelectivo', $idcursoelectivo);
            Yii::app()->user->setState('idasignaturaelectivo', $idasignaturaelectivo);
            if(isset($_POST['Notas']))
            {
                $idalumno = $_GET['idalumno'];
                $notas->attributes = $_POST['Notas'];
                $notas->setAttribute('asignaturaelectivo_idasignaturaelectivo',$idasignaturaelectivo);
                $notas->setAttribute('alumno_idalumno',$idalumno);
                $notas->save();
            }
            $alumnos = Alumno::model()->findAll(array(
                                                'condition'=>'cursoelectivo_idcursoelectivo = :cursoID',
                                                'params'=>array(':cursoID'=>$idcursoelectivo),
                                        ));
            $this->render('notaselectivo', array('alumnos'=>$alumnos, 'seleccion'=>$seleccion, 'idasignaturaelectivo'=>$idasignaturaelectivo, 'notas'=>$notas));           
        }
        
        public function actionAnotacion()
        {
            $idalumno = $_GET['idalumno'];
            $tipoalumno = $_GET['tipoalumno'];
            $seleccion = $_GET['seleccion'];
            $idcurso = $_GET['idcurso'];
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $anotaciones = new Anotaciones;
            if(isset($_POST['Anotaciones']))
            {
                $idalumno = $_GET['idalumno'];
                $idprofesor = $_GET['idprofesor'];
                $anotaciones->attributes = $_POST['Anotaciones'];
                $anotaciones->setAttribute('profesor_idprofesor',$idprofesor);
                $anotaciones->setAttribute('alumno_idalumno',$idalumno);
                $anotaciones->save();
                $this->redirect('http://localhost/EDUCAnet/EDUCAnet/index.php/profesor/gestionanotaciones');
            }
            $this->render('anotacion', array('idalumno'=>$idalumno, 'tipoalumno'=>$tipoalumno, 'seleccion'=>$seleccion, 'idcurso'=>$idcurso, 'nombre'=>$nombre, 'apellido'=>$apellido, 'anotaciones'=>$anotaciones));            
        }
        
        public function actionHistorial()
        {
            $idalumno = $_GET['idalumno'];
            $tipoalumno = $_GET['tipoalumno'];
            $seleccion = $_GET['seleccion'];
            $idcurso = $_GET['idcurso'];
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $anotaciones = Anotaciones::model()->findAll(array(
                                                   'condition'=>'alumno_idalumno = :alumnoID',
                                                    'params'=>array(':alumnoID'=>$idalumno),
                                            ));
            $this->render('historial', array('idalumno'=>$idalumno, 'tipoalumno'=>$tipoalumno, 'seleccion'=>$seleccion, 'idcurso'=>$idcurso, 'nombre'=>$nombre, 'apellido'=>$apellido, 'anotaciones'=>$anotaciones));            
        }
        
        public function actionMostraralumnos()
        {
            $idcurso = $_GET['idcurso'];
            $seleccion = $_GET['seleccion'];
            
            $alumnos = Alumno::model()->findAll(array(
                                                'condition'=>'cursocomun_idcurso = :cursoID',
                                                'params'=>array(':cursoID'=>$idcurso),
                                        ));
            $this->render('mostraralumnos', array('alumnos'=>$alumnos, 'seleccion'=>$seleccion));
            
        }
        
        public function actionMostraralumnosa()
        {
            $idcurso = $_GET['idcurso'];
            $seleccion = $_GET['seleccion'];
            
            $alumnos = Alumno::model()->findAll(array(
                                                'condition'=>'cursocomun_idcurso = :cursoID',
                                                'params'=>array(':cursoID'=>$idcurso),
                                        ));
            $this->render('mostraralumnosa', array('alumnos'=>$alumnos, 'seleccion'=>$seleccion, 'idcurso'=>$idcurso));
            
        }
        
        public function actionMostraralumnoselectivo()
        {
            $idcurso = $_GET['idcurso'];
            $seleccion = $_GET['seleccion'];
            $alumnos = Alumno::model()->findAll(array(
                                                'condition'=>'cursoelectivo_idcursoelectivo = :cursoID',
                                                'params'=>array(':cursoID'=>$idcurso),
                                        ));
            $this->render('mostraralumnoselectivo', array('alumnos'=>$alumnos, 'seleccion'=>$seleccion));
            
        }
        
        public function actionMostraralumnoselectivoa()
        {
            $idcurso = $_GET['idcurso'];
            $seleccion = $_GET['seleccion'];
            $alumnos = Alumno::model()->findAll(array(
                                                'condition'=>'cursoelectivo_idcursoelectivo = :cursoID',
                                                'params'=>array(':cursoID'=>$idcurso),
                                        ));
            $this->render('mostraralumnoselectivoa', array('alumnos'=>$alumnos, 'seleccion'=>$seleccion, 'idcurso'=>$idcurso));
            
        }

        public function actionMiscolegas()
        {
            $listaprofesores = Profesor::model()->findAll();
            $this->render('miscolegas', array('listaprofesores'=>$listaprofesores));            
        }
        
        public function actionSalir()
        {
                Yii::app()->user->logout();
                $this->redirect(Yii::app()->homeUrl);
        }
}
