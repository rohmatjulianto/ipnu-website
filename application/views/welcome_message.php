<!DOCTYPE html>
<html>
<head>
	<title>Ipnu</title>
		<meta charset="utf-8">
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
</head>
<body>
	<?php $this->load->view('layout/navbar'); ?>
	<?php $this->load->view('layout/banner'); ?>
	<?php $this->load->view('layout/profiles'); ?>
	<?php $this->load->view('layout/maps'); ?>
	<div id="contacts" class="contacts" >
		<div class="container">
			<div class="row">
				<div class="container-fluid text-center to-animate">
					<h4>
						Kritik & Saran
					</h4>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<form action="" method="POST" class="contactsform">
						<div class="form-group">
						<label for="name">
							Nama
						</label>
						<input type="text"  name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="pesan">
								Pesan
							</label>
							<textarea class="form-control" name="pesan" rows="5"></textarea>
						</div>
						<button type="submit" class="btn btn-large">Kirim Pesan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('layout/footer'); ?>
</body>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/costum.js"></script>
</html>