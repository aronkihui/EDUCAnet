<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<p>aqui solo  pruebass</p>

<?php $this->widget('CAutoComplete',
          array(
                         //name of the html field that will be generated
             'name'=>'pruebas', 
                       //replace controller/action with real ids
             'url'=>array('pruebas/AutoComplete'), 
             'max'=>10, //specifies the max number of items to display

                         //specifies the number of chars that must be entered 
                         //before autocomplete initiates a lookup

             ));
    ?>