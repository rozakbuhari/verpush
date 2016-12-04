<?php

namespace App\Core;


class Middleware {

	public function __construct() {
		$this->auth_check();
	}

	private function auth_check() {
		if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
			header('Location: '. URL . 'auth/login');
		}
	}


}