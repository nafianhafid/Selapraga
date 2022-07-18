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

    <title>Info Turnamen</title>
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="CariInfoTournament.php">Competition</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="MelihatBerita.php">News</a>
                    </li>
                   
                </ul>
            </div>
            <?php if ($_SESSION['role'] == 'admin') {?>
            <div class="navbar-text">

                Halo Admin, <?=$_SESSION['name']?>
            </div>  
                <div class="navbar-nav">
            <button type="button" class="btn btn-outline-light btn-sm"> <a class="nav-item nav-link text-light" href="post_turnament.php" >Tambah Turnamen</a></button>
        
                <?php  }else{  ?>
                Halo User, <?=$_SESSION['name']?>
                <?php } ?>    
                
                <button type="button" class="btn btn-outline-light btn-sm"> <a class="nav-item nav-link text-light" href="logout.php" >Log Out</a></button>
            </div>
            
    </nav>
    <form class="container py-2">
        <h1 align="center">Info Turnamen</h1>
        <div class="card">
            <div class="card-body">
                <div class="col-md-5 mt-3">
                    <div class="aside">
                        <div class="info">
                        <div class="row" >
                        <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM turnamen ORDER BY id_tur ASC";
      $result = mysqli_query($conn, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
       //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
      <div class="col-sm-4">
      <img src="turnamen/<?php echo $row['gambar']; ?>" style="width: 120px;">
                                </div>
      <div class="col-sm-8">
                                    <div class="mt-4">
                                        <h4><?php echo $row['judul']; ?> </h4>
                                        <p><?php echo $row['tanggal']; ?> - <?php echo $row['tanggal_akhir']; ?></p>
                                        <p><?php echo $row['lapangan']; ?></p>
                                        <p>Waktu Mulai : <?php echo $row['waktu_mulai']; ?> 
                                        
                                    </div> </div>
      
      <?php
        
      }
      ?>
				
			</div>
                                </div>
                            </div>
                        </div>
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
}?>