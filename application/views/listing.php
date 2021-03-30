<!DOCTYPE html>
<html>
<head>
	<title>Listing || Codeigniter</title>
	<link rel="stylesheet" href="<?= base_url('global/css/'); ?>bootstrap.min.css">
	</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1>Listing</h1>
				<a href="<?= base_url('capture'); ?>" class="btn btn-success">Nouvelle identification</a>
				<hr><div class="row">
				<?php

					foreach ($images as $key => $value) {?>
						<div class="col-md-4 mb-3">
							<div class="card text-center">
					<div class="card-body">


								<img src="<?= base_url('uploads/'.$value->image); ?>" style="width: 120px!important; height: 120px; border-radius: 100px">
								<br>
								<span class="text-center">
									<strong>
										<?= $value->username ?>
									</strong>
								</span>
						</div>
					</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>


		<script src="<?= base_url('global/js/'); ?>jquery.min.js"></script>
		<script src="<?= base_url('global/js/'); ?>popper.min.js"></script>
		<script src="<?= base_url('global/js/'); ?>bootstrap.min.js"></script>
		<script src="<?= base_url('global/js/'); ?>webcam.js"></script>

</body>
</html>
