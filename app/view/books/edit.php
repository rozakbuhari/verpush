<form action="<?php echo URL . "books/update" ?>" method="post">
	<?php echo $book->isbn ?>
	<input type="text" name="isbn" value="<?php echo $book->isbn ?>" hidden="true">
	<input type="text" name="title" placeholder="Judul" value="<?php echo $book->title ?>">
	<input type="text" name="author" placeholder="Penulis" value="<?php echo $book->author ?>">
	<input type="text" name="publisher" placeholder="Penerbit" value="<?php echo $book->publisher ?>">
	<input type="number" name="year" placeholder="Tahun" value="<?php echo $book->year ?>">
	<div class="row">
		<div class="input-field col s6">
			<button class="btn waves-effect waves-light blue-grey" type="submit" name="action">Perbaharuild</button>
		</div>
		<div class="input-field col s6">
			<a href="<?php echo URL . "books" ?>" class="btn waves-effect waves-light grey lighten-2 grey-text right" >Cancel</a>
		</div>
	</div>
</form>
