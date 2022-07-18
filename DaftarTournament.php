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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Daftar Turnamen</title>
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
            <a class="navbar-brand" href="index.php">LO-rent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">
        <a class="nav-link" href= "CariInfoTournament.php">Kembali</a></button>
      </div>
        </div>
    </nav>
    <form class="container py-2">
        <h1 align="center">Daftar Turnamen</h1>
        <div class="card">
            <div class="card-body">
                <div class="col-md-4">
                    <label for="nama_ketua" class="form-label">Nama Ketua</label>
                    <input type="text" class="form-control" id="nama_ketua" placeholder="Masukkan Nama Ketua">
                </div>
                <div class="col-md-4">
                    <label for="nama_tim" class="form-label">Nama Tim</label>
                    <input type="text" class="form-control" id="nama_tim" placeholder="Masukkan Nama Tim">
                </div>
                <div class="col-md-4">
                    <label for="no_hp" class="form-label">No. HP</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="Masukkan No. HP">
                </div>
                <div class="col-md-4">
                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama_anggota" placeholder="Masukkan Nama Anggota">
                </div>
                <div class="col-md-4">
                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama_anggota" placeholder="Masukkan Nama Anggota">
                </div>
                <div class="col-md-4">
                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama_anggota" placeholder="Masukkan Nama Anggota">
                </div>
                <div class="col-md-4">
                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama_anggota" placeholder="Masukkan Nama Anggota">
                </div>
                <div class="col-md-4">
                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama_anggota" placeholder="Masukkan Nama Anggota">
                </div>
                <div class="col-md-4">
                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama_anggota" placeholder="Masukkan Nama Anggota">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Metode Pembayaran</label>
                    <select id="inputState" class="form-select">
                        <option value="" selected>Pilih</option>
                        <option value="Bank Mandiri">Bank Mandiri</option>
                        <option value="Bank BRI">Bank BRI</option>
                        <option value="Ovo">Ovo</option>
                        <option value="Gopay">Gopay</option>
                        <option value="Link Aja">Link Aja</option>
                    </select>
                </div> <br>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </div>
        </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

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