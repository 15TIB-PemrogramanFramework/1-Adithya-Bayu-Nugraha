 
<!-- start-smoth-scrolling -->
<!DOCTYPE html>
<html>
<head>
	<title>DataDesaku</title>
	 <?php $this->load->view('user/link_atas'); ?>
</head>

<body>
	
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url('Login'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Daftar</li>
			</ol>
		</div>
	</div>

	<!-- //breadcrumbs -->
	<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Daftar Akun</h2>
			<div class="login-form-grids">
			<!--
				<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div>
			-->
			<h6>Silahkan Daftar Terlebih Dahulu</h6>
			 <form role="form" id="" action="<?php echo base_url(); ?>regis_user/user_aksi" method="post" enctype="multipart/form-data">

				
				<input type="text" name="nama_user"  placeholder="Nama Lengkap" required=" " > 
				<input type="text" name="alamat_user"  placeholder="alamat" required=" " > 
				<input type="text" name="username"  placeholder="Username" required=" " >
				<input type="password" name="pass_user"  placeholder="Password Anda" required=" " >
				
				
			 
				<input type="submit" value="Daftar">
			</form>
		</div>
	<!--
		<div class="register-home">
			<a href="index.html">Home</a>
		</div>
	-->
</div>
</div>
<!-- //register -->	
<!-- Bootstrap Core JavaScript -->
 <?php $this->load->view('user/link_bawah'); ?>
<!-- //Bootstrap Core JavaScript -->
</body>
</html>