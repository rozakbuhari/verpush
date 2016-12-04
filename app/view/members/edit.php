<div class="row">
	<form class="col s12" action="<?php echo URL . "members/update/" . $member->id ?>" method="post">
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="name" class="validate" value="<?= $member->name ?>">
				<label for="name">Nama</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<textarea type="text" name="address" class="materialize-textarea validate"><?= $member->address ?></textarea>
				<label for="address">Alamat</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="contact" class="validate" value="<?= $member->contact ?>">
				<label for="contact">Kontak</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<button class="btn waves-effect waves-light blue-grey" type="submit" name="action">Perbarui</button>
			</div>
			<div class="input-field col s6">
				<a href="<?php echo URL . "members" ?>" class="btn waves-effect waves-light grey lighten-2 grey-text right" >Batal</a>
			</div>
		</div>
	</form>
</div>
