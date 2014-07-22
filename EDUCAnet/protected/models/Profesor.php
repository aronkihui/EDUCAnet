<?php

/**
 * This is the model class for table "profesor".
 *
 * The followings are the available columns in table 'profesor':
 * @property string $idprofesor
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property string $fecha_ingreso
 * @property string $fecha_nacimiento
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Anotaciones[] $anotaciones
 * @property Curso[] $cursos
 * @property Usuario $usuarioIdusuario
 * @property ProfesorHasAsignatura[] $profesorHasAsignaturas
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
			array('idprofesor, nombre, apellido, direccion, telefono, email, fecha_nacimiento', 'required'),
			array('usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('idprofesor', 'validateRut'),
                        array('idprofesor','unique'),
			array('nombre, apellido', 'length', 'max'=>50),
			array('direccion, telefono, email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idprofesor, nombre, apellido, direccion, telefono, email, fecha_ingreso, fecha_nacimiento, usuario_idusuario', 'safe', 'on'=>'search'),
		);
	}

        
          public function validateRut($attribute, $params) {
        $data = explode('-', $this->idprofesor);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('rut', 'Rut inválido ingrese rut valido.');
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
			'cursos' => array(self::HAS_MANY, 'Curso', 'profesor_idprofesor'),
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idusuario'),
			'profesorHasAsignaturas' => array(self::HAS_MANY, 'ProfesorHasAsignatura', 'profesor_idprofesor'),
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
			'fecha_ingreso' => 'Fecha Ingreso',
			'fecha_nacimiento' => 'Fecha Nacimiento',
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

		$criteria->compare('idprofesor',$this->idprofesor,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
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
        
        
         public function beforeSave()
                {
            
            if(parent::beforeSave()){
            {
            date_default_timezone_set("America/Santiago");
            $this->fecha_ingreso = date("Y-m-d H:i:s");
            
            
             return true;
             }
             return false;
            }
                }     
              
        
                
         
        
                
}
