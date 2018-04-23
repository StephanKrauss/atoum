<?php

	namespace App\Controller\Login;

	use Slim\Http\Request;
	use Slim\Http\Response;

	/**
	 * Class Login
	 *
	 * @package App\Controller\Login
	 */
	class LoginController
	{

		/**
		 * Login constructor.
		 *
		 */
		public function __construct()
		{

		}

		/**
		 *
		 *
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

	}