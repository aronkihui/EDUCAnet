<?php

/**
 * This is the model class for table "apoderado".
 *
 * The followings are the available columns in table 'apoderado':
 * @property integer $idapoderado
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $direccion
 * @property string $email
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdusuario
 * @property Matricula[] $matriculas
 */
class Apoderado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apoderado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idapoderado, nombre, apellido, telefono, direccion, usuario_idusuario', 'required'),
			array('idapoderado, usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, telefono, direccion, email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idapoderado, nombre, apellido, telefono, direccion, email, usuario_idusuario', 'safe', 'on'=>'search'),
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
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'apoderado_idapoderado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idapoderado' => 'Idapoderado',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
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

		$criteria->compare('idapoderado',$this->idapoderado);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);
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
	 * @return Apoderado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
