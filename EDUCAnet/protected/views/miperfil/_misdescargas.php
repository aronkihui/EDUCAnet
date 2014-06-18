<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<h3>misdescargas</h3>




<div>
    <?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $datos,
    'columns' => array('registro_fecha','archivo_idarchivo'),
));
    ?>
</div>