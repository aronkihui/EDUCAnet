<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
    
	public function authenticate()
	{
                $ingresousuario = array('nombreusuario'=>$this->username,);
                $usuario = Usuario::model()->findByAttributes($ingresousuario);
                if(($usuario === null))
                {
                        $this->errorCode=self::ERROR_USERNAME_INVALID;
                }
                elseif($usuario->password !== $this->password)
                {
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
                }
                else
                {
                        $tipousuario = $usuario->tipousuario;
                        if($tipousuario === '1')
                        {
                                $idusuario = $usuario->idusuario;
                                $persona = Alumno::model()->find(array(
                                        'condition'=>'usuario_idusuario = :usuarioID',
                                        'params'=>array(':usuarioID'=>$idusuario),
                                ));
                                $idcurso = $persona->cursocomun_idcurso;
                                $curso = Cursocomun::model()->find(array(
                                        'condition'=>'idcurso = :cursoID',
                                        'params'=>array(':cursoID'=>$idcurso),
                                ));
                                $idelectivo = $persona->cursoelectivo_idcursoelectivo;
                                if($idelectivo !== NULL)
                                {
                                        $cursoelectivo = Cursoelectivo::model()->find(array(
                                                'condition'=>'idcursoelectivo = :cursoelecID',
                                                'params'=>array(':cursoelecID'=>$idelectivo),
                                        ));
                                        Yii::app()->user->setState('nomelectivo', $cursoelectivo->nombrecurso);
                                        Yii::app()->user->setState('idelectivo', $idelectivo);
                                }
                                Yii::app()->user->setState('nombrecurso',  $curso->nombrecurso);
                                Yii::app()->user->setState('idcurso',  $idcurso);
                                Yii::app()->user->setState('idalumno', $persona->idalumno);
                        }
                        elseif ($tipousuario ==='2') 
                        {
                                $idusuario = $usuario->idusuario;
                                $persona = Profesor::model()->find(array(
                                        'condition'=>'usuario_idusuario = :usuarioID',
                                        'params'=>array(':usuarioID'=>$idusuario),
                                ));
                                Yii::app()->user->setState('idprofesor', $persona->idprofesor);
                        }
                        Yii::app()->user->setState("Usuario",  $usuario->nombreusuario);
                        Yii::app()->user->setState("tipoUsuario",  $usuario->tipousuario);
                        Yii::app()->user->setState("nombreUsuario",  $persona->nombre);
                        Yii::app()->user->setState("apellidoUsuario",  $persona->apellido);
                        $this->username=$usuario->nombreusuario;
                        $this->errorCode=self::ERROR_NONE;
                }
                return !$this->errorCode;
	}
}