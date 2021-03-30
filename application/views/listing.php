<!DOCTYPE html>
<html>
<head>
	<title>Capture || Codeigniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>

</body>
</html>