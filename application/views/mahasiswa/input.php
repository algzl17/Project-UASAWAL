<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Input Data</title>
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
	<br><br>
	<div class="container jumbotron ">
		<form action="<?php echo base_url('dataku/simpan'); ?>" method="POST" >
				<div class="text-center mb-4">
		           <h1>Input Data Mahasiswa</h1>
		           <p>Universitas Teknologi Yogyakarta</p>
		      	</div>

	          	<div class="form-label-group">
	          		<label>Nama Lengkap</label>
	            	<input class="form-control mb-2" type="text" name="nama" id="nama" placeholder="Nama Lengkap">
	          	</div>
	         	<div class="form-label-group">
	            	<label >Status</label>
	            	<input class="form-control mb-2" type="text" name="status" id="status" placeholder="Status" >
	          	</div>
	          	<div class="form-label-group">
	            	<label>Jurusan</label>
	            	<input class="form-control mb-5" type="text" name="jurusan" id="jurusan" placeholder="Jurusan">
	          	</div>
                    
        		<button value="simpan" class="btn btn-lg btn-success float-left" type="submit">SIMPAN</button>
        		<a class="btn btn-lg btn-danger float-right" href="<?php echo base_url('dataku'); ?>">
				 BATAL
				</a>
		</form>
		
	</div>
			
</body>
</html>