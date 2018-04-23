<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include_once('../config/config.php');
	include_once('../vendor/autoload.php');

	$app = new Slim\App();
	$container = $app->getContainer();

	include_once('../src/container.php');
	include_once('../src/dependencies.php');
	include_once('../src/routes.php');

	$app->run();