<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>YourMovieList</title>
</head>

<body class="bg-light">
	<br>
	<div class="container-sm card btn">
		<h1 class="text-center card bg-success text-white atas">YourMovieList.com</h1>
		<div class="row">
			<div class="col">
				<div class="card bg-light">
					<div class="card-header bg-primary text-white">
						Input Movie Data
					</div>
					<div class="card-body">
						<form method="post" action="http://localhost/mvc/Film/Tambah">
							<div class="form-group">
								<input id="judul" type="text" name="judul" class="form-control" placeholder="MOVIE TITLE" required><br>
							</div>
							<div class="form-group">
								<input id="tahun" type="number" name="tahun" class="form-control" placeholder="YEAR OF RELEASE" required><br>
							</div>
							<div class="form-group">
								<input id="skor" type="number" name="skor" class="form-control" placeholder="RATING" required><br>
							</div>
							<br>
							<div>
								<button type="submit" class="btn btn-success tombol">Save</button>
								<button type="reset" class="btn btn-danger tombol">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card bg-light">
					<div class="card-header bg-primary text-white">
						Movie List
					</div>
					<div class="card-body">
						<table class="table table-bordered table-striped table-hover">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Tahun</th>
								<th>Rating</th>
								<th>Menu</th>

							</tr>
							<?php $no = 1;
							foreach ($data['film'] as $film) : ?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $film['judul'] ?></td>
									<td><?= $film['tahun'] ?></td>
									<td><?= $film['skor'] ?></td>
									<td>
										<a href="http://localhost/mvc/Film/hapus/<?= $film['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger tombol"> Hapus </a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
						<a href="http://localhost/mvc/Film/index/AtoZ" class="btn btn-warning tombol"> A-Z </a>
						<a href="http://localhost/mvc/Film/index/ztoA" class="btn btn-warning tombol"> Z-A </a>
						<a href="http://localhost/mvc/Film/index/RatingDesc" class="btn btn-warning tombol"> Rating (From Highest) </a>
						<br> <br>
						<a href="http://localhost/mvc/Film/index/RatingAsc" class="btn btn-warning tombol"> Rating (From Lowest) </a>
						<a href="http://localhost/mvc/Film/index/YearAsc" class="btn btn-warning tombol"> Year (Oldest) </a>
						<a href="http://localhost/mvc/Film/index/YearDesc" class="btn btn-warning tombol"> Year (Most Recent) </a>

					</div>
				</div>
			</div>
		</div>

	</div>
</body>