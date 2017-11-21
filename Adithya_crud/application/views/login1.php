<!DOCTYPE html>
<html>
<head>
    <title>JASADESIGN</title>
    <?php $this->load->view('user/link_atas'); ?>
</head>
    
<body>
<!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="<?php echo base_url('Login');?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
                <li><a href="<?php echo base_url('loginuser');?>"><span  aria-hidden="true"></span>login user</a></li>
                <li class="active">Admin</li>
            </ol>
        </div>
    </div>
<!-- //breadcrumbs -->
<!-- login -->
    <div class="login">
        <div class="container">
            <H2>Welcome to JASA DESIGN</H2>
            <h2>Login Akun Admin</h2>
            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form action="<?php echo site_url('Login/aksi_login'); ?>" method="POST">
                    <input type="text" name="username" placeholder="Username Anda" required=" " >
                    <input type="password" name="password" placeholder="Password Anda" required=" " >
                    <!-- <div class="forgot">
                        <a href="#">Lupa Password</a>
                    </div> -->
                    <input type="submit" value="Login">
                </form>
            </div>
            <!--<h4>For New People</h4>-->
            <p><a href="<?php echo site_url('regis_user');?>">Daftar Disini</a> atau Kembali ke <a href="<?php echo base_url(); ?>">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
<!-- //login -->
<!-- Bootstrap Core JavaScript -->
 
<!-- Bootstrap Core JavaScript -->
</body>
</html>