<?php

/**
 * This is the model class for table "anotaciones".
 *
 * The followings are the available columns in table 'anotaciones':
 * @property integer $idanotaciones
 * @property integer $tipo
 * @property string $contenido
 * @property integer $alumno_idalumno
 * @property integer $profesor_idprofesor
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Alumno $alumnoIdalumno
 * @property Profesor $profesorIdprofesor
 */
class Anotaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anotaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contenido, alumno_idalumno, profesor_idprofesor', 'required'),
			array('tipo, alumno_idalumno, profesor_idprofesor', 'numerical', 'integerOnly'=>true),
			array('contenido', 'length', 'max'=>200),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idanotaciones, tipo, contenido, alumno_idalumno, profesor_idprofesor, fecha', 'safe', 'on'=>'search'),
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
			'profesorIdprofesor' => array(self::BELONGS_TO, 'Profesor', 'profesor_idprofesor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idanotaciones' => 'Idanotaciones',
			'tipo' => 'Tipo',
			'contenido' => 'Contenido',
			'alumno_idalumno' => 'Alumno Idalumno',
			'profesor_idprofesor' => 'Profesor Idprofesor',
			'fecha' => 'Fecha',
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

		$criteria->compare('idanotaciones',$this->idanotaciones);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('alumno_idalumno',$this->alumno_idalumno);
		$criteria->compare('profesor_idprofesor',$this->profesor_idprofesor);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anotaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
