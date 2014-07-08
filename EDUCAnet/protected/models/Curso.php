<?php

/**
 * This is the model class for table "curso".
 *
 * The followings are the available columns in table 'curso':
 * @property integer $idcurso
 * @property string $nombrecurso
 * @property integer $profesor_idprofesor
 *
 * The followings are the available model relations:
 * @property Alumno[] $alumnos
 * @property BloquesAsignaturaCurso[] $bloquesAsignaturaCursos
 * @property Profesor $profesorIdprofesor
 * @property Asignatura[] $asignaturas
 * @property Evaluacion[] $evaluacions
 * @property Matricula[] $matriculas
 */
class Curso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'curso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombrecurso, profesor_idprofesor', 'required'),
			array('profesor_idprofesor', 'numerical', 'integerOnly'=>true),
			array('nombrecurso', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcurso, nombrecurso, profesor_idprofesor', 'safe', 'on'=>'search'),
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
			'alumnos' => array(self::HAS_MANY, 'Alumno', 'curso_idcurso'),
			'bloquesAsignaturaCursos' => array(self::HAS_MANY, 'BloquesAsignaturaCurso', 'curso_idcurso'),
			'profesorIdprofesor' => array(self::BELONGS_TO, 'Profesor', 'profesor_idprofesor'),
			'asignaturas' => array(self::MANY_MANY, 'Asignatura', 'curso_has_asignatura(curso_idcurso, asignatura_idasignatura)'),
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'curso_idcurso'),
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'curso_idcurso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcurso' => 'Idcurso',
			'nombrecurso' => 'Nombrecurso',
			'profesor_idprofesor' => 'Profesor Idprofesor',
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

		$criteria->compare('idcurso',$this->idcurso);
		$criteria->compare('nombrecurso',$this->nombrecurso,true);
		$criteria->compare('profesor_idprofesor',$this->profesor_idprofesor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Curso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
