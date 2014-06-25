<?php

/**
 * This is the model class for table "archivo".
 *
 * The followings are the available columns in table 'archivo':
 * @property integer $idarchivo
 * @property string $archivo_nombre
 * @property string $archivo_fecha
 * @property string $archivo_path
 * @property string $archivo_descripcion
 * @property string $archivo_area
 * @property string $archivo_cursonivel
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdusuario
 * @property Comentario[] $comentarios
 * @property Registro[] $registros
 */
class BusquedaAvanzada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'archivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('archivo_nombre, archivo_fecha, archivo_path, archivo_descripcion, archivo_area, archivo_cursonivel, usuario_idusuario', 'required'),
			array('usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('archivo_nombre, archivo_area, archivo_cursonivel', 'length', 'max'=>45),
			array('archivo_path', 'length', 'max'=>300),
			array('archivo_descripcion', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idarchivo, archivo_nombre, archivo_fecha, archivo_path, archivo_descripcion, archivo_area, archivo_cursonivel, usuario_idusuario', 'safe', 'on'=>'search'),
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
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idusuario'),
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'archivo_idarchivo'),
			'registros' => array(self::HAS_MANY, 'Registro', 'archivo_idarchivo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idarchivo' => 'Idarchivo',
			'archivo_nombre' => 'Archivo Nombre',
			'archivo_fecha' => 'Archivo Fecha',
			'archivo_path' => 'Archivo Path',
			'archivo_descripcion' => 'Archivo Descripcion',
			'archivo_area' => 'Archivo Area',
			'archivo_cursonivel' => 'Archivo Cursonivel',
			'usuario_idusuario' => 'Usuario Idusuario',
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

		$criteria->compare('idarchivo',$this->idarchivo);
		$criteria->compare('archivo_nombre',$this->archivo_nombre,true);
		$criteria->compare('archivo_fecha',$this->archivo_fecha,true);
		$criteria->compare('archivo_path',$this->archivo_path,true);
		$criteria->compare('archivo_descripcion',$this->archivo_descripcion,true);
		$criteria->compare('archivo_area',$this->archivo_area,true);
		$criteria->compare('archivo_cursonivel',$this->archivo_cursonivel,true);
		$criteria->compare('usuario_idusuario',$this->usuario_idusuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BusquedaAvanzada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
