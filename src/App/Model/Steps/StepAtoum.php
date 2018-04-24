<?php

	namespace App\Model\Steps;

	use Slim\Http\Request;
	use Slim\Http\Response;

	/**
	 * Beschreibung der Klasse
	 *
	 * @author User
	 * @date 24.04.2018
	 * @file StepAtoum.php
	 * @link Aufruf der Datei
	 */
	class StepAtoum
	{
		public function start(){
			return 'Hallo Welt';
		}

		public function myInt(){
			return 22;
		}
	}
