<?php

/**
 * This is the model class for table "asignaturacomun".
 *
 * The followings are the available columns in table 'asignaturacomun':
 * @property integer $idasignaturacomun
 * @property string $nomasigcomun
 * @property integer $cursocomun_idcurso
 * @property integer $profesor_idprofesor
 * @property string $etiqueta
 *
 * The followings are the available model relations:
 * @property Cursocomun $cursocomunIdcurso
 * @property Profesor $profesorIdprofesor
 * @property Notas[] $notases
 */
class Asignaturacomun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'asignaturacomun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomasigcomun, cursocomun_idcurso, profesor_idprofesor, etiqueta', 'required'),
			array('cursocomun_idcurso, profesor_idprofesor', 'numerical', 'integerOnly'=>true),
			array('nomasigcomun', 'length', 'max'=>45),
			array('etiqueta', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idasignaturacomun, nomasigcomun, cursocomun_idcurso, profesor_idprofesor, etiqueta', 'safe', 'on'=>'search'),
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
			'cursocomunIdcurso' => array(self::BELONGS_TO, 'Cursocomun', 'cursocomun_idcurso'),
			'profesorIdprofesor' => array(self::BELONGS_TO, 'Profesor', 'profesor_idprofesor'),
			'notases' => array(self::HAS_MANY, 'Notas', 'asignaturacomun_idasignaturacomun'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idasignaturacomun' => 'Idasignaturacomun',
			'nomasigcomun' => 'Nomasigcomun',
			'cursocomun_idcurso' => 'Cursocomun Idcurso',
			'profesor_idprofesor' => 'Profesor Idprofesor',
			'etiqueta' => 'Etiqueta',
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

		$criteria->compare('idasignaturacomun',$this->idasignaturacomun);
		$criteria->compare('nomasigcomun',$this->nomasigcomun,true);
		$criteria->compare('cursocomun_idcurso',$this->cursocomun_idcurso);
		$criteria->compare('profesor_idprofesor',$this->profesor_idprofesor);
		$criteria->compare('etiqueta',$this->etiqueta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asignaturacomun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
