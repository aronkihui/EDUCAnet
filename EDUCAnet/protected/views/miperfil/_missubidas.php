<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<h3>mis subidas</h3>

<div>
    <?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $datos,
    'columns' => array('archivo_nombre', 'archivo_area','archivo_cursonivel','archivo_fecha'),
));
    ?>
</div>