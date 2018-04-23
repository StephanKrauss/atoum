<?php

	namespace App\Controller\Login;

	use Slim\Http\Request;
	use Slim\Http\Response;

	/**
	 * Anmeldung Controller
	 *
	 * @author Stephan Krauß
	 * @date 28.11.2017
	 * @file AnmeldenController.php
	 */
	class LoginController
	{
		/**
		 * StartController constructor.
		 *
		 * @param \Slim\Tests\Views\Twig $view
		 */
		public function __construct()
		{

		}

		/**
		 * @param \Slim\Http\Request $request
		 * @param \Slim\Http\Response $response
		 * @param array $params
		 *
		 * @return \Psr\Http\Message\ResponseInterface
		 * @throws \Exception
		 */
		public function __invoke(Request $request, Response $response, array $params)
		{
			try{
				$test = 123;
			}
			catch(\Exception $e){
				throw $e;
			}
		}

		public function start(){
			return 'Hallo WeltXXX';
		}
	}