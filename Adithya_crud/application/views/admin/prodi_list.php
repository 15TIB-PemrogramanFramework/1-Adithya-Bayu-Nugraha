<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('admin/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Admin</th>
				<th>Nama Admin</th>
				<th>Alamat Admin</th>
				<th>Skill Admin</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($admin as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_admin; ?></td>
					<td><?php echo $value->nama_admin; ?></td>
					<td><?php echo $value->alamat_admin; ?></td>
					<td><?php echo $value->skill_admin; ?></td>
					<td>
						<a href="<?php echo site_url('admin/delete/'.$value->id_admin); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('admin/update/'.$value->id_admin); ?>"
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