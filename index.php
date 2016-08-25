<html>
	<head>
	<title>MySQL Database Backup Tool</title>
	<meta charset="utf-8">
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form id="frmYedekle" method="POST" role="form" onsubmit="return false;" autocomplete="off">
						<legend>MySQL Database Backup Tool</legend>
					
						<div class="form-group">
							<label for="">MySQL Host</label>
							<input name="host" type="text" class="form-control" id="" placeholder="localhost">
						</div>
						<div class="form-group">
							<label for="">MySQL Port</label>
							<input name="port" type="text" class="form-control" id="" placeholder="3306">
						</div>
						<div class="form-group">
							<label for="">MySQL User</label>
							<input name="dbuser" type="text" class="form-control" id="" placeholder="root">
						</div>
						<div class="form-group">
							<label for="">MySQL User Password</label>
							<input name="dbpass" type="password" class="form-control" id="" placeholder="Enter your password">
						</div>
						<div class="form-group">
							<label for="">MySQL Database</label>
							<input name="db" type="text" class="form-control" id="" placeholder="test">
						</div>

						<button type="submit" class="btn btn-primary" onclick="$.btnYedekle()">Backup Now</button>
					</form>
					<span class="msgShow"></span>
				</div>
			</div>
		</div>
	</body>
</html>