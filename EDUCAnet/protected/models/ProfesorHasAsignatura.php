<?php

/**
 * This is the model class for table "profesor_has_asignatura".
 *
 * The followings are the available columns in table 'profesor_has_asignatura':
 * @property integer $asignatura_idasignatura
 * @property integer $año
 * @property string $profesor_idprofesor
 * @property integer $idprofesor_has_asignatura
 *
 * The followings are the available model relations:
 * @property Asignatura $asignaturaIdasignatura
 * @property Profesor $profesorIdprofesor
 */
class ProfesorHasAsignatura extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesor_has_asignatura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('asignatura_idasignatura,  profesor_idprofesor', 'required'),
			array('asignatura_idasignatura', 'numerical', 'integerOnly'=>true),
			array('profesor_idprofesor', 'length', 'max'=>21),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('asignatura_idasignatura, año, profesor_idprofesor, idprofesor_has_asignatura', 'safe', 'on'=>'search'),
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
			'asignaturaIdasignatura' => array(self::BELONGS_TO, 'Asignatura', 'asignatura_idasignatura'),
			'profesorIdprofesor' => array(self::BELONGS_TO, 'Profesor', 'profesor_idprofesor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'asignatura_idasignatura' => 'Asignatura Idasignatura',
			'año' => 'Año',
			'profesor_idprofesor' => 'Profesor Idprofesor',
			'idprofesor_has_asignatura' => 'Idprofesor Has Asignatura',
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

		$criteria->compare('asignatura_idasignatura',$this->asignatura_idasignatura);
		$criteria->compare('año',$this->año);
		$criteria->compare('profesor_idprofesor',$this->profesor_idprofesor,true);
		$criteria->compare('idprofesor_has_asignatura',$this->idprofesor_has_asignatura);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProfesorHasAsignatura the static model class
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
            $this->año = date("Y");
            
            
             return true;
             }
             return false;
            }
            
        }
        
          
                public function getProfesor() {
                    $profesor= Profesor::model()->findAll();
                    $profesorArray=CHtml::listData($profesor,'idprofesor','nombre','idprofesor');
                    return $profesorArray;
                    
                }
                
                public function getAsignatura() {
                    $asignatura=  Asignatura::model()->findAll();
                    $asignaturaArray=CHtml::listData($asignatura,'idasignatura','nombre');
                    return $asignaturaArray;
                }
}
