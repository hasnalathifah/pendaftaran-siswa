<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
<div class=" formContainer" style="margin-top: auto; margin-bottom: auto;">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800;900&family=Roboto:wght@100&family=Secular+One&display=swap" rel="stylesheet">
    <div class="d-flex justify-content-center">
		<h1> Pendaftaran Siswa Baru </h1>
	</div>
	<div class="d-flex justify-content-center">
		<h3> 2022/2023 </h3>
	</div>          
            <br><br>

            <div class="d-flex justify-content-center">
                <a href="form-daftar.php"><button class="mr-3 btn btn-primary"> Daftar Baru</button></a>
                <a href="list-siswa.php"><button class="btn btn-primary">Pendaftar</button></a>
            </div>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
