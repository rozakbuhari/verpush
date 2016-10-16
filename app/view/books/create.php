<form action="<?php echo URL . "books/store" ?>" method="post">
	<input type="text" name="isbn" placeholder="ISBN">
	<input type="text" name="title" placeholder="Judul">
	<input type="text" name="author" placeholder="Penulis">
	<input type="text" name="publisher" placeholder="Penerbit">
	<input type="number" name="year" placeholder="Tahun">
	<input type="submit">
	<a href="<?php echo URL . "books" ?>">Cancel</a>
</form>
