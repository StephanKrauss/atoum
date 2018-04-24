<?php
	// Controller
	$container[\App\Controller\Login\LoginController::class] = function(){
		return new \App\Controller\Login\LoginController();
	};

	// Model
	$container[\App\Model\Steps\StepAtoum::class] = function(){
		return new \App\Model\Steps\StepAtoum();
	};