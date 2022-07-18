<?php 
   session_start();
   include "koneksi.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Post-Berita</title>
</head>
<style>
  body {
    background-image: url('assets/jb.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Lorent</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <button type="button" class="btn btn-outline-light btn-sm"><a class="nav-item nav-link text-light" href="MelihatBerita.php">Kembali</a></button>
      </div>
    </div>
  </nav>
  <form class="container py-2" method="POST" action="insertberita.php" enctype="multipart/form-data">
    <h1>Post Berita</h1>
    <div class="card">
      <div class="card-body">
        <div class="col-md-4">
          <label for="inputJudul" class="form-label">Judul Berita</label>
          <input type="text" class="form-control" id="inputJudul" placeholder="Masukkan Judul" name="judul">
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Isi Berita" name="isi"></textarea>
        </div>
        <div class="col-md-4">
          <label for="formFileMultiple" class="form-label">Upload Poster Berita</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple name="gambar">
        </div>
        <div class="col-md-4">
         <label for="exampleDateInput" class="form-label">Tanggal</label>
         <input type="date" class="form-control form-control-date" id="exampleDateInput" value="20/05/2021" name="tanggal"><br>
       </div>
       <div class="col-12">
        <button type="submit" class="btn btn-primary" name="submit">POST</button>
      </div>
    </div>
  </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  -->
</body>
</html>
<?php }else{
	header("Location: login.php");
} ?>