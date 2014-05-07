<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MiperfilController extends Controller
{
    public function actionMiperfil()
    {
        $model=new Archivo;
        $this->render('miperfil',array('model'=>$model));
        
    }
    
}