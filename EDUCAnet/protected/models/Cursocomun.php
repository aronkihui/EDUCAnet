<?php

/**
 * This is the model class for table "cursocomun".
 *
 * The followings are the available columns in table 'cursocomun':
 * @property integer $idcurso
 * @property string $etiqueta
 * @property string $nombrecurso
 * @property integer $profesor_idprofesor
 *
 * The followings are the available model relations:
 * @property Alumno[] $alumnos
 * @property Asignaturacomun[] $asignaturacomuns
 * @property Profesor $profesorIdprofesor
 */
class Cursocomun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cursocomun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('etiqueta, nombrecurso, profesor_idprofesor', 'required'),
			array('profesor_idprofesor', 'numerical', 'integerOnly'=>true),
			array('etiqueta', 'length', 'max'=>3),
			array('nombrecurso', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcurso, etiqueta, nombrecurso, profesor_idprofesor', 'safe', 'on'=>'search'),
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
			'alumnos' => array(self::HAS_MANY, 'Alumno', 'cursocomun_idcurso'),
			'asignaturacomuns' => array(self::HAS_MANY, 'Asignaturacomun', 'cursocomun_idcurso'),
			'profesorIdprofesor' => array(self::BELONGS_TO, 'Profesor', 'profesor_idprofesor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcurso' => 'Idcurso',
			'etiqueta' => 'Etiqueta',
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
		$criteria->compare('etiqueta',$this->etiqueta,true);
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
	 * @return Cursocomun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
