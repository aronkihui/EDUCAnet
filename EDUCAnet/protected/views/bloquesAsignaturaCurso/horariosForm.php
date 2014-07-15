<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bloques-asignatura-curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>




<div class="container container-fluid well">

    <table class="table table-bordered  ">
       <thead >
        <th class=" title">curso  <?php $bloquesXcursos// echo $form->dropDownList( $bloquesXcursos,'curso',$bloquesXcursos->getCurso());?></th>
        <th class="title"> año <?php echo date("Y");?></th>
    
            
            
                    
        
        </thead>
        
        <tbody>
        
            <tr>
                
                <td>lunes</td>
                <td>martes</td>
                <td>miercoles</td>
                <td>jueves</td>
                <td>viernes</td>
            </tr>
           
            <?php for($i=0;$i<10;$i++)
            {
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php }?>
            
        </tbody>
    </table>
 
    
</div>
<?php $this->endWidget(); ?>