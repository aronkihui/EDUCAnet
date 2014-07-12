<?php

/**
 * This is the model class for table "matriculadores".
 *
 * The followings are the available columns in table 'matriculadores':
 * @property string $idmatriculador
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_creacion
 * @property string $telefono
 * @property string $email
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Matricula[] $matriculas
 * @property Usuario $usuarioIdusuario
 */
class Matriculadores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matriculadores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idmatriculador, nombre, apellido, fecha_creacion, usuario_idusuario', 'required'),
			array('usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('idmatriculador', 'length', 'max'=>21),
			array('nombre, apellido', 'length', 'max'=>50),
			array('telefono, email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmatriculador, nombre, apellido, fecha_creacion, telefono, email, usuario_idusuario', 'safe', 'on'=>'search'),
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
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'matriculadores_idmatriculador'),
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idusuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmatriculador' => 'Idmatriculador',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'fecha_creacion' => 'Fecha Creacion',
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

		$criteria->compare('idmatriculador',$this->idmatriculador,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
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
	 * @return Matriculadores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
