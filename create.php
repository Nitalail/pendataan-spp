<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<title>tugas php</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	</head>
	<body style="min-height:100vh; background-image:url('asset/bg.jpg');
			background-position:center;
			background-repeat:no-repeat;
			background-size:100% 100%;">
		<div class="container-fluid">
			<div class="d-flex align-items-center flex-column justify-content-center w-75 h-75 rounded-5 bg-light bg-opacity-75" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);">
				<h1 style="font-family: 'Open Sans', sans-serif;" class="fw-bold text-uppercase">Daftar SPP murid</h1>				
				
				<div class="row w-100 ">
					<div class="col-12 col-md-8 col-lg-6 mx-auto d-flex flex-column align-items-center">
						<form action="create_proses.php" method="POST" class="">
							<label>Nama</label>
							<input class="form-control mb-2" type="text" name="nama" required/>
							
							<label>Kelas</label>
							<input class="form-control mb-2" type="text" name="kelas" required/>
							
							<label>Harga</label>
							<input class="form-control mb-2" type="number" name="harga" required/>
							
							<label>Password</label>
							<input class="form-control mb-2" type="password" name="password" required/>
							
							<button class="btn btn-success">submit</button>
							<a class="btn btn-primary" href="index.php">
								back
							</a>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>
</html>