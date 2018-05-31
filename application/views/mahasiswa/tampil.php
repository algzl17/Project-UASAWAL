<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tampil Data</title>
	<link rel="icon" href="assets/images/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
  	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
	<br>
	<div class="container jumbotron">
	<div class="table-responsive ">
		<h2 align="center">Data Mahasiswa</h2>
		<a class="btn btn-primary mb-2" href="<?php echo base_url(''); ?>">
			<i class="fa fa-home"></i> Home
		</a>
		<a class="btn btn-success mb-2" href="<?php echo base_url('dataku/input'); ?>">
			<i class="fa fa-plus"></i> Input Data
		</a>
		<form class="form-inline mt-2 mt-md-0 float-right mb-2">
			<input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" type="text">
			<button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
        </form>
		<table class="table table-hover text-center">
			<thead class="thead-dark ">
				<tr>
					<th>No.</th>
					<th>Nama Lengkap</th>
					<th>Status</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<?php 
				$no = 1;
				foreach ($query->result() as $baris) {?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $baris->nama ?></td>
						<td><?php echo $baris->status ?></td>
						<td><?php echo $baris->jurusan ?></td>
						<td >
							<a  class="btn btn-success" href="<?php echo base_url('dataku/edit/')?><?php echo $baris->id ?>">
								<i class="fa fa-edit"></i>
								EDIT
							</a>
							<a class="btn btn-danger "  href="<?php echo base_url()?>dataku/hapus/<?php echo $baris->id ?>">
								<i class="fa fa-trash"></i>
								HAPUS
							</a>
						</td>
					</tr>
			<?php
				$no++; }  
			 ?>	
		</table> 
	</div>
</div>
	
</body>
</html>