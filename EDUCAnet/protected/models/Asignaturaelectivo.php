<?php

/**
 * This is the model class for table "asignaturaelectivo".
 *
 * The followings are the available columns in table 'asignaturaelectivo':
 * @property integer $idasignaturaelectivo
 * @property string $nomasigelec
 * @property integer $profesor_idprofesor
 * @property integer $cursoelectivo_idcursoelectivo
 *
 * The followings are the available model relations:
 * @property Cursoelectivo $cursoelectivoIdcursoelectivo
 * @property Profesor $profesorIdprofesor
 * @property Tablanotas[] $tablanotases
 */
class Asignaturaelectivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'asignaturaelectivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomasigelec, profesor_idprofesor, cursoelectivo_idcursoelectivo', 'required'),
			array('profesor_idprofesor, cursoelectivo_idcursoelectivo', 'numerical', 'integerOnly'=>true),
			array('nomasigelec', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idasignaturaelectivo, nomasigelec, profesor_idprofesor, cursoelectivo_idcursoelectivo', 'safe', 'on'=>'search'),
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
			'cursoelectivoIdcursoelectivo' => array(self::BELONGS_TO, 'Cursoelectivo', 'cursoelectivo_idcursoelectivo'),
			'profesorIdprofesor' => array(self::BELONGS_TO, 'Profesor', 'profesor_idprofesor'),
			'tablanotases' => array(self::HAS_MANY, 'Tablanotas', 'asignaturaelectivo_idasignaturaelectivo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idasignaturaelectivo' => 'Idasignaturaelectivo',
			'nomasigelec' => 'Nomasigelec',
			'profesor_idprofesor' => 'Profesor Idprofesor',
			'cursoelectivo_idcursoelectivo' => 'Cursoelectivo Idcursoelectivo',
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

		$criteria->compare('idasignaturaelectivo',$this->idasignaturaelectivo);
		$criteria->compare('nomasigelec',$this->nomasigelec,true);
		$criteria->compare('profesor_idprofesor',$this->profesor_idprofesor);
		$criteria->compare('cursoelectivo_idcursoelectivo',$this->cursoelectivo_idcursoelectivo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asignaturaelectivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
