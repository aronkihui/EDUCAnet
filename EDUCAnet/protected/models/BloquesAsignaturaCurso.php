<?php

/**
 * This is the model class for table "bloques_asignatura_curso".
 *
 * The followings are the available columns in table 'bloques_asignatura_curso':
 * @property integer $id
 * @property integer $curso_idcurso
 * @property integer $asignatura_idasignatura
 * @property integer $bloques_id_inicio
 * @property integer $bloques_id_fin
 * @property integer $dia
 *
 * The followings are the available model relations:
 * @property Asignatura $asignaturaIdasignatura
 * @property Bloques $bloquesIdInicio
 * @property Bloques $bloquesIdFin
 * @property Curso $cursoIdcurso
 */
class BloquesAsignaturaCurso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bloques_asignatura_curso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('curso_idcurso, asignatura_idasignatura, bloques_id_inicio, bloques_id_fin, dia', 'required'),
			array('curso_idcurso, asignatura_idasignatura, bloques_id_inicio, bloques_id_fin, dia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, curso_idcurso, asignatura_idasignatura, bloques_id_inicio, bloques_id_fin, dia', 'safe', 'on'=>'search'),
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
			'bloquesIdInicio' => array(self::BELONGS_TO, 'Bloques', 'bloques_id_inicio'),
			'bloquesIdFin' => array(self::BELONGS_TO, 'Bloques', 'bloques_id_fin'),
			'cursoIdcurso' => array(self::BELONGS_TO, 'Curso', 'curso_idcurso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'curso_idcurso' => 'Curso Idcurso',
			'asignatura_idasignatura' => 'Asignatura Idasignatura',
			'bloques_id_inicio' => 'Bloques Id Inicio',
			'bloques_id_fin' => 'Bloques Id Fin',
			'dia' => 'Dia',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('curso_idcurso',$this->curso_idcurso);
		$criteria->compare('asignatura_idasignatura',$this->asignatura_idasignatura);
		$criteria->compare('bloques_id_inicio',$this->bloques_id_inicio);
		$criteria->compare('bloques_id_fin',$this->bloques_id_fin);
		$criteria->compare('dia',$this->dia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BloquesAsignaturaCurso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public $año;
        
        public function getCurso()
                {
            $año=date("Y");
            $curso=  Curso::model()->findAllBySql("SELECT * FROM curso  WHERE año='$año'");
            $cursoArray=CHtml::listData($curso,'idcurso','nombrecurso','nivel');
            return $cursoArray;
        }
}
