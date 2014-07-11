<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $idalumno
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property integer $telefono
 * @property string $email
 * @property string $fecha_nacimiento
 * @property string $fecha_creacion
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
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
			array('idalumno, nombre, apellido, direccion, telefono, email', 'required'),
			array('telefono, usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('idalumno', 'length', 'max'=>21),
			array('nombre, apellido, direccion', 'length', 'max'=>50),
			array('email', 'length', 'max'=>45),
                    
                    array('idalumno','validateRut'),
                        array('idalumno','unique'),
                    
                    
                        array('fecha_nacimiento','convertir_fecha'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idalumno, nombre, apellido, direccion, telefono, email, fecha_nacimiento, fecha_creacion, usuario_idusuario', 'safe', 'on'=>'search'),
		);
	}

      
        
          public function convertir_fecha($attr, $params){
   
   if($this->fecha_nacimiento == null)
    $this->addError('fecha',$this->fecha_nacimiento );
  }

       
        
        
        
        public function validateRut($attribute, $params) {
        $data = explode('-', $this->idalumno);
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
			'fecha_creacion' => 'Fecha Creacion',
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

		$criteria->compare('idalumno',$this->idalumno,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
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
        
        
        
         public function beforeSave()
                {
            
            if(parent::beforeSave()){
            {
            date_default_timezone_set("America/Santiago");
            $this->fecha_creacion = date("Y-m-d H:i:s");
            
            
             return true;
             }
             return false;
            }
            
        }
}
