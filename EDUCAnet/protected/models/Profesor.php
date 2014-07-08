<?php

/**
 * This is the model class for table "profesor".
 *
 * The followings are the available columns in table 'profesor':
 * @property integer $idprofesor
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Anotaciones[] $anotaciones
 * @property Asignaturaelectivo[] $asignaturaelectivos
 * @property Curso[] $cursos
 * @property Usuario $usuarioIdusuario
 * @property Asignatura[] $asignaturas
 */
class Profesor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, direccion, telefono, email, usuario_idusuario', 'required'),
			array('usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido', 'length', 'max'=>50),
			array('direccion, telefono, email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idprofesor, nombre, apellido, direccion, telefono, email, usuario_idusuario', 'safe', 'on'=>'search'),
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
			'anotaciones' => array(self::HAS_MANY, 'Anotaciones', 'profesor_idprofesor'),
			'asignaturaelectivos' => array(self::HAS_MANY, 'Asignaturaelectivo', 'profesor_idprofesor'),
			'cursos' => array(self::HAS_MANY, 'Curso', 'profesor_idprofesor'),
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idusuario'),
			'asignaturas' => array(self::MANY_MANY, 'Asignatura', 'profesor_has_asignatura(profesor_idprofesor, asignatura_idasignatura)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idprofesor' => 'Idprofesor',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'email' => 'Email',
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

		$criteria->compare('idprofesor',$this->idprofesor);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('usuario_idusuario',$this->usuario_idusuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
