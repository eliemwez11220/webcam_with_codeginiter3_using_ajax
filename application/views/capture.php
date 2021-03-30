<!DOCTYPE html>
<html>
<head>
	<title>Capture || Codeigniter</title>
	<link rel="stylesheet" href="<?= base_url('global/css/'); ?>bootstrap.min.css">
</head>
<body>
	<div class="container"><form id="register">
		<div class="row">
			<div class="col-md-6">
				<h1>Inscription a la plateforme Congo Agile</h1>
				<a href="<?= base_url('capture/fetchImage'); ?>" class="btn btn-success">Voir les images</a>
				<hr>
				
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="username" id="username" required>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email" id="email" required>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password" id="password" required autocomplete="off">
					</div>
					
				
			</div>

			<div class="col-md-6">
				<div class="card  mt-3">
					<div class="card-body">
						<div id="my_camera"  style="width: 100%!important;"> </div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Inscrivez-vous gratuitement sur notre platforme</button>
			</div>
		</div>
	</form>

				<div class="card  mt-3">
					<div class="card-body">
						<h5>
							Application de manipulation de webcam avec codeigniter v3
						</h5>
						By <a href="https://congoagile.com" target="_blank" class="btn btn-default">Congo Agile</a>
					</div>
				</div>

			</div>
</div>

	<script src="<?= base_url('global/js/'); ?>jquery.min.js"></script>
	<script src="<?= base_url('global/js/'); ?>popper.min.js"></script>
	<script src="<?= base_url('global/js/'); ?>bootstrap.min.js"></script>
	<script src="<?= base_url('global/js/'); ?>webcam.js"></script>
	<!-- https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/ https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/-->
	<script language="JavaScript">
		Webcam.set({
			width: 300,
			height: 250,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script type="text/javascript">
		$('#register').on('submit', function (event) {
			event.preventDefault();
			var image = '';
			var username = $('#username').val();
			var email = $('#email').val();
			var password = $('#password').val();
			Webcam.snap( function(data_uri) {
				image = data_uri;
			});
			$.ajax({
				url: '<?php echo site_url("capture/save");?>',
				type: 'POST',
				dataType: 'json',
				data: {username: username, email: email, password: password, image:image},
			})
			.done(function(data) {
				if (data > 0) {
					alert('Insertion effectuee avec succes');
					$('#register')[0].reset();
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
			
		});
	</script>
</body>
</html>