<?php

set_include_path(implode(PATH_SEPARATOR, array(realpath(dirname(__FILE__) . '/library'), get_include_path())));


require_once 'controller/UsersController.php';
require_once 'library/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new Slim\Slim();

$usrcontroller = new UsersController;

$app->get('/Login/:username/:password',function($username,$password) use ($usrcontroller) {
	echo json_encode($usrcontroller->login($username,$password));
});

$app->run();
