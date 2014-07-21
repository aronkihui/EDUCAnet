<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping

 */
class MatriculaForm extends CFormModel
{
	
        
        
        //estos valores para formar la matricula
        
        public $curso;
        public $dia0,$asignatura0,$bloque_inicio0,$bloque_fin0;
        public $dia1,$asignatura1,$bloque_inicio1,$bloque_fin1;
        public $dia2,$asignatura2,$bloque_inicio2,$bloque_fin2;
        public $dia3,$asignatura3,$bloque_inicio3,$bloque_fin3;
        public $dia4,$asignatura4,$bloque_inicio4,$bloque_fin4;
        public $dia5,$asignatura5,$bloque_inicio5,$bloque_fin5;
        public $dia6,$asignatura6,$bloque_inicio6,$bloque_fin6;
        public $dia7,$asignatura7,$bloque_inicio7,$bloque_fin7;
        public $dia8,$asignatura8,$bloque_inicio8,$bloque_fin8;
        public $dia9,$asignatura9,$bloque_inicio9,$bloque_fin9;
        public $dia10,$asignatura10,$bloque_inicio10,$bloque_fin10;
        public $dia11,$asignatura11,$bloque_inicio11,$bloque_fin11;
        public $dia12,$asignatura12,$bloque_inicio12,$bloque_fin12;
        public $dia13,$asignatura13,$bloque_inicio13,$bloque_fin13;
        public $dia14,$asignatura14,$bloque_inicio14,$bloque_fin14;
        public $dia15,$asignatura15,$bloque_inicio15,$bloque_fin15;
        public $dia16,$asignatura16,$bloque_inicio16,$bloque_fin16;
        public $dia17,$asignatura17,$bloque_inicio17,$bloque_fin17;
        public $dia18,$asignatura18,$bloque_inicio18,$bloque_fin18;
        public $dia19,$asignatura19,$bloque_inicio19,$bloque_fin19;
        public $dia20,$asignatura20,$bloque_inicio20,$bloque_fin20;
        public $dia21,$asignatura21,$bloque_inicio21,$bloque_fin21;
        public $dia22,$asignatura22,$bloque_inicio22,$bloque_fin22;
        public $dia23,$asignatura23,$bloque_inicio23,$bloque_fin23;
        public $dia24,$asignatura24,$bloque_inicio24,$bloque_fin24;
        public $dia25,$asignatura25,$bloque_inicio25,$bloque_fin25;
        public $dia26,$asignatura26,$bloque_inicio26,$bloque_fin26;
        public $dia27,$asignatura27,$bloque_inicio27,$bloque_fin27;
        public $dia28,$asignatura28,$bloque_inicio28,$bloque_fin28;
        public $dia29,$asignatura29,$bloque_inicio29,$bloque_fin29;
        public $dia30,$asignatura30,$bloque_inicio30,$bloque_fin30;
        public $dia31,$asignatura31,$bloque_inicio31,$bloque_fin31;
        public $dia32,$asignatura32,$bloque_inicio32,$bloque_fin32;
        public $dia33,$asignatura33,$bloque_inicio33,$bloque_fin33;
        public $dia34,$asignatura34,$bloque_inicio34,$bloque_fin34;
        public $dia35,$asignatura35,$bloque_inicio35,$bloque_fin35;
        public $dia36,$asignatura36,$bloque_inicio36,$bloque_fin36;
        public $dia37,$asignatura37,$bloque_inicio37,$bloque_fin37;
        public $dia38,$asignatura38,$bloque_inicio38,$bloque_fin38;
        public $dia39,$asignatura39,$bloque_inicio39,$bloque_fin39;
        public $dia40,$asignatura40,$bloque_inicio40,$bloque_fin40;
        public $dia41,$asignatura41,$bloque_inicio41,$bloque_fin41;
        public $dia42,$asignatura42,$bloque_inicio42,$bloque_fin42;
        public $dia43,$asignatura43,$bloque_inicio43,$bloque_fin43;
        public $dia44,$asignatura44,$bloque_inicio44,$bloque_fin44;
        public $dia45,$asignatura45,$bloque_inicio45,$bloque_fin45;
        public $dia46,$asignatura46,$bloque_inicio46,$bloque_fin46;
        public $dia47,$asignatura47,$bloque_inicio47,$bloque_fin47;
        public $dia48,$asignatura48,$bloque_inicio48,$bloque_fin48;
        public $dia49,$asignatura49,$bloque_inicio49,$bloque_fin49;
        public $dia50,$asignatura50,$bloque_inicio50,$bloque_fin50;
        public $dia51,$asignatura51,$bloque_inicio51,$bloque_fin51;
        public $dia52,$asignatura52,$bloque_inicio52,$bloque_fin52;
        public $dia53,$asignatura53,$bloque_inicio53,$bloque_fin53;
        public $dia54,$asignatura54,$bloque_inicio54,$bloque_fin54;
        

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */    
        
        
        
        public function rules()
        {
            return array(
            array( 'curso','required'),
         array('dia0,asignatura0,bloque_inicio0,bloque_fin0','required'),
         array('dia1,asignatura1,bloque_inicio1,bloque_fin1','required'),
         array('dia2,asignatura2,bloque_inicio2,bloque_fin2','required'),
         array('dia3,asignatura3,bloque_inicio3,bloque_fin3','required'),
        array('dia4,asignatura4,bloque_inicio4,bloque_fin4','required'),
         array('dia5,asignatura5,bloque_inicio5,bloque_fin5','required'),
         array('dia6,asignatura6,bloque_inicio6,bloque_fin6','required'),
         array('dia7,asignatura7,bloque_inicio7,bloque_fin7','required'),
          array('dia8,asignatura8,bloque_inicio8,bloque_fin8','required'),
         array('dia9,asignatura9,bloque_inicio9,bloque_fin9','required'),
          array('dia10,asignatura10,bloque_inicio10,bloque_fin10','required'),
        array('dia11,asignatura11,bloque_inicio11,bloque_fin11','required'),
          array('dia12,asignatura12,bloque_inicio12,bloque_fin12','required'),
         array('dia13,asignatura13,bloque_inicio13,bloque_fin13','required'),
         array('dia14,asignatura14,bloque_inicio14,bloque_fin14','required'),
       array('dia15,asignatura15,bloque_inicio15,bloque_fin15','required'),
          array('dia16,asignatura16,bloque_inicio16,bloque_fin16','required'),
          array('dia17,asignatura17,bloque_inicio17,bloque_fin17','required'),
          array('dia18,asignatura18,bloque_inicio18,bloque_fin18','required'),
          array('dia19,asignatura19,bloque_inicio19,bloque_fin19','required'),
          array('dia20,asignatura20,bloque_inicio20,bloque_fin20','required'),
          array('dia21,asignatura21,bloque_inicio21,bloque_fin21','required'),
          array('dia22,asignatura22,bloque_inicio22,bloque_fin22','required'),
          array('dia23,asignatura23,bloque_inicio23,bloque_fin23','required'),
          array('dia24,asignatura24,bloque_inicio24,bloque_fin24','required'),
          array('dia25,asignatura25,bloque_inicio25,bloque_fin25','required'),
          array('dia26,asignatura26,bloque_inicio26,bloque_fin26','required'),
          array('dia27,asignatura27,bloque_inicio27,bloque_fin27','required'),
         array('dia28,asignatura28,bloque_inicio28,bloque_fin28','required'),
          array('dia29,asignatura29,bloque_inicio29,bloque_fin29','required'),
          array('dia30,asignatura30,bloque_inicio30,bloque_fin30','required'),
          array('dia31,asignatura31,bloque_inicio31,bloque_fin31','required'),
        array('dia32,asignatura32,bloque_inicio32,bloque_fin32','required'),
          array('dia33,asignatura33,bloque_inicio33,bloque_fin33','required'),
          array('dia34,asignatura34,bloque_inicio34,bloque_fin34','required'),
         array('dia35,asignatura35,bloque_inicio35,bloque_fin35','required'),
         array('dia36,asignatura36,bloque_inicio36,bloque_fin36','required'),
         array('dia37,asignatura37,bloque_inicio37,bloque_fin37','required'),
          array('dia38,asignatura38,bloque_inicio38,bloque_fin38','required'),
          array('dia39,asignatura39,bloque_inicio39,bloque_fin39','required'),
        array('dia40,asignatura40,bloque_inicio40,bloque_fin40','required'),
         array('dia41,asignatura41,bloque_inicio41,bloque_fin41','required'),
          array('dia42,asignatura42,bloque_inicio42,bloque_fin42','required'),
          array('dia43,asignatura43,bloque_inicio43,bloque_fin43','required'),
          array('dia44,asignatura44,bloque_inicio44,bloque_fin44','required'),
        array('dia45,asignatura45,bloque_inicio45,bloque_fin45','required'),
         array('dia46,asignatura46,bloque_inicio46,bloque_fin46','required'),
        array('dia47,asignatura47,bloque_inicio47,bloque_fin47','required'),
         array('dia48,asignatura48,bloque_inicio48,bloque_fin48','required'),
         array('dia49,asignatura49,bloque_inicio49,bloque_fin49','required'),
         array('dia50,asignatura50,bloque_inicio50,bloque_fin50','required'),
         array('dia51,asignatura51,bloque_inicio51,bloque_fin51','required'),
         array('dia52,asignatura52,bloque_inicio52,bloque_fin52','required'),
         array('dia53,asignatura53,bloque_inicio53,bloque_fin53','required'),
         array('dia54,asignatura54,bloque_inicio54,bloque_fin54','required'), 
        
                
                 );
        }
        
        
        public function save(){
            
   
          $horario0=new Horario;
          $horario0->curso_idcurso=$this->curso;
          $horario0->asignatura_idasignatura=$this->asignatura0;
          $horario0->bloques_id_inicio=$this->bloque_inicio0;
          $horario0->bloques_id_fin=$this->bloque_fin0;
          $horario0->dia_iddia=$this->dia0;
          
          //otro parte
          
          $horario1=new Horario;
          $horario1->curso_idcurso=$this->curso;
          $horario1->asignatura_idasignatura=$this->asignatura1;
          $horario1->bloques_id_inicio=$this->bloque_inicio1;
          $horario1->bloques_id_fin=$this->bloque_fin1;
          $horario1->dia_iddia=$this->dia1;
          
          //otro parte
          
          $horario2=new Horario;
          $horario2->curso_idcurso=$this->curso;
          $horario2->asignatura_idasignatura=$this->asignatura2;
          $horario2->bloques_id_inicio=$this->bloque_inicio2;
          $horario2->bloques_id_fin=$this->bloque_fin2;
          $horario2->dia_iddia=$this->dia2;
          
          //otro parte
          
          $horario3=new Horario;
          $horario3->curso_idcurso=$this->curso;
          $horario3->asignatura_idasignatura=$this->asignatura3;
          $horario3->bloques_id_inicio=$this->bloque_inicio3;
          $horario3->bloques_id_fin=$this->bloque_fin3;
          $horario3->dia_iddia=$this->dia3;
          
          //otro parte
          
          $horario4=new Horario;
          $horario4->curso_idcurso=$this->curso;
          $horario4->asignatura_idasignatura=$this->asignatura4;
          $horario4->bloques_id_inicio=$this->bloque_inicio4;
          $horario4->bloques_id_fin=$this->bloque_fin4;
          $horario4->dia_iddia=$this->dia4;
          
         
          
          //otro parte
          
          $horario5=new Horario;
          $horario5->curso_idcurso=$this->curso;
          $horario5->asignatura_idasignatura=$this->asignatura5;
          $horario5->bloques_id_inicio=$this->bloque_inicio5;
          $horario5->bloques_id_fin=$this->bloque_fin5;
          $horario5->dia_iddia=$this->dia5;
          
          
          //otro parte
          
          $horario6=new Horario;
          $horario6->curso_idcurso=$this->curso;
          $horario6->asignatura_idasignatura=$this->asignatura6;
          $horario6->bloques_id_inicio=$this->bloque_inicio6;
          $horario6->bloques_id_fin=$this->bloque_fin6;
          $horario6->dia_iddia=$this->dia6;
          
          //otro parte
          
          $horario7=new Horario;
          $horario7->curso_idcurso=$this->curso;
          $horario7->asignatura_idasignatura=$this->asignatura7;
          $horario7->bloques_id_inicio=$this->bloque_inicio7;
          $horario7->bloques_id_fin=$this->bloque_fin7;
          $horario7->dia_iddia=$this->dia7;
          
          //otro parte
          
          $horario8=new Horario;
          $horario8->curso_idcurso=$this->curso;
          $horario8->asignatura_idasignatura=$this->asignatura8;
          $horario8->bloques_id_inicio=$this->bloque_inicio8;
          $horario8->bloques_id_fin=$this->bloque_fin8;
          $horario8->dia_iddia=$this->dia8;
          
          //otro parte
          
          $horario9=new Horario;
          $horario9->curso_idcurso=$this->curso;
          $horario9->asignatura_idasignatura=$this->asignatura9;
          $horario9->bloques_id_inicio=$this->bloque_inicio9;
          $horario9->bloques_id_fin=$this->bloque_fin9;
          $horario9->dia_iddia=$this->dia9;
          
          //otro parte
          
          $horario10=new Horario;
          $horario10->curso_idcurso=$this->curso;
          $horario10->asignatura_idasignatura=$this->asignatura10;
          $horario10->bloques_id_inicio=$this->bloque_inicio10;
          $horario10->bloques_id_fin=$this->bloque_fin10;
          $horario10->dia_iddia=$this->dia10;
          
          //otro parte
          
          $horario11=new Horario;
          $horario11->curso_idcurso=$this->curso;
          $horario11->asignatura_idasignatura=$this->asignatura11;
          $horario11->bloques_id_inicio=$this->bloque_inicio11;
          $horario11->bloques_id_fin=$this->bloque_fin11;
          $horario11->dia_iddia=$this->dia11;
          
          //otro parte
          
          $horario12=new Horario;
          $horario12->curso_idcurso=$this->curso;
          $horario12->asignatura_idasignatura=$this->asignatura12;
          $horario12->bloques_id_inicio=$this->bloque_inicio12;
          $horario12->bloques_id_fin=$this->bloque_fin12;
          $horario12->dia_iddia=$this->dia12;
          
          //otro parte
          
          $horario13=new Horario;
          $horario13->curso_idcurso=$this->curso;
          $horario13->asignatura_idasignatura=$this->asignatura13;
          $horario13->bloques_id_inicio=$this->bloque_inicio13;
          $horario13->bloques_id_fin=$this->bloque_fin13;
          $horario13->dia_iddia=$this->dia13;
          
          //otro parte
          
          $horario14=new Horario;
          $horario14->curso_idcurso=$this->curso;
          $horario14->asignatura_idasignatura=$this->asignatura14;
          $horario14->bloques_id_inicio=$this->bloque_inicio14;
          $horario14->bloques_id_fin=$this->bloque_fin14;
          $horario14->dia_iddia=$this->dia14;
          
          //otro parte
          
          $horario15=new Horario;
          $horario15->curso_idcurso=$this->curso;
          $horario15->asignatura_idasignatura=$this->asignatura15;
          $horario15->bloques_id_inicio=$this->bloque_inicio15;
          $horario15->bloques_id_fin=$this->bloque_fin15;
          $horario15->dia_iddia=$this->dia15;
          
          //otro parte
          
          $horario16=new Horario;
          $horario16->curso_idcurso=$this->curso;
          $horario16->asignatura_idasignatura=$this->asignatura16;
          $horario16->bloques_id_inicio=$this->bloque_inicio16;
          $horario16->bloques_id_fin=$this->bloque_fin16;
          $horario16->dia_iddia=$this->dia16;
          
          //otro parte
          
          $horario17=new Horario;
          $horario17->curso_idcurso=$this->curso;
          $horario17->asignatura_idasignatura=$this->asignatura17;
          $horario17->bloques_id_inicio=$this->bloque_inicio17;
          $horario17->bloques_id_fin=$this->bloque_fin17;
          $horario17->dia_iddia=$this->dia17;
          
          //otro parte
          
          $horario18=new Horario;
          $horario18->curso_idcurso=$this->curso;
          $horario18->asignatura_idasignatura=$this->asignatura18;
          $horario18->bloques_id_inicio=$this->bloque_inicio18;
          $horario18->bloques_id_fin=$this->bloque_fin18;
          $horario18->dia_iddia=$this->dia18;
          
          //otro parte
          
          $horario19=new Horario;
          $horario19->curso_idcurso=$this->curso;
          $horario19->asignatura_idasignatura=$this->asignatura19;
          $horario19->bloques_id_inicio=$this->bloque_inicio19;
          $horario19->bloques_id_fin=$this->bloque_fin19;
          $horario19->dia_iddia=$this->dia19;
          
          //otro parte
          
          $horario20=new Horario;
          $horario20->curso_idcurso=$this->curso;
          $horario20->asignatura_idasignatura=$this->asignatura20;
          $horario20->bloques_id_inicio=$this->bloque_inicio20;
          $horario20->bloques_id_fin=$this->bloque_fin20;
          $horario20->dia_iddia=$this->dia20;
          
           //otro parte
          
          $horario21=new Horario;
          $horario21->curso_idcurso=$this->curso;
          $horario21->asignatura_idasignatura=$this->asignatura21;
          $horario21->bloques_id_inicio=$this->bloque_inicio21;
          $horario21->bloques_id_fin=$this->bloque_fin21;
          $horario21->dia_iddia=$this->dia21;
          
           //otro parte
          
          $horario22=new Horario;
          $horario22->curso_idcurso=$this->curso;
          $horario22->asignatura_idasignatura=$this->asignatura22;
          $horario22->bloques_id_inicio=$this->bloque_inicio22;
          $horario22->bloques_id_fin=$this->bloque_fin22;
          $horario22->dia_iddia=$this->dia22;
          
           //otro parte
          
          $horario23=new Horario;
          $horario23->curso_idcurso=$this->curso;
          $horario23->asignatura_idasignatura=$this->asignatura23;
          $horario23->bloques_id_inicio=$this->bloque_inicio23;
          $horario23->bloques_id_fin=$this->bloque_fin23;
          $horario23->dia_iddia=$this->dia23;
          
           //otro parte
          
          $horario24=new Horario;
          $horario24->curso_idcurso=$this->curso;
          $horario24->asignatura_idasignatura=$this->asignatura24;
          $horario24->bloques_id_inicio=$this->bloque_inicio24;
          $horario24->bloques_id_fin=$this->bloque_fin24;
          $horario24->dia_iddia=$this->dia24;
          
           //otro parte
          
          $horario25=new Horario;
          $horario25->curso_idcurso=$this->curso;
          $horario25->asignatura_idasignatura=$this->asignatura25;
          $horario25->bloques_id_inicio=$this->bloque_inicio25;
          $horario25->bloques_id_fin=$this->bloque_fin25;
          $horario25->dia_iddia=$this->dia25;
          
           //otro parte
          
          $horario26=new Horario;
          $horario26->curso_idcurso=$this->curso;
          $horario26->asignatura_idasignatura=$this->asignatura26;
          $horario26->bloques_id_inicio=$this->bloque_inicio26;
          $horario26->bloques_id_fin=$this->bloque_fin26;
          $horario26->dia_iddia=$this->dia26;
           //otro parte
          
          $horario27=new Horario;
          $horario27->curso_idcurso=$this->curso;
          $horario27->asignatura_idasignatura=$this->asignatura27;
          $horario27->bloques_id_inicio=$this->bloque_inicio27;
          $horario27->bloques_id_fin=$this->bloque_fin27;
          $horario27->dia_iddia=$this->dia27;
          
           //otro parte
          
          $horario28=new Horario;
          $horario28->curso_idcurso=$this->curso;
          $horario28->asignatura_idasignatura=$this->asignatura28;
          $horario28->bloques_id_inicio=$this->bloque_inicio28;
          $horario28->bloques_id_fin=$this->bloque_fin28;
          $horario28->dia_iddia=$this->dia28;
          
           //otro parte
          
          $horario29=new Horario;
          $horario29->curso_idcurso=$this->curso;
          $horario29->asignatura_idasignatura=$this->asignatura29;
          $horario29->bloques_id_inicio=$this->bloque_inicio29;
          $horario29->bloques_id_fin=$this->bloque_fin29;
          $horario29->dia_iddia=$this->dia29;
          
           //otro parte
          
          $horario30=new Horario;
          $horario30->curso_idcurso=$this->curso;
          $horario30->asignatura_idasignatura=$this->asignatura30;
          $horario30->bloques_id_inicio=$this->bloque_inicio30;
          $horario30->bloques_id_fin=$this->bloque_fin30;
          $horario30->dia_iddia=$this->dia30;
          
          //otro parte
          
          $horario31=new Horario;
          $horario31->curso_idcurso=$this->curso;
          $horario31->asignatura_idasignatura=$this->asignatura31;
          $horario31->bloques_id_inicio=$this->bloque_inicio31;
          $horario31->bloques_id_fin=$this->bloque_fin31;
          $horario31->dia_iddia=$this->dia31;
          
          //otro parte
          
          $horario32=new Horario;
          $horario32->curso_idcurso=$this->curso;
          $horario32->asignatura_idasignatura=$this->asignatura32;
          $horario32->bloques_id_inicio=$this->bloque_inicio32;
          $horario32->bloques_id_fin=$this->bloque_fin32;
          $horario32->dia_iddia=$this->dia32;
          
          //otro parte
          
          $horario33=new Horario;
          $horario33->curso_idcurso=$this->curso;
          $horario33->asignatura_idasignatura=$this->asignatura33;
          $horario33->bloques_id_inicio=$this->bloque_inicio33;
          $horario33->bloques_id_fin=$this->bloque_fin33;
          $horario33->dia_iddia=$this->dia33;
          
          //otro parte
          
          $horario34=new Horario;
          $horario34->curso_idcurso=$this->curso;
          $horario34->asignatura_idasignatura=$this->asignatura34;
          $horario34->bloques_id_inicio=$this->bloque_inicio34;
          $horario34->bloques_id_fin=$this->bloque_fin34;
          $horario34->dia_iddia=$this->dia34;
          
          //otro parte
          
          $horario35=new Horario;
          $horario35->curso_idcurso=$this->curso;
          $horario35->asignatura_idasignatura=$this->asignatura35;
          $horario35->bloques_id_inicio=$this->bloque_inicio35;
          $horario35->bloques_id_fin=$this->bloque_fin35;
          $horario35->dia_iddia=$this->dia35;
          
          //otro parte
          
          $horario36=new Horario;
          $horario36->curso_idcurso=$this->curso;
          $horario36->asignatura_idasignatura=$this->asignatura36;
          $horario36->bloques_id_inicio=$this->bloque_inicio36;
          $horario36->bloques_id_fin=$this->bloque_fin36;
          $horario36->dia_iddia=$this->dia36;
          
          //otro parte
          
          $horario37=new Horario;
          $horario37->curso_idcurso=$this->curso;
          $horario37->asignatura_idasignatura=$this->asignatura37;
          $horario37->bloques_id_inicio=$this->bloque_inicio37;
          $horario37->bloques_id_fin=$this->bloque_fin37;
          $horario37->dia_iddia=$this->dia37;
          
          //otro parte
          
          $horario38=new Horario;
          $horario38->curso_idcurso=$this->curso;
          $horario38->asignatura_idasignatura=$this->asignatura38;
          $horario38->bloques_id_inicio=$this->bloque_inicio38;
          $horario38->bloques_id_fin=$this->bloque_fin38;
          $horario38->dia_iddia=$this->dia38;
          
          //otro parte
          
          $horario39=new Horario;
          $horario39->curso_idcurso=$this->curso;
          $horario39->asignatura_idasignatura=$this->asignatura39;
          $horario39->bloques_id_inicio=$this->bloque_inicio39;
          $horario39->bloques_id_fin=$this->bloque_fin39;
          $horario39->dia_iddia=$this->dia39;
          
          //otro parte
          
          $horario40=new Horario;
          $horario40->curso_idcurso=$this->curso;
          $horario40->asignatura_idasignatura=$this->asignatura40;
          $horario40->bloques_id_inicio=$this->bloque_inicio40;
          $horario40->bloques_id_fin=$this->bloque_fin40;
          $horario40->dia_iddia=$this->dia40;
          
          //otro parte
          
          $horario41=new Horario;
          $horario41->curso_idcurso=$this->curso;
          $horario41->asignatura_idasignatura=$this->asignatura41;
          $horario41->bloques_id_inicio=$this->bloque_inicio41;
          $horario41->bloques_id_fin=$this->bloque_fin41;
          $horario41->dia_iddia=$this->dia41;
          
          //otro parte
          
          $horario42=new Horario;
          $horario42->curso_idcurso=$this->curso;
          $horario42->asignatura_idasignatura=$this->asignatura42;
          $horario42->bloques_id_inicio=$this->bloque_inicio42;
          $horario42->bloques_id_fin=$this->bloque_fin42;
          $horario42->dia_iddia=$this->dia42;
          
          //otro parte
          
          $horario43=new Horario;
          $horario43->curso_idcurso=$this->curso;
          $horario43->asignatura_idasignatura=$this->asignatura43;
          $horario43->bloques_id_inicio=$this->bloque_inicio43;
          $horario43->bloques_id_fin=$this->bloque_fin43;
          $horario43->dia_iddia=$this->dia43;
          
          //otro parte
          
          $horario44=new Horario;
          $horario44->curso_idcurso=$this->curso;
          $horario44->asignatura_idasignatura=$this->asignatura44;
          $horario44->bloques_id_inicio=$this->bloque_inicio44;
          $horario44->bloques_id_fin=$this->bloque_fin44;
          $horario44->dia_iddia=$this->dia44;
          
          //otro parte
          
          $horario45=new Horario;
          $horario45->curso_idcurso=$this->curso;
          $horario45->asignatura_idasignatura=$this->asignatura45;
          $horario45->bloques_id_inicio=$this->bloque_inicio45;
          $horario45->bloques_id_fin=$this->bloque_fin45;
          $horario45->dia_iddia=$this->dia45;
          
          //otro parte
          
          $horario46=new Horario;
          $horario46->curso_idcurso=$this->curso;
          $horario46->asignatura_idasignatura=$this->asignatura46;
          $horario46->bloques_id_inicio=$this->bloque_inicio46;
          $horario46->bloques_id_fin=$this->bloque_fin46;
          $horario46->dia_iddia=$this->dia46;
          
          //otro parte
          
          $horario47=new Horario;
          $horario47->curso_idcurso=$this->curso;
          $horario47->asignatura_idasignatura=$this->asignatura47;
          $horario47->bloques_id_inicio=$this->bloque_inicio47;
          $horario47->bloques_id_fin=$this->bloque_fin47;
          $horario47->dia_iddia=$this->dia47;
          
          //otro parte
          
          $horario48=new Horario;
          $horario48->curso_idcurso=$this->curso;
          $horario48->asignatura_idasignatura=$this->asignatura48;
          $horario48->bloques_id_inicio=$this->bloque_inicio48;
          $horario48->bloques_id_fin=$this->bloque_fin48;
          $horario48->dia_iddia=$this->dia48;
          
          //otro parte
          
          $horario49=new Horario;
          $horario49->curso_idcurso=$this->curso;
          $horario49->asignatura_idasignatura=$this->asignatura49;
          $horario49->bloques_id_inicio=$this->bloque_inicio49;
          $horario49->bloques_id_fin=$this->bloque_fin49;
          $horario49->dia_iddia=$this->dia49;
          
          //otro parte
          
          $horario50=new Horario;
          $horario50->curso_idcurso=$this->curso;
          $horario50->asignatura_idasignatura=$this->asignatura50;
          $horario50->bloques_id_inicio=$this->bloque_inicio50;
          $horario50->bloques_id_fin=$this->bloque_fin50;
          $horario50->dia_iddia=$this->dia50;
          
           //otro parte
          
          $horario51=new Horario;
          $horario51->curso_idcurso=$this->curso;
          $horario51->asignatura_idasignatura=$this->asignatura51;
          $horario51->bloques_id_inicio=$this->bloque_inicio51;
          $horario51->bloques_id_fin=$this->bloque_fin51;
          $horario51->dia_iddia=$this->dia51;
          
           //otro parte
          
          $horario52=new Horario;
          $horario52->curso_idcurso=$this->curso;
          $horario52->asignatura_idasignatura=$this->asignatura52;
          $horario52->bloques_id_inicio=$this->bloque_inicio52;
          $horario52->bloques_id_fin=$this->bloque_fin52;
          $horario52->dia_iddia=$this->dia52;
          
           //otro parte
          
          $horario53=new Horario;
          $horario53->curso_idcurso=$this->curso;
          $horario53->asignatura_idasignatura=$this->asignatura53;
          $horario53->bloques_id_inicio=$this->bloque_inicio53;
          $horario53->bloques_id_fin=$this->bloque_fin53;
          $horario53->dia_iddia=$this->dia53;
          
           //otro parte
          
          $horario54=new Horario;
          $horario54->curso_idcurso=$this->curso;
          $horario54->asignatura_idasignatura=$this->asignatura54;
          $horario54->bloques_id_inicio=$this->bloque_inicio54;
          $horario54->bloques_id_fin=$this->bloque_fin54;
          $horario54->dia_iddia=$this->dia54;
          
         
          
          
          
      if($horario0->save())
      if($horario1->save())
      if($horario2->save())
      if($horario3->save())
      if($horario4->save())
      if($horario5->save())
      if($horario6->save())
      if($horario7->save())
      if($horario8->save())
      if($horario9->save())
      if($horario10->save())
      if($horario11->save())
      if($horario12->save())
      if($horario13->save())
      if($horario14->save())
      if($horario15->save())
      if($horario16->save())
      if($horario17->save())
      if($horario18->save())
      if($horario19->save())
      if($horario20->save())
      if($horario21->save())
      if($horario22->save())
      if($horario23->save())
      if($horario24->save())
      if($horario25->save())
      if($horario26->save())
      if($horario27->save())
      if($horario28->save())
      if($horario29->save())
      if($horario30->save())
      if($horario31->save())
      if($horario32->save())
      if($horario33->save())
      if($horario34->save())
      if($horario35->save())
      if($horario36->save())
      if($horario37->save())
      if($horario38->save())
      if($horario39->save())
      if($horario40->save())
      if($horario41->save())
      if($horario42->save())
      if($horario43->save())
      if($horario44->save())
      if($horario45->save())
      if($horario46->save())
      if($horario47->save())
      if($horario48->save())
      if($horario49->save())
      if($horario50->save())
      if($horario51->save())
      if($horario52->save())
      if($horario53->save())
      if($horario54->save())
      {
          
      }      
             
             
   }
        
        
        
        
        
        
        
        
        
         
        public function getCurso()
                {
            $añoActual= date('Y');
            $curso=  Curso::model()->findAll(array("condition"=>"año =$añoActual"));
            $cursoArray=CHtml::listData($curso,'idcurso','nombrecurso','nivel');
            return $cursoArray;
        }
        
        
        public function getAsignatura()
        {
            $añoActual=date('Y');
            $asignatura=  Asignatura::model()->findAll(array("condition"=>"fecha_creacion=$añoActual"));
            $asignaturaArray=CHtml::listData($asignatura,'idasignatura','nombre');
            return $asignaturaArray;
        }
        

	

}
