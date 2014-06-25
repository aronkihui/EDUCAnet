<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property integer $idalumno
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property integer $usuario_idusuario
 * @property integer $cursocomun_idcurso
 * @property integer $cursoelectivo_idcursoelectivo
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdusuario
 * @property Cursocomun $cursocomunIdcurso
 * @property Cursoelectivo $cursoelectivoIdcursoelectivo
 * @property Anotaciones[] $anotaciones
 * @property Tablanotas[] $tablanotases
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, direccion, telefono, email, usuario_idusuario, cursocomun_idcurso', 'required'),
			array('usuario_idusuario, cursocomun_idcurso, cursoelectivo_idcursoelectivo', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido', 'length', 'max'=>10),
			array('direccion, telefono, email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idalumno, nombre, apellido, direccion, telefono, email, usuario_idusuario, cursocomun_idcurso, cursoelectivo_idcursoelectivo', 'safe', 'on'=>'search'),
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
			'cursocomunIdcurso' => array(self::BELONGS_TO, 'Cursocomun', 'cursocomun_idcurso'),
			'cursoelectivoIdcursoelectivo' => array(self::BELONGS_TO, 'Cursoelectivo', 'cursoelectivo_idcursoelectivo'),
			'anotaciones' => array(self::HAS_MANY, 'Anotaciones', 'alumno_idalumno'),
			'tablanotases' => array(self::HAS_MANY, 'Tablanotas', 'alumno_idalumno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idalumno' => 'Idalumno',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'usuario_idusuario' => 'Usuario Idusuario',
			'cursocomun_idcurso' => 'Cursocomun Idcurso',
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

		$criteria->compare('idalumno',$this->idalumno);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('usuario_idusuario',$this->usuario_idusuario);
		$criteria->compare('cursocomun_idcurso',$this->cursocomun_idcurso);
		$criteria->compare('cursoelectivo_idcursoelectivo',$this->cursoelectivo_idcursoelectivo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
