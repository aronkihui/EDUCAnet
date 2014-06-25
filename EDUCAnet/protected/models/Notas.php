<?php

/**
 * This is the model class for table "notas".
 *
 * The followings are the available columns in table 'notas':
 * @property integer $idyablanotas
 * @property double $contenido
 * @property integer $alumno_idalumno
 * @property integer $asignaturacomun_idasignaturacomun
 * @property integer $asignaturaelectivo_idasignaturaelectivo
 *
 * The followings are the available model relations:
 * @property Alumno $alumnoIdalumno
 * @property Asignaturacomun $asignaturacomunIdasignaturacomun
 * @property Asignaturaelectivo $asignaturaelectivoIdasignaturaelectivo
 */
class Notas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contenido, alumno_idalumno', 'required'),
			array('alumno_idalumno, asignaturacomun_idasignaturacomun, asignaturaelectivo_idasignaturaelectivo', 'numerical', 'integerOnly'=>true),
			array('contenido', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idyablanotas, contenido, alumno_idalumno, asignaturacomun_idasignaturacomun, asignaturaelectivo_idasignaturaelectivo', 'safe', 'on'=>'search'),
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
			'asignaturacomunIdasignaturacomun' => array(self::BELONGS_TO, 'Asignaturacomun', 'asignaturacomun_idasignaturacomun'),
			'asignaturaelectivoIdasignaturaelectivo' => array(self::BELONGS_TO, 'Asignaturaelectivo', 'asignaturaelectivo_idasignaturaelectivo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idyablanotas' => 'Idyablanotas',
			'contenido' => 'Contenido',
			'alumno_idalumno' => 'Alumno Idalumno',
			'asignaturacomun_idasignaturacomun' => 'Asignaturacomun Idasignaturacomun',
			'asignaturaelectivo_idasignaturaelectivo' => 'Asignaturaelectivo Idasignaturaelectivo',
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

		$criteria->compare('idyablanotas',$this->idyablanotas);
		$criteria->compare('contenido',$this->contenido);
		$criteria->compare('alumno_idalumno',$this->alumno_idalumno);
		$criteria->compare('asignaturacomun_idasignaturacomun',$this->asignaturacomun_idasignaturacomun);
		$criteria->compare('asignaturaelectivo_idasignaturaelectivo',$this->asignaturaelectivo_idasignaturaelectivo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
