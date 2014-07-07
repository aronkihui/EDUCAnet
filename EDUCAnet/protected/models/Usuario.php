<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idusuario
 * @property string $nombreusuario
 * @property integer $tipousuario
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Alumno[] $alumnos
 * @property Apoderado[] $apoderados
 * @property Archivo[] $archivos
 * @property Comentario[] $comentarios
 * @property Matriculador[] $matriculadors
 * @property Profesor[] $profesors
 * @property RegistroDescargas[] $registroDescargases
 * @property RegistroSesion[] $registroSesions
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreusuario, tipousuario, password', 'required'),
			array('tipousuario', 'numerical', 'integerOnly'=>true),
			array('nombreusuario', 'length', 'max'=>10),
			array('password', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idusuario, nombreusuario, tipousuario, password', 'safe', 'on'=>'search'),
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
			'alumnos' => array(self::HAS_MANY, 'Alumno', 'usuario_idusuario'),
			'apoderados' => array(self::HAS_MANY, 'Apoderado', 'usuario_idusuario'),
			'archivos' => array(self::HAS_MANY, 'Archivo', 'usuario_idusuario'),
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'usuario_idusuario'),
			'matriculadors' => array(self::HAS_MANY, 'Matriculador', 'usuario_idusuario'),
			'profesors' => array(self::HAS_MANY, 'Profesor', 'usuario_idusuario'),
			'registroDescargases' => array(self::HAS_MANY, 'RegistroDescargas', 'usuario_idusuario'),
			'registroSesions' => array(self::HAS_MANY, 'RegistroSesion', 'usuario_idusuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuario' => 'Idusuario',
			'nombreusuario' => 'Nombreusuario',
			'tipousuario' => 'Tipousuario',
			'password' => 'Password',
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

		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('nombreusuario',$this->nombreusuario,true);
		$criteria->compare('tipousuario',$this->tipousuario);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
