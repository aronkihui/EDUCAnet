<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
    
    
<div class="container container-fluid">

<table class="table table-bordered ">
    <thead>
    <th>horario</th>
    <th >curso  <?php echo $form->dropDownList($model0,'curso_idcurso',$model0->getCurso()); ?></th>
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
            <td><?php echo $form->dropDownList($model0,'asignatura_idasignatura',$model0->getAsignatura()); echo $form->hiddenField($model0,'bloques_id_inicio',array('value'=>'1'));  echo $form->hiddenField($model0,'bloques_id_fin',array('value'=>'1')); echo $form->hiddenField($model0,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model1,'asignatura_idasignatura',$model1->getAsignatura()); echo $form->hiddenField($model1,'bloques_id_inicio',array('value'=>'1'));  echo $form->hiddenField($model1,'bloques_id_fin',array('value'=>'1')); echo $form->hiddenField($model1,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model2,'asignatura_idasignatura',$model2->getAsignatura()); echo $form->hiddenField($model2,'bloques_id_inicio',array('value'=>'1'));  echo $form->hiddenField($model2,'bloques_id_fin',array('value'=>'1')); echo $form->hiddenField($model2,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model3,'asignatura_idasignatura',$model3->getAsignatura()); echo $form->hiddenField($model3,'bloques_id_inicio',array('value'=>'1'));  echo $form->hiddenField($model3,'bloques_id_fin',array('value'=>'1')); echo $form->hiddenField($model3,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model4,'asignatura_idasignatura',$model4->getAsignatura()); echo $form->hiddenField($model4,'bloques_id_inicio',array('value'=>'1'));  echo $form->hiddenField($model4,'bloques_id_fin',array('value'=>'1')); echo $form->hiddenField($model4,'dia_iddia',array('value'=>'5')); ?></td>
        </tr>
        
         <tr>
            <td>8:45-9:30</td> 
            <td><?php echo $form->dropDownList($model5,'asignatura_idasignatura',$model5->getAsignatura()); echo $form->hiddenField($model5,'bloques_id_inicio',array('value'=>'2'));  echo $form->hiddenField($model5,'bloques_id_fin',array('value'=>'2')); echo $form->hiddenField($model5,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model6,'asignatura_idasignatura',$model6->getAsignatura()); echo $form->hiddenField($model6,'bloques_id_inicio',array('value'=>'2'));  echo $form->hiddenField($model6,'bloques_id_fin',array('value'=>'2')); echo $form->hiddenField($model6,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model7,'asignatura_idasignatura',$model7->getAsignatura()); echo $form->hiddenField($model7,'bloques_id_inicio',array('value'=>'2'));  echo $form->hiddenField($model7,'bloques_id_fin',array('value'=>'2')); echo $form->hiddenField($model7,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model8,'asignatura_idasignatura',$model8->getAsignatura()); echo $form->hiddenField($model8,'bloques_id_inicio',array('value'=>'2'));  echo $form->hiddenField($model8,'bloques_id_fin',array('value'=>'2')); echo $form->hiddenField($model8,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model9,'asignatura_idasignatura',$model9->getAsignatura()); echo $form->hiddenField($model9,'bloques_id_inicio',array('value'=>'2'));  echo $form->hiddenField($model9,'bloques_id_fin',array('value'=>'2')); echo $form->hiddenField($model9,'dia_iddia',array('value'=>'5')); ?></td>
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
            <td><?php echo $form->dropDownList($model10,'asignatura_idasignatura',$model10->getAsignatura()); echo $form->hiddenField($model10,'bloques_id_inicio',array('value'=>'3'));  echo $form->hiddenField($model10,'bloques_id_fin',array('value'=>'3')); echo $form->hiddenField($model10,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model11,'asignatura_idasignatura',$model11->getAsignatura()); echo $form->hiddenField($model11,'bloques_id_inicio',array('value'=>'3'));  echo $form->hiddenField($model11,'bloques_id_fin',array('value'=>'3')); echo $form->hiddenField($model11,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model12,'asignatura_idasignatura',$model12->getAsignatura()); echo $form->hiddenField($model12,'bloques_id_inicio',array('value'=>'3'));  echo $form->hiddenField($model12,'bloques_id_fin',array('value'=>'3')); echo $form->hiddenField($model12,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model13,'asignatura_idasignatura',$model13->getAsignatura()); echo $form->hiddenField($model13,'bloques_id_inicio',array('value'=>'3'));  echo $form->hiddenField($model13,'bloques_id_fin',array('value'=>'3')); echo $form->hiddenField($model13,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model14,'asignatura_idasignatura',$model14->getAsignatura()); echo $form->hiddenField($model14,'bloques_id_inicio',array('value'=>'3'));  echo $form->hiddenField($model14,'bloques_id_fin',array('value'=>'3')); echo $form->hiddenField($model14,'dia_iddia',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>10:30-11:15</td> 
            <td><?php echo $form->dropDownList($model15,'asignatura_idasignatura',$model15->getAsignatura()); echo $form->hiddenField($model15,'bloques_id_inicio',array('value'=>'4'));  echo $form->hiddenField($model15,'bloques_id_fin',array('value'=>'4')); echo $form->hiddenField($model15,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model16,'asignatura_idasignatura',$model16->getAsignatura()); echo $form->hiddenField($model16,'bloques_id_inicio',array('value'=>'4'));  echo $form->hiddenField($model16,'bloques_id_fin',array('value'=>'4')); echo $form->hiddenField($model16,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model17,'asignatura_idasignatura',$model17->getAsignatura()); echo $form->hiddenField($model17,'bloques_id_inicio',array('value'=>'4'));  echo $form->hiddenField($model17,'bloques_id_fin',array('value'=>'4')); echo $form->hiddenField($model17,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model18,'asignatura_idasignatura',$model18->getAsignatura()); echo $form->hiddenField($model18,'bloques_id_inicio',array('value'=>'4'));  echo $form->hiddenField($model18,'bloques_id_fin',array('value'=>'4')); echo $form->hiddenField($model18,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model19,'asignatura_idasignatura',$model19->getAsignatura()); echo $form->hiddenField($model19,'bloques_id_inicio',array('value'=>'4'));  echo $form->hiddenField($model19,'bloques_id_fin',array('value'=>'4')); echo $form->hiddenField($model20,'dia_iddia',array('value'=>'5')); ?></td>
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
            <td><?php echo $form->dropDownList($model20,'asignatura_idasignatura',$model20->getAsignatura()); echo $form->hiddenField($model20,'bloques_id_inicio',array('value'=>'5'));  echo $form->hiddenField($model20,'bloques_id_fin',array('value'=>'5')); echo $form->hiddenField($model20,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model21,'asignatura_idasignatura',$model21->getAsignatura()); echo $form->hiddenField($model21,'bloques_id_inicio',array('value'=>'5'));  echo $form->hiddenField($model21,'bloques_id_fin',array('value'=>'5')); echo $form->hiddenField($model21,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model22,'asignatura_idasignatura',$model22->getAsignatura()); echo $form->hiddenField($model22,'bloques_id_inicio',array('value'=>'5'));  echo $form->hiddenField($model22,'bloques_id_fin',array('value'=>'5')); echo $form->hiddenField($model22,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model23,'asignatura_idasignatura',$model23->getAsignatura()); echo $form->hiddenField($model23,'bloques_id_inicio',array('value'=>'5'));  echo $form->hiddenField($model23,'bloques_id_fin',array('value'=>'5')); echo $form->hiddenField($model23,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model24,'asignatura_idasignatura',$model24->getAsignatura()); echo $form->hiddenField($model24,'bloques_id_inicio',array('value'=>'5'));  echo $form->hiddenField($model24,'bloques_id_fin',array('value'=>'5')); echo $form->hiddenField($model24,'dia_iddia',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>12:15-13:00</td> 
            <td><?php echo $form->dropDownList($model25,'asignatura_idasignatura',$model25->getAsignatura()); echo $form->hiddenField($model25,'bloques_id_inicio',array('value'=>'6'));  echo $form->hiddenField($model25,'bloques_id_fin',array('value'=>'6')); echo $form->hiddenField($model25,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model26,'asignatura_idasignatura',$model26->getAsignatura()); echo $form->hiddenField($model26,'bloques_id_inicio',array('value'=>'6'));  echo $form->hiddenField($model26,'bloques_id_fin',array('value'=>'6')); echo $form->hiddenField($model26,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model27,'asignatura_idasignatura',$model27->getAsignatura()); echo $form->hiddenField($model27,'bloques_id_inicio',array('value'=>'6'));  echo $form->hiddenField($model27,'bloques_id_fin',array('value'=>'6')); echo $form->hiddenField($model27,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model28,'asignatura_idasignatura',$model28->getAsignatura()); echo $form->hiddenField($model28,'bloques_id_inicio',array('value'=>'6'));  echo $form->hiddenField($model28,'bloques_id_fin',array('value'=>'6')); echo $form->hiddenField($model28,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model29,'asignatura_idasignatura',$model29->getAsignatura()); echo $form->hiddenField($model29,'bloques_id_inicio',array('value'=>'6'));  echo $form->hiddenField($model29,'bloques_id_fin',array('value'=>'6')); echo $form->hiddenField($model29,'dia_iddia',array('value'=>'5')); ?></td>
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
            <td><?php echo $form->dropDownList($model30,'asignatura_idasignatura',$model30->getAsignatura()); echo $form->hiddenField($model30,'bloques_id_inicio',array('value'=>'7'));  echo $form->hiddenField($model30,'bloques_id_fin',array('value'=>'7')); echo $form->hiddenField($model30,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model31,'asignatura_idasignatura',$model31->getAsignatura()); echo $form->hiddenField($model31,'bloques_id_inicio',array('value'=>'7'));  echo $form->hiddenField($model31,'bloques_id_fin',array('value'=>'7')); echo $form->hiddenField($model31,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model32,'asignatura_idasignatura',$model32->getAsignatura()); echo $form->hiddenField($model32,'bloques_id_inicio',array('value'=>'7'));  echo $form->hiddenField($model32,'bloques_id_fin',array('value'=>'7')); echo $form->hiddenField($model32,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model33,'asignatura_idasignatura',$model33->getAsignatura()); echo $form->hiddenField($model33,'bloques_id_inicio',array('value'=>'7'));  echo $form->hiddenField($model33,'bloques_id_fin',array('value'=>'7')); echo $form->hiddenField($model33,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model34,'asignatura_idasignatura',$model34->getAsignatura()); echo $form->hiddenField($model34,'bloques_id_inicio',array('value'=>'7'));  echo $form->hiddenField($model34,'bloques_id_fin',array('value'=>'7')); echo $form->hiddenField($model34,'dia_iddia',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>15:15-16:00</td> 
            <td><?php echo $form->dropDownList($model35,'asignatura_idasignatura',$model35->getAsignatura()); echo $form->hiddenField($model35,'bloques_id_inicio',array('value'=>'8'));  echo $form->hiddenField($model35,'bloques_id_fin',array('value'=>'8')); echo $form->hiddenField($model35,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model36,'asignatura_idasignatura',$model36->getAsignatura()); echo $form->hiddenField($model36,'bloques_id_inicio',array('value'=>'8'));  echo $form->hiddenField($model36,'bloques_id_fin',array('value'=>'8')); echo $form->hiddenField($model36,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model37,'asignatura_idasignatura',$model37->getAsignatura()); echo $form->hiddenField($model37,'bloques_id_inicio',array('value'=>'8'));  echo $form->hiddenField($model37,'bloques_id_fin',array('value'=>'8')); echo $form->hiddenField($model37,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model38,'asignatura_idasignatura',$model38->getAsignatura()); echo $form->hiddenField($model38,'bloques_id_inicio',array('value'=>'8'));  echo $form->hiddenField($model38,'bloques_id_fin',array('value'=>'8')); echo $form->hiddenField($model38,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model39,'asignatura_idasignatura',$model39->getAsignatura()); echo $form->hiddenField($model39,'bloques_id_inicio',array('value'=>'8'));  echo $form->hiddenField($model39,'bloques_id_fin',array('value'=>'8')); echo $form->hiddenField($model39,'dia_iddia',array('value'=>'5')); ?></td>
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
            <td><?php echo $form->dropDownList($model40,'asignatura_idasignatura',$model40->getAsignatura()); echo $form->hiddenField($model40,'bloques_id_inicio',array('value'=>'9'));  echo $form->hiddenField($model40,'bloques_id_fin',array('value'=>'9')); echo $form->hiddenField($model40,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model41,'asignatura_idasignatura',$model41->getAsignatura()); echo $form->hiddenField($model41,'bloques_id_inicio',array('value'=>'9'));  echo $form->hiddenField($model41,'bloques_id_fin',array('value'=>'9')); echo $form->hiddenField($model41,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model42,'asignatura_idasignatura',$model42->getAsignatura()); echo $form->hiddenField($model42,'bloques_id_inicio',array('value'=>'9'));  echo $form->hiddenField($model42,'bloques_id_fin',array('value'=>'9')); echo $form->hiddenField($model42,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model43,'asignatura_idasignatura',$model43->getAsignatura()); echo $form->hiddenField($model43,'bloques_id_inicio',array('value'=>'9'));  echo $form->hiddenField($model43,'bloques_id_fin',array('value'=>'9')); echo $form->hiddenField($model43,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model44,'asignatura_idasignatura',$model44->getAsignatura()); echo $form->hiddenField($model44,'bloques_id_inicio',array('value'=>'9'));  echo $form->hiddenField($model44,'bloques_id_fin',array('value'=>'9')); echo $form->hiddenField($model44,'dia_iddia',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>17:00-17:45</td> 
            <td><?php echo $form->dropDownList($model45,'asignatura_idasignatura',$model45->getAsignatura()); echo $form->hiddenField($model45,'bloques_id_inicio',array('value'=>'10'));  echo $form->hiddenField($model45,'bloques_id_fin',array('value'=>'10')); echo $form->hiddenField($model45,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model46,'asignatura_idasignatura',$model46->getAsignatura()); echo $form->hiddenField($model46,'bloques_id_inicio',array('value'=>'10'));  echo $form->hiddenField($model46,'bloques_id_fin',array('value'=>'10')); echo $form->hiddenField($model46,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model47,'asignatura_idasignatura',$model47->getAsignatura()); echo $form->hiddenField($model47,'bloques_id_inicio',array('value'=>'10'));  echo $form->hiddenField($model47,'bloques_id_fin',array('value'=>'10')); echo $form->hiddenField($model47,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model48,'asignatura_idasignatura',$model48->getAsignatura()); echo $form->hiddenField($model48,'bloques_id_inicio',array('value'=>'10'));  echo $form->hiddenField($model48,'bloques_id_fin',array('value'=>'10')); echo $form->hiddenField($model48,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model49,'asignatura_idasignatura',$model49->getAsignatura()); echo $form->hiddenField($model49,'bloques_id_inicio',array('value'=>'10'));  echo $form->hiddenField($model49,'bloques_id_fin',array('value'=>'10')); echo $form->hiddenField($model49,'dia_iddia',array('value'=>'5')); ?></td>
        </tr>
         <tr>
            <td>17:45-18:30</td> 
            <td><?php echo $form->dropDownList($model50,'asignatura_idasignatura',$model50->getAsignatura()); echo $form->hiddenField($model50,'bloques_id_inicio',array('value'=>'11'));  echo $form->hiddenField($model50,'bloques_id_fin',array('value'=>'11')); echo $form->hiddenField($model50,'dia_iddia',array('value'=>'1')); ?></td>
            <td><?php echo $form->dropDownList($model51,'asignatura_idasignatura',$model51->getAsignatura()); echo $form->hiddenField($model51,'bloques_id_inicio',array('value'=>'11'));  echo $form->hiddenField($model51,'bloques_id_fin',array('value'=>'11')); echo $form->hiddenField($model51,'dia_iddia',array('value'=>'2')); ?></td>
            <td><?php echo $form->dropDownList($model52,'asignatura_idasignatura',$model52->getAsignatura()); echo $form->hiddenField($model52,'bloques_id_inicio',array('value'=>'11'));  echo $form->hiddenField($model52,'bloques_id_fin',array('value'=>'11')); echo $form->hiddenField($model52,'dia_iddia',array('value'=>'3')); ?></td>
            <td><?php echo $form->dropDownList($model53,'asignatura_idasignatura',$model53->getAsignatura()); echo $form->hiddenField($model53,'bloques_id_inicio',array('value'=>'11'));  echo $form->hiddenField($model53,'bloques_id_fin',array('value'=>'11')); echo $form->hiddenField($model53,'dia_iddia',array('value'=>'4')); ?></td>
            <td><?php echo $form->dropDownList($model54,'asignatura_idasignatura',$model54->getAsignatura()); echo $form->hiddenField($model54,'bloques_id_inicio',array('value'=>'11'));  echo $form->hiddenField($model54,'bloques_id_fin',array('value'=>'11')); echo $form->hiddenField($model54,'dia_iddia',array('value'=>'5')); ?></td>
        </tr>
        
    </tbody>
</table>
    
</div>    

    <div class="row buttons">
		<?php echo CHtml::submitButton('Subir archivo',array('class'=> 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
