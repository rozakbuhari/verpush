<form action="<?= URL . 'members/update/' . $member->id ?>" method="post">
	<div>
		<input type="text" name="name" placeholder="Nama" value="<?= $member->name ?>">
	</div>
	<div>
		<textarea type="text" name="address" placeholder="Alamat"><?= $member->address ?></textarea>
	</div>
	<div>
		<input type="text" name="contact" placeholder="Kontak" value="<?= $member->contact ?>">
	</div>
	<input type="submit"> <a href="<?= URL ?>members">Cancel</a>
</form>