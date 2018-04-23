<?php
	// Controller Login
	$container[\App\Controller\Login\LoginController::class] = function(){
		return new \App\Controller\Login\LoginController();
	};