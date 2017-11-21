<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'"><i class="fa fa-home"></i> Home</a>
	</li><li>
	<li>
		<a href="'.site_url('admin/indexuser').'"><i class="fa fa-instagram"></i> User</a>
	</li>

	<li>
		<a href="'.site_url('adminpesan').'"><i class="fa fa-instagram"></i> Pesan</a>
	</li>
	<li>
	<a href="'.site_url('admin').'"><i class="fa fa-book"></i> Admin</a>
	</li>';
	}
