<?php

/**
 * This is the model class for table "matricula".
 *
 * The followings are the available columns in table 'matricula':
 * @property integer $idmatricula
 * @property string $apoderado_idapoderado
 * @property string $alumno_idalumno
 * @property string $fecha
 * @property string $estadoMatricula
 * @property integer $curso_idcurso
 * @property string $matriculadores_idmatriculador
 *
 * The followings are the available model relations:
 * @property Alumno $alumnoIdalumno
 * @property Apoderado $apoderadoIdapoderado
 * @property Curso $cursoIdcurso
 * @property Matriculadores $matriculadoresIdmatriculador
 */
class Matricula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matricula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('apoderado_idapoderado, alumno_idalumno, fecha, estadoMatricula, curso_idcurso, matriculadores_idmatriculador', 'required'),
			array('curso_idcurso', 'numerical', 'integerOnly'=>true),
			array('apoderado_idapoderado, alumno_idalumno, matriculadores_idmatriculador', 'length', 'max'=>21),
			array('estadoMatricula', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmatricula, apoderado_idapoderado, alumno_idalumno, fecha, estadoMatricula, curso_idcurso, matriculadores_idmatriculador', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'alumnoIdalumno' => array(self::BELONGS_TO, 'Alumno', 'alumno_idalumno'),
			'apoderadoIdapoderado' => array(self::BELONGS_TO, 'Apoderado', 'apoderado_idapoderado'),
			'cursoIdcurso' => array(self::BELONGS_TO, 'Curso', 'curso_idcurso'),
			'matriculadoresIdmatriculador' => array(self::BELONGS_TO, 'Matriculadores', 'matriculadores_idmatriculador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmatricula' => 'Idmatricula',
			'apoderado_idapoderado' => 'Apoderado Idapoderado',
			'alumno_idalumno' => 'Alumno Idalumno',
			'fecha' => 'Fecha',
			'estadoMatricula' => 'Estado Matricula',
			'curso_idcurso' => 'Curso Idcurso',
			'matriculadores_idmatriculador' => 'Matriculadores Idmatriculador',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idmatricula',$this->idmatricula);
		$criteria->compare('apoderado_idapoderado',$this->apoderado_idapoderado,true);
		$criteria->compare('alumno_idalumno',$this->alumno_idalumno,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('estadoMatricula',$this->estadoMatricula,true);
		$criteria->compare('curso_idcurso',$this->curso_idcurso);
		$criteria->compare('matriculadores_idmatriculador',$this->matriculadores_idmatriculador,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Matricula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
        
          
        
        
   public function beforeSave()
                {
            
            if(parent::beforeSave()){
            {
            date_default_timezone_set("America/Santiago");
            $this->fecha = date("Y-m-d H:i:s");
            
            
             return true;
             }
             return false;
            }
                }     
        
    
                
                
                
      public function getApoderado()
        {
        $apoderado = Apoderado::model()->findAll(array('order'=>'fecha_creacion asc'));
        $apoderadoArray = CHtml::listData($apoderado, 'idapoderado','idapoderado','nombre');
        return $apoderadoArray;
        }

    public function getAlumno() 
        {
    
        $alumno= Alumno::model()->findAll(array('order'=>'fecha_creacion asc'));
        $alumnoArray=CHtml::listData($alumno,'idalumno','idalumno','nombre');
        return $alumnoArray;
        }
        
        public function getCurso()
                {
            $curso=  Curso::model()->findAll(array('order'=>'año asc'));
            $cursoArray=CHtml::listData($curso,'idcurso','nivel','nombrecurso');
            return $cursoArray;
        }
        
        
        
}
