<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('user/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				
				<th>Username</th>
				<th>Nama User</th>
				<th>Alamat User</th>
				<th>Password User</th>
				<th>Aksi</th>
				
			</tr>
		</thead>
		<tbody>
			<?php foreach ($user as $key => $value) { ?>
				<tr>
					<td><?php echo $value->username; ?></td>
					<td><?php echo $value->nama_user; ?></td>
					<td><?php echo $value->alamat_user; ?></td>
					<td><?php echo $value->pass_user; ?></td>
					<td>
						<a href="<?php echo site_url('user/delete/'.$value->username); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('user/update/'.$value->username); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
	</table>
</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>