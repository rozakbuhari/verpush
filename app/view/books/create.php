<div class="row">
	<form class="col s12" action="<?php echo URL . "books/store" ?>" method="post">
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="isbn" class="validate" required aria-required="true">
				<label for="isbn">ISBN</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="title" class="validate" required aria-required="true">
				<label for="title">Judul</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="author" class="validate" required aria-required="true">
				<label for="author">Pengarang</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<input type="text" name="publisher" class="validate" required aria-required="true">
				<label for="password">Penerbit</label>
			</div>
			<div class="input-field col s6">
				<input type="number" name="year" required aria-required="true">
				<label for="year">Tahun</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<button class="btn waves-effect waves-light blue-grey" type="submit" name="action">Tambah</button>
			</div>
			<div class="input-field col s6">
				<a href="<?php echo URL . "books" ?>" class="btn waves-effect waves-light grey lighten-2 grey-text right" >Batal</a>
			</div>
		</div>
	</form>
</div>
