<?php

/**
 * This is the model class for table "bloques".
 *
 * The followings are the available columns in table 'bloques':
 * @property integer $idbloques
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property BloquesAsignaturaCurso[] $bloquesAsignaturaCursos
 * @property BloquesAsignaturaCurso[] $bloquesAsignaturaCursos1
 */
class Bloques extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bloques';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hora_inicio, hora_fin, fecha_creacion', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbloques, hora_inicio, hora_fin, fecha_creacion', 'safe', 'on'=>'search'),
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
			'bloquesAsignaturaCursos' => array(self::HAS_MANY, 'BloquesAsignaturaCurso', 'bloques_id_inicio'),
			'bloquesAsignaturaCursos1' => array(self::HAS_MANY, 'BloquesAsignaturaCurso', 'bloques_id_fin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbloques' => 'Idbloques',
			'hora_inicio' => 'Hora Inicio',
			'hora_fin' => 'Hora Fin',
			'fecha_creacion' => 'Fecha Creacion',
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

		$criteria->compare('idbloques',$this->idbloques);
		$criteria->compare('hora_inicio',$this->hora_inicio,true);
		$criteria->compare('hora_fin',$this->hora_fin,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bloques the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
