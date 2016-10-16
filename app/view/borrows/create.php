<form action="<?php echo URL . "borrows/store" ?>" method="post">
	<select name="member_id">
	<?php
	foreach($members as $member) {
		echo '<option value="' . $member->id . '">' . $member->name . '</option>';
	}
	?>
	</select>

	<select name="book_id">
	<?php
	foreach($books as $book) {
		echo '<option value="' . $book->id . '">' . $book->title . '</option>';
	}
	?>
	</select>
	<input type="date" name="due_date" placeholder="Tanggal Pengembalian">

	<button class="btn waves-effect waves-light" type="submit" name="action">Tambah</button>
	<a href="<?php echo URL . "books" ?>">Cancel</a>
</form>
