
<?php 
class MisFunciones extends CApplicationComponent{
   public $idioma; // configurable en config/main.php 
   
   
   public function init(){
    // init es llamado por Yii, debido a que es un componente.
   }
   public function decirHola()
           {
     if($this->idioma == 'en')
       return "hello";
     if($this->idioma == 'es')
       return "hola";

    return "sin idioma configurado para decir hola";
  }
} 