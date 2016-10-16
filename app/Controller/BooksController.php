<?php

namespace App\Controller;

use App\Model\Book;

class BooksController {

	public function index() {

		$Book = new Book();
		$books = $Book->all();

		require APP . "view/_templates/header.php";
		require APP . "view/books/index.php";
		require APP . "view/_templates/footer.php";

	}

	public function create() {

		require APP . "view/_templates/header.php";
		require APP . "view/books/create.php";
		require APP . "view/_templates/footer.php";

	}

	public function store() {

		// Cek apakah ini POST request, jika buka redirect ke error
		if (empty($_POST)) header('location: ' . URL . 'error');

		$params = $_POST ? $_POST : NULL;
		// Cek apakah http method adalah Post?
		// Jika tidak redirect ke halaman error
		if (empty($params)) header('location: ' . URL . 'error');

		$Book = new Book();
		$isAdded = $Book->add($params);

		if ($isAdded) header('location: ' . URL . 'books'); else
			header('location: ' . URL . 'error');

	}

	/**
	 * ACTION: edit
	 * Method ini meng-handle apa yang terjadi jika kamu membuka http://{base_url}/books/edit/{isbn}
	 * @param string $isbn
	 */
	public function edit($id) {
		if (isset($id)) {
			// Instance new Model (Book)
			$Book = new Book();
			// do getSong() in model/model.php
			$book = $Book->get($id);

			// in a real application we would also check if this db entry exists and therefore show the result or
			// redirect the user to an error page or similar

			// load views. within the views we can echo out $book easily
			require APP . 'view/_templates/header.php';
			require APP . 'view/books/edit.php';
			require APP . 'view/_templates/footer.php';
		} else {
			// redirect user to books index page (as we don't have a isbn)
			header('location: ' . URL . 'books/index');
		}
	}

	public function update() {

		// Cek apakah ini POST request, jika buka redirect ke error
		if (empty($_POST)) header('location: ' . URL . 'error');

		$params = $_POST ? $_POST : NULL;
		// Cek apakah http method adalah Post?
		// Jika tidak redirect ke halaman error
		if (empty($params)) header('location: ' . URL . 'error');

		$Book = new Book();
		$isUpdated = $Book->update($params);

		if ($isUpdated) header('location: ' . URL . 'books'); else
			header('location: ' . URL . 'error');

	}

	public function delete($id = NULL) {

		if ($id) {
			$Book = new Book();
			$isDeleted = $Book->delete($id);
			if ($isDeleted) {
				header('location: ' . URL . 'books');
			}
		} else {
			header('location: ' . URL . 'error');
		}

	}

}
