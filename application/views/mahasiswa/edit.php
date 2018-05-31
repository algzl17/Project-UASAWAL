<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Input Data</title>
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
</head>
<body>
	<br><br>
	<div class="container jumbotron ">
		<form action="<?php echo base_url('dataku/update'); ?>" method="POST" >
			<?php foreach ($query->result() as $baris) { ?>
				<div class="text-center mb-2">
		           <h1>Edit Data Mahasiswa</h1>
		           <p>Universitas Teknologi Yogyakarta</p>
		      	</div>
		      	<input type="hidden" name="id" value="<?php echo $baris->id; ?>">

	          	<div class="form-label-group">
	          		<label>Nama Lengkap</label>
	            	<input class="form-control mb-2" type="text" name="nama" value="<?php echo $baris->nama; ?>"placeholder="Nama Lengkap">
	          	</div>
	         	<div class="form-label-group">
	            	<label >Status</label>
	            	<input class="form-control mb-2" type="text" name="status" value="<?php echo $baris->status; ?>" placeholder="Status" >
	          	</div>
	          	<div class="form-label-group">
	            	<label>Jurusan</label>
	            	<input class="form-control mb-5" type="text" name="jurusan" value="<?php echo $baris->jurusan; ?>" placeholder="Jurusan">
	          	</div>
                    
        		<button value="simpan" class="btn btn-lg btn-success" type="submit">UPDATE</button>
        		<a class="btn btn-lg btn-danger float-right" href="<?php echo base_url('dataku'); ?>">
				 BATAL
				</a>

			<?php } ?>

		</form>
		
	</div>
			
</body>
</html>