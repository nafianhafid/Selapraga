<?php 
   session_start();
   include "koneksi.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='assets/icon/favicon.ico' />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/home.css">
    <title>Lo-rent</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" height="30" class="d-inline-block align-top" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active text-light" href="index.php">Home</a>
          
          <a class="nav-item nav-link text-light" href="CariInfoTournament.php">Competition</a>
          <a class="nav-item nav-link text-light" href="MelihatBerita.php">News</a>
                </div>
            </div>
            <?php if ($_SESSION['role'] == 'admin') {?>
            <div class="navbar-text">

                Halo Admin, <?=$_SESSION['name']?>
            </div>
                <div class="navbar-nav">
            <button type="button" class="btn btn-outline-light btn-sm"> <a class="nav-item nav-link text-light" href="post_lapangan.php" >Tambah Lapangan</a></button>
            
                <?php  }else{  ?>
                Halo User, <?=$_SESSION['name']?>
                <?php } ?>    
                
                <button type="button" class="btn btn-outline-light btn-sm"> <a class="nav-item nav-link text-light" href="logout.php" >Log Out</a></button>
            </div>
        </div>

    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section class="jb px-5">
        <div class="mb-3">
            <div class="searchBar">
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <div class="btn-group btn-block text-white" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="searchBar" placeholder="Masukan Keyword">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <input type="date" id="datePlay" value="2018-07-22">
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-block text-light btn-cstm">Cari</button>
                    </div>
                </div>
            </div>
            <div class="row banner">
                <img src="assets/img/jb.jpg" alt="">
                <div class=slider><span>&lang;</span></div>
                <div class=slider-r><span>&rang;</span></div>
                <div class="judul text-light">
                    <h1>Stadion Gelora Bung Karno</h1>
                    <p>Jl. Pintu Satu Senayan, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270</p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir jumbotron -->

    <!-- content -->

    <section>
    <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM lapangan ORDER BY id_lapangan ASC ";
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
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="aside">
                        
                            <div class="row">
                                <div class="col-sm-4">
                                <img src="lapangan/<?php echo $row['gambar_lapangan']; ?>" style="width: 350px;">
                                </div>
                                <div class="col-mt-8">
                                    <div class="mt-4">
                                        <h4><?php echo $row['nama_lapangan']; ?></h4>
                                        <p><?php echo $row['lokasi']; ?></p>
                                        <p>Rp.<?php echo $row['harga']; ?>,00/Jam</p>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="btn-container d-flex flex-row">
                            
                            <div class="button">
                                <a href="cari.php" class="text-light">Booking</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php
        
      }
      ?>
    </section>
    <!-- akhir content -->

    <!-- footer -->
    <footer class="bg-dark text-light">
        <div class="container pt-3">
            <div class="row text-center">
                <div class="col">
                    <p>&copy;Copyright, Lorent 2021.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->
</body>

</html>
<?php }else{
	header("Location: login.php");
} ?>