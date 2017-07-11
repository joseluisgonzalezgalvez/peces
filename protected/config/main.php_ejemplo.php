<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'Peces',
		'defaultController'=>'peces/inicio',
		//'defaultAction'=>'inicio',
		'homeUrl'=>array('peces/inicio'),
		
		//parte de recordar estado de cgridview
		'import'=>array('application.components.ERememberFiltersBehavior'),
		//limpia los estaods de los filtros del cgridview
		'import' =>array('application.components.EButtonColumnWithClearFilters'),

		//'catchAllRequest'=>file_exists(dirname(__FILE__).'/.maintenance')
		//? array('site/maintenance') : null,

		// user language (for Locale)
		'language'=>'es',

		//language for messages and views
		'sourceLanguage'=>'es',

		// charset to use
		'charset'=>'utf-8',

		// preloading 'log' component
		'preload'=>array('log'),

		// autoloading model and component classes
		'import'=>array(
		'application.models.*',
		'application.components.*',
		),
		//modulos
		'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
		'class'=>'system.gii.GiiModule',
		'password'=>'123',
		// If removed, Gii defaults to localhost only. Edit carefully to taste.
		//'ipFilters'=>array('127.0.0.1','::1'),
		),

		),
		// application components
		'components'=>array(
		'user'=>array(
		// enable cookie-based authentication
		'allowAutoLogin'=>true,
		'authTimeout' => 100000000,
		),
		
		'session' => array(
				'timeout' => 100000000,
		),

		'email'=>array(
		'class'=>'application.extensions.email.Email',
		'delivery'=>'php', //Will use the php mailing function.
		//May also be set to 'debug' to instead dump the contents of the email into the view
		),

		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
		'urlFormat'=>'path',
		'rules'=>array(
		'<controller:\w+>/<id:\d+>'=>'<controller>/view',
		'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		//'home' => 'site/index',
		//'<alias:about>' => 'site/page',
		//'page/<alias>' => 'site/page',
		),
		),


		/*
		 'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		 ),
		 */

		// uncomment the following to use a MySQL database

		'db'=>array(
		'connectionString' => 'mysql:host=localhost;dbname=usos',
		'emulatePrepare' => true,
		'username' => 'tu-usuario',
		'password' => 'tu-passwd',
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
		
		/*array(
		'class'=>'CWebLogRoute',
		),*/

		),
		),
		),

		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params'=>array(
		// this is used in contact page
		'adminEmail'=>'admin-correo@conabio.gob.mx',
		),
);
