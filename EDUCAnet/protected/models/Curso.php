<?php

/**
 * This is the model class for table "curso".
 *
 * The followings are the available columns in table 'curso':
 * @property integer $idcurso
 * @property string $nombrecurso
 * @property string $año
 * @property integer $nivel
 * @property string $especialidad
 * @property integer $profesor_idprofesor
 * @property integer $matricula_idmatricula
 *
 * The followings are the available model relations:
 * @property BloquesAsignaturaCurso[] $bloquesAsignaturaCursos
 * @property Matricula $matriculaIdmatricula
 * @property Profesor $profesorIdprofesor
 * @property Asignatura[] $asignaturas
 * @property Evaluacion[] $evaluacions
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
			array('nombrecurso, año, nivel, especialidad', 'required'),
			array('nivel, profesor_idprofesor, matricula_idmatricula', 'numerical', 'integerOnly'=>true),
			array('nombrecurso', 'length', 'max'=>40),
			array('especialidad', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcurso, nombrecurso, año, nivel, especialidad, profesor_idprofesor, matricula_idmatricula', 'safe', 'on'=>'search'),
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
			'bloquesAsignaturaCursos' => array(self::HAS_MANY, 'BloquesAsignaturaCurso', 'curso_idcurso'),
			'matriculaIdmatricula' => array(self::BELONGS_TO, 'Matricula', 'matricula_idmatricula'),
			'profesorIdprofesor' => array(self::BELONGS_TO, 'Profesor', 'profesor_idprofesor'),
			'asignaturas' => array(self::MANY_MANY, 'Asignatura', 'curso_has_asignatura(curso_idcurso, asignatura_idasignatura)'),
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'curso_idcurso'),
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
			'año' => 'Año',
			'nivel' => 'Nivel',
			'especialidad' => 'Especialidad',
			'profesor_idprofesor' => 'Profesor Idprofesor',
			'matricula_idmatricula' => 'Matricula Idmatricula',
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
		$criteria->compare('año',$this->año,true);
		$criteria->compare('nivel',$this->nivel);
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('profesor_idprofesor',$this->profesor_idprofesor);
		$criteria->compare('matricula_idmatricula',$this->matricula_idmatricula);

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
