<?php

namespace App\Controller;

use App\Model\User;

class AuthController
{
    public function login()
    {

	    $username = null;
	    $password = null;

	    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
			    $username = $_POST["username"];
			    $password = $_POST["password"];

			    $User = new User();
			    $user = $User->getWhere(['username' => $username, 'password' => $password]);

			    if($user) {
				    $_SESSION["authenticated"] = true;
				    $_SESSION['user'] = $user;
				    header('Location: ' . URL);
			    }
			    else {
				    header('Location: ' . URL . 'auth/login');
			    }

		    } else {
			    header('Location: ' . URL . 'auth/login');
		    }
	    } else {
		    require APP . 'view/auth/login.php';
	    }
    }

    public function logout() {
	    session_destroy();
	    header('Location: ' . URL);
    }

}
