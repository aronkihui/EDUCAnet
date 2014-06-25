<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

//directorio de bootstrap cargado ...
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
//...
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'EDUCAnet',
        'theme'=>'bootstrap', // requires you to copy the theme under your themes directory

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
                
                //bootstrap cargado en "modulos" ...
		'gii'=>array(
                    'class'=>'system.gii.GiiModule',
                    'password'=>'gii',
                    /*'generatorPaths'=>array(
                        'bootstrap.gii',
                    ),*/
                ),
                //...
	),

	// application components
	'components'=>array(
                //bootstrap cargado en "componentes" ...
                'bootstrap'=>array(
                    'class'=>'bootstrap.components.Bootstrap',
                ),
                //...
            
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        //'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
				
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=bd_educanet',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'linuxdebian',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);