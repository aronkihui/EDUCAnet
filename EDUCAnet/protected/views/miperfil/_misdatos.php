

<h5 class="title">
    Mis datos personales
</h5>


<div class="container-fluid">
    
    <div class="container-fluid">
   <div class="thumbnail span3 left">
        <div class="caption ">
            <img src="http://placehold.it/260x180" alt="">
            
        </div>    
            
     </div>
    </div>
    
    <div class="container-fluid">
	 <?php
	$this->widget('zii.widgets.jui.CJuiTabs',array(
	    'tabs'=>array(
                'Datos de usuario'=>array('id'=>'test-id1','content'=>$this->renderPartial(
                                        'misdatos/misdatos1',
                                        array('Values'=>'esto es un renderpartial 1'),TRUE
                                        )), 
                'Datos de alumno'=>array('id'=>'test-id2','content'=>$this->renderPartial(
                                        'misdatos/misdatos2',
                                        array('Values'=>'esto es un renderpartial 2'),TRUE
                                        )), 
                'Datos personales'=>array('id'=>'test-id3','content'=>$this->renderPartial(
                                        'misdatos/misdatos3',
                                        array('Values'=>'esto es un renderpartial 3'),TRUE
                                        )), 
              
        // panel 3 contains the content rendered by a partial view
        //'AjaxTab'=>array('ajax'=>$this->createUrl('ajax')),
    ),
          
	    // additional javascript options for the accordion plugin
	    'options' => array(        
	        'event'=>'mouseover',
	    ),
	    'id'=>'MyTab-Menu-Mouse'
	));
	?>
    
    
    </div>
    <!-- 
    -->
    
    
        
 
          
        
       
    
    
</div>
