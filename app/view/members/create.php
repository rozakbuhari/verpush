<div class="row">
	<form class="col s12" action="<?php echo URL . "members/store" ?>" method="post">
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="name" class="validate">
				<label for="name">Nama Panggilan</label>
			</div>
		</div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="fullname" class="validate">
                <label for="name">Nama Lengkap</label>
            </div>
        </div>
		<div class="row">
			<div class="input-field col s12">
				<textarea type="text" name="address" class="materialize-textarea validate"></textarea>
				<label for="address">Alamat</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="contact" class="validate">
				<label for="contact">Kontak</label>
			</div>
		</div>
        <div class="row">
            <div class="input-field col s12">
                <input type="email" name="email" class="validate">
                <label for="name">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="username" class="validate">
                <label for="name">Username</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="password" name="password" class="validate">
                <label for="name">Password</label>
            </div>
        </div>
		<div class="row">
			<div class="input-field col s6">
				<button class="btn waves-effect waves-light blue-grey" type="submit" name="action">Tambah</button>
			</div>
			<div class="input-field col s6">
				<a href="<?php echo URL . "members" ?>" class="btn waves-effect waves-light grey lighten-2 grey-text right" >Batal</a>
			</div>
		</div>
	</form>
</div>
