<?php

/**
 * This is the model class for table "matricula".
 *
 * The followings are the available columns in table 'matricula':
 * @property integer $idmatricula
 * @property integer $apoderado_idapoderado
 * @property integer $alumno_idalumno
 * @property string $fecha
 * @property integer $matriculador_idmatriculador
 *
 * The followings are the available model relations:
 * @property Curso[] $cursos
 * @property Alumno $alumnoIdalumno
 * @property Apoderado $apoderadoIdapoderado
 * @property Matriculador $matriculadorIdmatriculador
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
			array('apoderado_idapoderado, alumno_idalumno, fecha, matriculador_idmatriculador', 'required'),
			array('apoderado_idapoderado, alumno_idalumno, matriculador_idmatriculador', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmatricula, apoderado_idapoderado, alumno_idalumno, fecha, matriculador_idmatriculador', 'safe', 'on'=>'search'),
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
			'cursos' => array(self::HAS_MANY, 'Curso', 'matricula_idmatricula'),
			'alumnoIdalumno' => array(self::BELONGS_TO, 'Alumno', 'alumno_idalumno'),
			'apoderadoIdapoderado' => array(self::BELONGS_TO, 'Apoderado', 'apoderado_idapoderado'),
			'matriculadorIdmatriculador' => array(self::BELONGS_TO, 'Matriculador', 'matriculador_idmatriculador'),
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
			'matriculador_idmatriculador' => 'Matriculador Idmatriculador',
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
		$criteria->compare('apoderado_idapoderado',$this->apoderado_idapoderado);
		$criteria->compare('alumno_idalumno',$this->alumno_idalumno);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('matriculador_idmatriculador',$this->matriculador_idmatriculador);

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
}
