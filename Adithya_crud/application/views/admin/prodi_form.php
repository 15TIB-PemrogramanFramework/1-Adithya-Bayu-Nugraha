<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>NAMA: </label>
		<input type="text" name="nama" class="form-control" placeholder="Inputkan Nama" 
		required value="<?php echo $nama; ?>">
	</div>
	<div class="form-group">
		<label>ALAMAT: </label>
		<input type="text" name="alamat" class="form-control" placeholder="Inputkan Alamat" 
		required value="<?php echo $alamat; ?>">
	</div>
	<div class="form-group">
		<label>SKILL: </label>
		<input type="text" name="skill" class="form-control" placeholder="Inputkan Skill" 
		required value="<?php echo $skill; ?>">
	</div>
	<input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('templates/footer'); ?>