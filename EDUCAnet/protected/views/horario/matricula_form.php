<div class="form">
<?php $form=$this->beginWidget('CActiveForm'); ?>
 
    <?php echo $form->errorSummary($model); ?>
 
    
   
    
    
        
<div class="container container-fluid">

<table class="table table-bordered ">
    <thead>
    <th>horario</th>
    <th >curso  <?php echo $form->dropDownList($model,'curso',$model->getCurso(), array('empty' => 'Seleccione Curso')); ?></th>
</thead>
    <tbody>
      
        <tr>
            <td>bloques</td>
            <td>lunes</td>
            <td>martes</td>
             <td>miercoles</td>
              <td>jueves</td>
               <td>viernes</td>              
        </tr>
       
        
        <tr>
            <td>8:00- 8:45</td> 
  <!--lu--> <td><?php echo $form->dropDownList($model,'asignatura0',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio0',array('value'=>'1'));  echo $form->hiddenField($model,'bloque_fin0',array('value'=>'1')); echo $form->hiddenField($model,'dia0',array('value'=>'1')); ?></td>
<!--mar-->  <td><?php echo $form->dropDownList($model,'asignatura1',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio1',array('value'=>'1'));  echo $form->hiddenField($model,'bloque_fin1',array('value'=>'1')); echo $form->hiddenField($model,'dia1',array('value'=>'2')); ?></td>
<!--mi-->   <td><?php echo $form->dropDownList($model,'asignatura2',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio2',array('value'=>'1'));  echo $form->hiddenField($model,'bloque_fin2',array('value'=>'1')); echo $form->hiddenField($model,'dia2',array('value'=>'3')); ?></td>
<!--jue-->  <td><?php echo $form->dropDownList($model,'asignatura3',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio3',array('value'=>'1'));  echo $form->hiddenField($model,'bloque_fin3',array('value'=>'1')); echo $form->hiddenField($model,'dia3',array('value'=>'4')); ?></td>
<!--vi-->   <td><?php echo $form->dropDownList($model,'asignatura4',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio4',array('value'=>'1'));  echo $form->hiddenField($model,'bloque_fin4',array('value'=>'1')); echo $form->hiddenField($model,'dia4',array('value'=>'5')); ?></td>
        </tr>
        
         <tr>
            <td>8:45-9:30</td> 
            <td><?php echo $form->dropDownList($model,'asignatura5',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio5',array('value'=>'2'));  echo $form->hiddenField($model,'bloque_fin5',array('value'=>'2')); echo $form->hiddenField($model,'dia5',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura6',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio6',array('value'=>'2'));  echo $form->hiddenField($model,'bloque_fin6',array('value'=>'2')); echo $form->hiddenField($model,'dia6',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura7',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio7',array('value'=>'2'));  echo $form->hiddenField($model,'bloque_fin7',array('value'=>'2')); echo $form->hiddenField($model,'dia7',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura8',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio8',array('value'=>'2'));  echo $form->hiddenField($model,'bloque_fin8',array('value'=>'2')); echo $form->hiddenField($model,'dia8',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura9',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio9',array('value'=>'2'));  echo $form->hiddenField($model,'bloque_fin9',array('value'=>'2')); echo $form->hiddenField($model,'dia9',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>9:30-9:45</td> 
            <td>recreo</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <td>9:45-10:30</td> 
            <td><?php echo $form->dropDownList($model,'asignatura10',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio10',array('value'=>'3'));  echo $form->hiddenField($model,'bloque_fin10',array('value'=>'3')); echo $form->hiddenField($model,'dia10',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura11',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio11',array('value'=>'3'));  echo $form->hiddenField($model,'bloque_fin11',array('value'=>'3')); echo $form->hiddenField($model,'dia11',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura12',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio12',array('value'=>'3'));  echo $form->hiddenField($model,'bloque_fin12',array('value'=>'3')); echo $form->hiddenField($model,'dia12',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura13',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio13',array('value'=>'3'));  echo $form->hiddenField($model,'bloque_fin13',array('value'=>'3')); echo $form->hiddenField($model,'dia13',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura14',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio14',array('value'=>'3'));  echo $form->hiddenField($model,'bloque_fin14',array('value'=>'3')); echo $form->hiddenField($model,'dia14',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>10:30-11:15</td> 
            <td><?php echo $form->dropDownList($model,'asignatura15',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio15',array('value'=>'4'));  echo $form->hiddenField($model,'bloque_fin15',array('value'=>'4')); echo $form->hiddenField($model,'dia15',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura16',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio16',array('value'=>'4'));  echo $form->hiddenField($model,'bloque_fin16',array('value'=>'4')); echo $form->hiddenField($model,'dia16',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura17',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio17',array('value'=>'4'));  echo $form->hiddenField($model,'bloque_fin17',array('value'=>'4')); echo $form->hiddenField($model,'dia17',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura18',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio18',array('value'=>'4'));  echo $form->hiddenField($model,'bloque_fin18',array('value'=>'4')); echo $form->hiddenField($model,'dia18',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura19',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio19',array('value'=>'4'));  echo $form->hiddenField($model,'bloque_fin19',array('value'=>'4')); echo $form->hiddenField($model,'dia19',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>11:15-11:30</td> 
            <td>recreo</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <td>11:30-12:15</td> 
            <td><?php echo $form->dropDownList($model,'asignatura20',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio20',array('value'=>'5'));  echo $form->hiddenField($model,'bloque_fin20',array('value'=>'5')); echo $form->hiddenField($model,'dia20',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura21',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio21',array('value'=>'5'));  echo $form->hiddenField($model,'bloque_fin21',array('value'=>'5')); echo $form->hiddenField($model,'dia21',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura22',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio22',array('value'=>'5'));  echo $form->hiddenField($model,'bloque_fin22',array('value'=>'5')); echo $form->hiddenField($model,'dia22',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura23',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio23',array('value'=>'5'));  echo $form->hiddenField($model,'bloque_fin23',array('value'=>'5')); echo $form->hiddenField($model,'dia23',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura24',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio24',array('value'=>'5'));  echo $form->hiddenField($model,'bloque_fin24',array('value'=>'5')); echo $form->hiddenField($model,'dia24',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>12:15-13:00</td> 
            <td><?php echo $form->dropDownList($model,'asignatura25',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio25',array('value'=>'6'));  echo $form->hiddenField($model,'bloque_fin25',array('value'=>'6')); echo $form->hiddenField($model,'dia25',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura26',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio26',array('value'=>'6'));  echo $form->hiddenField($model,'bloque_fin26',array('value'=>'6')); echo $form->hiddenField($model,'dia26',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura27',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio27',array('value'=>'6'));  echo $form->hiddenField($model,'bloque_fin27',array('value'=>'6')); echo $form->hiddenField($model,'dia27',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura28',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio28',array('value'=>'6'));  echo $form->hiddenField($model,'bloque_fin28',array('value'=>'6')); echo $form->hiddenField($model,'dia28',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura29',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio29',array('value'=>'6'));  echo $form->hiddenField($model,'bloque_fin29',array('value'=>'6')); echo $form->hiddenField($model,'dia29',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>13:00-14:30</td> 
            <td>almuerzo</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
         <tr>
            <td>14:30-15:15</td> 
            <td><?php echo $form->dropDownList($model,'asignatura30',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio30',array('value'=>'7'));  echo $form->hiddenField($model,'bloque_fin30',array('value'=>'7')); echo $form->hiddenField($model,'dia30',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura31',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio31',array('value'=>'7'));  echo $form->hiddenField($model,'bloque_fin31',array('value'=>'7')); echo $form->hiddenField($model,'dia31',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura32',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio32',array('value'=>'7'));  echo $form->hiddenField($model,'bloque_fin32',array('value'=>'7')); echo $form->hiddenField($model,'dia32',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura33',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio33',array('value'=>'7'));  echo $form->hiddenField($model,'bloque_fin33',array('value'=>'7')); echo $form->hiddenField($model,'dia33',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura34',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio34',array('value'=>'7'));  echo $form->hiddenField($model,'bloque_fin34',array('value'=>'7')); echo $form->hiddenField($model,'dia34',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>15:15-16:00</td> 
            <td><?php echo $form->dropDownList($model,'asignatura35',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio35',array('value'=>'8'));  echo $form->hiddenField($model,'bloque_fin35',array('value'=>'8')); echo $form->hiddenField($model,'dia35',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura36',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio36',array('value'=>'8'));  echo $form->hiddenField($model,'bloque_fin36',array('value'=>'8')); echo $form->hiddenField($model,'dia36',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura37',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio37',array('value'=>'8'));  echo $form->hiddenField($model,'bloque_fin37',array('value'=>'8')); echo $form->hiddenField($model,'dia37',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura38',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio38',array('value'=>'8'));  echo $form->hiddenField($model,'bloque_fin38',array('value'=>'8')); echo $form->hiddenField($model,'dia38',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura39',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio39',array('value'=>'8'));  echo $form->hiddenField($model,'bloque_fin39',array('value'=>'8')); echo $form->hiddenField($model,'dia39',array('value'=>'5')); ?></td>
        </tr>
        
         <tr>
            <td>16:00-16:15</td> 
            <td>recreo</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <td>16:15-17:00</td> 
            <td><?php echo $form->dropDownList($model,'asignatura40',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio40',array('value'=>'9'));  echo $form->hiddenField($model,'bloque_fin40',array('value'=>'9')); echo $form->hiddenField($model,'dia40',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura41',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio41',array('value'=>'9'));  echo $form->hiddenField($model,'bloque_fin41',array('value'=>'9')); echo $form->hiddenField($model,'dia41',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura42',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio42',array('value'=>'9'));  echo $form->hiddenField($model,'bloque_fin42',array('value'=>'9')); echo $form->hiddenField($model,'dia42',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura43',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio43',array('value'=>'9'));  echo $form->hiddenField($model,'bloque_fin43',array('value'=>'9')); echo $form->hiddenField($model,'dia43',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura44',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio44',array('value'=>'9'));  echo $form->hiddenField($model,'bloque_fin44',array('value'=>'9')); echo $form->hiddenField($model,'dia44',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>17:00-17:45</td> 
            <td><?php echo $form->dropDownList($model,'asignatura45',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio45',array('value'=>'10'));  echo $form->hiddenField($model,'bloque_fin45',array('value'=>'10')); echo $form->hiddenField($model,'dia45',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura46',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio46',array('value'=>'10'));  echo $form->hiddenField($model,'bloque_fin46',array('value'=>'10')); echo $form->hiddenField($model,'dia46',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura47',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio47',array('value'=>'10'));  echo $form->hiddenField($model,'bloque_fin47',array('value'=>'10')); echo $form->hiddenField($model,'dia47',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura48',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio48',array('value'=>'10'));  echo $form->hiddenField($model,'bloque_fin48',array('value'=>'10')); echo $form->hiddenField($model,'dia48',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura49',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio49',array('value'=>'10'));  echo $form->hiddenField($model,'bloque_fin49',array('value'=>'10')); echo $form->hiddenField($model,'dia49',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>17:45-18:30</td> 
            <td><?php echo $form->dropDownList($model,'asignatura50',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio50',array('value'=>'11'));  echo $form->hiddenField($model,'bloque_fin50',array('value'=>'11')); echo $form->hiddenField($model,'dia50',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura51',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio51',array('value'=>'11'));  echo $form->hiddenField($model,'bloque_fin51',array('value'=>'11')); echo $form->hiddenField($model,'dia51',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura52',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio52',array('value'=>'11'));  echo $form->hiddenField($model,'bloque_fin52',array('value'=>'11')); echo $form->hiddenField($model,'dia52',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura53',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio53',array('value'=>'11'));  echo $form->hiddenField($model,'bloque_fin53',array('value'=>'11')); echo $form->hiddenField($model,'dia53',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model,'asignatura54',$model->getAsignatura(), array('empty' => 'Seleccione asignatura')); echo $form->hiddenField($model,'bloque_inicio54',array('value'=>'11'));  echo $form->hiddenField($model,'bloque_fin54',array('value'=>'11')); echo $form->hiddenField($model,'dia54',array('value'=>'5')); ?></td>
        </tr>
        
    </tbody>
</table>
    
</div>    

    
    
    
    
    
    
    
 
    <div class="row submit">
       <?php echo CHtml::submitButton( 'Guardar'); ?>
    </div>
 
<?php $this->endWidget(); ?>
</div><!-- form -->