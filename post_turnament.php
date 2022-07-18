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

  <title>Post-Turnament</title>
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
      <?php if ($_SESSION['role'] == 'admin') {?>
            <div class="navbar-text">

                Halo Admin, <?=$_SESSION['name']?>
                
                <?php  }else{  ?>
                Halo User, <?=$_SESSION['name']?>
                <?php } ?> 
                <button type="button" class="btn btn-outline-light btn-sm"> <a class="nav-item nav-link text-light" href="CariInfoTournament.php" >Kembali</a></button>
    </div>
  </nav>
  <form class="container py-2" method="POST" action="insertturnamen.php" enctype="multipart/form-data">
   <h1>Post Turnament</h1>
   <div class="card">
    <div class="card-body">
      <div class="col-md-4">
        <label for="inputJudul" class="form-label">Judul Turnament</label>
        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
      </div>
      <div class="col-md-4">
        <label for="formFileMultiple" class="form-label">Upload Poster</label>
        <input class="form-control" type="file" name="gambar" multiple>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Lapangan</label>
        <select id="inputState" class="form-select" name="lapangan">
          <option selected>Lapangan 1</option>
          <option>Lapangan 2</option>
          <option>Lapangan 3</option>
          <option>Lapangan 4</option>
          <option>Lapangan 5</option>
          <option>Lapangan 6</option>
        </select>
      </div>
      <div class="row g-3">
        <div class="col-sm-6">
         <label for="exampleDateInput" class="form-label">Tanggal Mulai</label>
         <input type="date" class="form-control form-control-date"  value="DD/MM/YYYY" name="tanggal">
       </div>
       <div class="col-sm-6">
         <label for="exampleDateInput" class="form-label">Tanggal Akhir</label>
         <input type="date" class="form-control form-control-date"  value="DD/MM/YYYY" name="tanggalakhir">
       </div>
       <div class="col-md-4">
        <label for="exampleTimeInput" class="form-label">Waktu Mulai</label>
        <input type="time" class="form-control form-control-time"  value="07:00" name="waktuawal">
      </div>
      
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">POST</button>
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