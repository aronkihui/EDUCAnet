<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class misConsultas  extends CApplicationComponent
{
    
   
    
    public function init()
    {}


    public function misConsultaSeccion($seccion,$nivel)
    {
    $sql="SELECT * FROM archivo WHERE archivo_cursonivel='$nivel' and archivo_area ='$seccion' ";
    return new CSqlDataProvider($sql, array(
    'totalItemCount'=>8,
    'sort'=>array('attributes'=>array('idarchivos', 'archivo_path',),),
    'pagination'=>array('pageSize'=>8,),
    'keyField'=>'idarchivo'));
    
    }
    
    public function misConsultaBusquedaAvanzada($nombre,$seccion,$nivel)
    {
        $sql="Select * from archivo where archivo_cursonivel='$nivel' and archivo_area ='$seccion' and archivo_nombre='$nombre' ";
        return  new CSqlDataProvider($sql, array(
    'totalItemCount'=>8,
    'sort'=>array('attributes'=>array('idarchivos', 'archivo_path',),),
    'pagination'=>array('pageSize'=>8,),
    'keyField'=>'idarchivo'));
    
    }
    
    
    public function consultaPorId($id)
    {
        $sql="select * from archivo where usuario_idusuario ='$id' order by archivo_fecha desc";
        return new CSqlDataProvider($sql,array(
            'totalItemCount'=>2,
            'sort'=>array('attributes'=>array('archivo_nombre','archivo_fecha','archivo_area','archivo_cursonivel')),
            'pagination'=>false,//array('pageSize'=>8),
            'keyField'=>'idarchivo'
        ));
        
    }
    
    
    
    
    public function consultaRegDescargas($id)
    {
        
        $sql="select registro_fecha archivo_idarchivo from registro_descargas where  usuario_idusuario='$id' ";
        return new CSqlDataProvider($sql,array(
            'totalItemCount'=>2,
            'sort'=>array('attributes'=>array('registro_fecha','archivo_idarchivo')),
            'pagination'=>false,
            'keyField'=>''//
        ));
    }
    
    //consultas registro sesion
    public function consultaRegSesion($id)
    {
        
        $sql="select * from registro_sesion where idregistro_sesion='$id' ";
        return new CSqlDataProvider($sql,array(
            'totalItemCount'=>2,
            'sort'=>array('attributes'=>array('hora_inicio','hora_fin')),
            'keyField'=>'idregistro_sesion'
        ));
    }

    

    public function mostrarArchivos()
    {
      $sql='SELECT * FROM archivo ORDER BY idarchivo desc';
return new CSqlDataProvider($sql, array(
    'totalItemCount'=>3,
    'sort'=>array('attributes'=>array('idarchivos', 'archivo_path',),),
    'pagination'=>array('pageSize'=>8,),
    'keyField'=>'idarchivo'));  
        
    }
    
    //CONSULTA PARA COMENTARIOS
    public function obtenerComentarios($id)
    {
        $sql="Select comentario_fecha,comentario_contenido,usuario_idusuario,usuario.nombreusuario from comentario, usuario where comentario.archivo_idarchivo='$id'  and usuario.idusuario= `usuario_idusuario` order by `idcomentario`desc";
        return new CSqlDataProvider($sql,array(
            'totalItemCount'=>3,
            'sort'=>array('attributes'=>  array('comentario_contenido','comentario_fecha','usuario_idusuario','nombreusuario'),),
            'keyField'=>'idcomentario'
        ));  
    }
    
    public function obtenerComentariosRealizados($id)
    {
        $sql="Select comentario_fecha,comentario_contenido,archivo_idarchivo from comentario where usuario_idusuario= '$id' order by comentario_fecha desc ";
        return new CSqlDataProvider($sql,array(
            'totalItemCount'=>3,
            'sort'=>array('attributes'=>  array('comentario_contenido','comentario_fecha','archivo_idarchivo'),),
            'keyField'=>'idcomentario'
        ));
    }
    
     public function obtenerComentariosPorIdArchivo($id)
    {
        $sql="Select comentario_contenido ,comentario_fecha ,archivo_idarchivo, idcomentario , nombreusuario  from comentario, usuario  where archivo_idarchivo='$id'and idusuario = usuario_idusuario order By idcomentario desc ";
        return new CSqlDataProvider($sql,array(
            'totalItemCount'=>3,
            'sort'=>array('attributes'=>  array('comentario_contenido','comentario_fecha','archivo_idarchivo','idcomentario','nombreusuario'),),
            'keyField'=>'idcomentario'
        ));
    }
    
}
        
        
        
        
        
        
        
        
        
        
        
        
        
  
