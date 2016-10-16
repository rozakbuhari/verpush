<?php

namespace App\Model;

use App\Core\Model;

class Borrow extends Model {

	public function all() {

		$sqlBorrows = "SELECT * FROM book_member";
		$all = $this->db->prepare($sqlBorrows);
		$all->execute();

		$relations = $all->fetchAll();
		$Book = new Book();
		$Member = new Member();

		$result = [];
		foreach ($relations as $rel) {
			$book = $Book->get($rel->book_id);
			$member = $Member->get($rel->member_id);
			$result[] = [
				'book' => $book,
				'member' => $member,
				'date' => $rel->date,
				'due_date' => $rel->due_date
			];
		}

		return $result;
	}

	public function add($args) {
		$sql = "INSERT INTO book_member (member_id, book_id, date, due_date)
				VALUES (:member_id, :book_id, :date, :due_date)";
		$query = $this->db->prepare($sql);
		$parameters = [
			':member_id' => $args['member_id'],
			':book_id' => $args['book_id'],
			':date' => date('Y-m-d'),
			':due_date' => $args['due_date']
		];
		$query->execute($parameters);

		return $query->rowCount();
	}

}