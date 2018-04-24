<?php

	namespace tests\units\App\Model\Steps;
	include_once('vendor/autoload.php');

	use atoum;

	/**
	 * Class Login
	 *
	 * @package App\Controller\Login
	 */
	class StepAtoum extends atoum
	{
		/**
		 * erster Test
		 *
		 */
		public function testStart(){
			$this->if($this->newTestedInstance)
				->then
					->string($this->testedInstance->start())
						->isEqualTo('Hallo Welt')
					->and
						->string($this->testedInstance->start())
							->isNotEqualTo('BlaBlub');
		}

		public function myInt(){
			$this
				->if($array = array(uniqid()))
				->when(
					function() use ($array) {
						unset($array[0]);
						// return false;
					}
				)
				->then
					->sizeOf($array)
						->isZero()
			;
		}
	}
