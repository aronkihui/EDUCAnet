<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property integer $idalumno
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property integer $telefono
 * @property string $email
 * @property string $fecha_nacimiento
 * @property integer $curso_idcurso
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Curso $cursoIdcurso
 * @property Usuario $usuarioIdusuario
 * @property Anotaciones[] $anotaciones
 * @property Evaluacion[] $evaluacions
 * @property Matricula[] $matriculas
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
			array('nombre, apellido, direccion, telefono, email, fecha_nacimiento, curso_idcurso, usuario_idusuario', 'required'),
			array('telefono, curso_idcurso, usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, direccion', 'length', 'max'=>50),
			array('email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idalumno, nombre, apellido, direccion, telefono, email, fecha_nacimiento, curso_idcurso, usuario_idusuario', 'safe', 'on'=>'search'),
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
			'cursoIdcurso' => array(self::BELONGS_TO, 'Curso', 'curso_idcurso'),
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idusuario'),
			'anotaciones' => array(self::HAS_MANY, 'Anotaciones', 'alumno_idalumno'),
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'alumno_idalumno'),
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'alumno_idalumno'),
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
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'curso_idcurso' => 'Curso Idcurso',
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

		$criteria->compare('idalumno',$this->idalumno);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('curso_idcurso',$this->curso_idcurso);
		$criteria->compare('usuario_idusuario',$this->usuario_idusuario);

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
