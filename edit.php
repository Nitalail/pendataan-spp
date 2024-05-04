<?php

include'connect.php';

$id= $_GET['id'];
$query = "SELECT * FROM spp WHERE id = $id";

$result = mysqli_query($connect,$query);

$data = mysqli_fetch_assoc($result);
?>


<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<title>tugas php</title>
	</head>
	<body style="min-height:100vh; background-image:url('asets/ivan-aleksic-PDRFeeDniCk-unsplash.jpg');
			background-position:center;
			background-repeat:no-repeat;
			background-size:100% 100%;">
		<div class="container">
			<div class="d-flex align-items-center flex-column justify-content-center w-75 h-75 rounded-5 bg-light bg-opacity-75" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);">
				<h2>Edit Spp Murid</h2>
				<a class="btn btn-primary" href="index.php">
					kembali
				</a>	
				
				<div class="row w-100 mt-3">
					<div class="col-12 col-md-8 col-lg-6 mx-auto d-flex flex-column align-items-center">
						<form action="edit_proses.php" method="POST" class="">
						
                            <input type="hidden" name="id" value="<?=$data['id'] ?>">
						
							<label>Nama</label>
							<input class="form-control mb-2 border border-dark" type="text" name="nama" value="<?=$data['nama']?>">
						
							<label>Kelas</label>
							<input class="form-control mb-2 border-dark" type="text" name="kelas" value="<?=$data['kelas']?>">
						
							<label>harga</label>
							<input class="form-control mb-2 border-dark" type="number" name="harga"value="<?=$data['harga']?>">
							
							<label>Password</label>
							<input class="form-control mb-2 border-dark" type="text" name="password"value="<?=$data['password']?>">
							
							<button class="btn btn-success">submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>
</html>