<?php

	namespace tests\units\App\Controller\Login;
	include_once('vendor/autoload.php');

	use atoum;
	use App\Controller\Login;


	/**
	 * Class Login
	 *
	 * @package App\Controller\Login
	 */
	class LoginController extends atoum\test
	{
		/**
		 * erster Test
		 *
		 */
		public function testStart(){
			$this->if($this->newTestedInstance)
				->then
					->string($this->testedInstance->start())
						->isEqualTo('Hallo Welt');
		}

	}