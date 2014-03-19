<?php
class PortalbibliotecaController extends Controller
{
    public function actionPortalbiblioteca()
    {
       
        $this->render('portalbiblio'); 
           
    }
    
    
    
    public function actionSubir_arch()
    {
        
        $this->render('subir_arch');
    }
    
    public function actionArch_usuario()
    {
        $this->render('arch_usuario');
        
    }
}