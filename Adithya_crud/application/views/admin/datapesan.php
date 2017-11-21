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
				<th>No</th>
				<th>Nama </th>
				<th>Email</th>
				<th>Isi Pesan</th>
				<th>Kategori</th>
				<th>Waktu deadline</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; foreach($user as $row) { $no++; ?>
				<tr>
					 <td><?php echo $no; ?></td>


                                        <td><?php echo $row->nama_pesanan; ?></td>
                                        <td><?php echo $row->email_user; ?></td>
                                        <td><?php echo $row->isi_pesan; ?></td>
                                        <td><?php echo $row->nama_kategori; ?></td>
                                        <td><?php echo $row->nama_deadline; ?></td>
                                       
                                        

                                       
					<td>
						 <?php echo anchor(site_url('adminpesan/deletepesan/'.$row->id_pesan),'<i class ="fa fa-trash-o"></i>', 'class="btn btn-danger btn-sm"'); ?>
						
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