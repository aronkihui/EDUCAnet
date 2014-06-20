<?php

/**
 * This is the model class for table "comentario".
 *
 * The followings are the available columns in table 'comentario':
 * @property integer $idcomentario
 * @property string $comentario_contenido
 * @property string $comentario_fecha
 * @property integer $archivo_idarchivo
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Archivo $archivoIdarchivo
 * @property Usuario $usuarioIdusuario
 */
class Comentario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comentario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
        
        
        
        
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' comentario_contenido', 'required'),
			//array('archivo_idarchivo, usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('comentario_contenido', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcomentario, comentario_contenido, comentario_fecha, archivo_idarchivo, usuario_idusuario', 'safe', 'on'=>'search'),
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
			'archivoIdarchivo' => array(self::BELONGS_TO, 'Archivo', 'archivo_idarchivo'),
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idusuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcomentario' => 'Idcomentario',
			'comentario_contenido' => 'Comentario Contenido',
			'comentario_fecha' => 'Comentario Fecha',
			'archivo_idarchivo' => 'Archivo Idarchivo',
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

		$criteria->compare('idcomentario',$this->idcomentario);
		$criteria->compare('comentario_contenido',$this->comentario_contenido,true);
		$criteria->compare('comentario_fecha',$this->comentario_fecha,true);
		$criteria->compare('archivo_idarchivo',$this->archivo_idarchivo);
		$criteria->compare('usuario_idusuario',$this->usuario_idusuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comentario the static model class
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
            $this->comentario_fecha = date("Y-m-d H:i:s");
            
             return true;
             }
             return false;
            }
            
        }
        
}
