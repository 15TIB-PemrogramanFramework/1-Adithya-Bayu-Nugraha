<?php $this->load->view('templates/header');?>
        <div class="row" style="margin-bottom: 20px">

            <div class="col-md-4">
                <h2>Home</h2>
                <p>Selamat Datang <b>admin <?php echo $this->session->userdata('username'); ?></b>
                </p>
            </div>
        </div>
<?php $this->load->view('templates/footer'); ?>