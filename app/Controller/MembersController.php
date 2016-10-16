<?php

namespace App\Controller;

use App\Model\Member;

class MembersController {

	public function index() {

		$Member = new Member();
		$members = $Member->all();

		require APP . "view/_templates/header.php";
		require APP . "view/members/index.php";
		require APP . "view/_templates/footer.php";

	}

	public function create() {

		require APP . "view/_templates/header.php";
		require APP . "view/members/create.php";
		require APP . "view/_templates/footer.php";

	}

	public function store() {
		// Cek apakah ini POST request, jika buka redirect ke error
		if (empty($_POST)) header('location: ' . URL . 'error');

		$params = $_POST;
		$Member = new Member();
		$isAdded = $Member->add($params);

		if ($isAdded) header('location: ' . URL . 'members');
		else header('location: ' . URL . 'error');
	}

	public function edit($id) {

		$Member = new Member();
		$member = $Member->get($id);

		require APP . "view/_templates/header.php";
		require APP . "view/members/edit.php";
		require APP . "view/_templates/footer.php";

	}

	public function update($id) {
		// Cek apakah ini POST request, jika buka redirect ke error
		if (empty($_POST)) header('location: ' . URL . 'error');

		$params = $_POST;

		$Member = new Member();
		$isUpdated = $Member->update($id, $params);

		if ($isUpdated) header('location: ' . URL . 'members'); else
			header('location: ' . URL . 'error');

	}
}
