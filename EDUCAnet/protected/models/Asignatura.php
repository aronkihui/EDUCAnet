<?php

/**
 * This is the model class for table "asignatura".
 *
 * The followings are the available columns in table 'asignatura':
 * @property integer $idasignatura
 * @property string $nombre
 * @property integer $horas
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property BloquesAsignaturaCurso[] $bloquesAsignaturaCursos
 * @property Curso[] $cursos
 * @property Evaluacion[] $evaluacions
 * @property ProfesorHasAsignatura $profesorHasAsignatura
 */
class Asignatura extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'asignatura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, horas', 'required'),
			array('horas', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idasignatura, nombre, horas, fecha_creacion', 'safe', 'on'=>'search'),
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
			'bloquesAsignaturaCursos' => array(self::HAS_MANY, 'BloquesAsignaturaCurso', 'asignatura_idasignatura'),
			'cursos' => array(self::MANY_MANY, 'Curso', 'curso_has_asignatura(asignatura_idasignatura, curso_idcurso)'),
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'asignatura_idasignatura'),
			'profesorHasAsignatura' => array(self::HAS_ONE, 'ProfesorHasAsignatura', 'asignatura_idasignatura'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idasignatura' => 'Idasignatura',
			'nombre' => 'Nombre',
			'horas' => 'Horas',
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

		$criteria->compare('idasignatura',$this->idasignatura);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('horas',$this->horas);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asignatura the static model class
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
