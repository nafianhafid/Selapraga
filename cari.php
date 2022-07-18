<?php 
   session_start();
   include "koneksi.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/icon/favicon.ico" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/style/home.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Lo-rent</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/logo.png" height="30" class="d-inline-block align-top" alt="" />
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
            <button type="button" class="btn btn-outline-light btn-sm"> <a class="nav-item nav-link text-light" href="riwayat_booking.php" >Riwayat Booking</a></button>
                <?php  }else{  ?>
                Halo User, <?=$_SESSION['name']?>
                <?php } ?>    
                
                <button type="button" class="btn btn-outline-light btn-sm"> <a class="nav-item nav-link text-light" href="logout.php" >Log Out</a></button>
            </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <section class="jb px-5">
    <div class="mb-3">
      <div class="row banner">
        <img src="assets/img/jb.jpg" alt="" />
        <div class="slider"><span>&lang;</span></div>
        <div class="slider-r"><span>&rang;</span></div>
        <div class="judul text-light">
          <h1>Lapangan SM Futsal</h1>
          <p>
            Jl. Mawar
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir jumbotron -->

  <!-- content -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-5 mt-3">
          <div class="aside">
            <div class="info">
              <div class="row">
                <div class="col-sm-4">
                  <img src="assets/img/1.jpg" alt="gambar 1" width="120px" class="m-3" />
                </div>
                <div class="col-sm-8">
                  <div class="mt-4">
                    <h4>Lapangan Lantai</h4>
                    <p>Harga Rp. 130.000/Jam</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="info">
              <div class="row">
                <div class="col-sm-4">
                  <img src="assets/img/2.jpg" alt="gambar 1" width="120px" class="m-3" />
                </div>
                <div class="col-sm-8">
                  <div class="mt-4">
                    <h4>Lapangan Rumput</h4>
                    <p>Harga Rp. 150.000/Jam</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-container d-flex flex-row">
              <div class="button">
                <a href="" class="text-light">Chat</a>
              </div>


              <div data-toggle="modal" data-target="#mydaftar" class="button"><a href="#" class="text-light">Booking </a>
              </div>
              <div div id="mydaftar" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Booking Form</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="insertbooking.php" method="GET" role="form">
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Penyewa</label>
                          <input type="text" class="form-control" id="penyewaModal" name="nama" placeholder="nama penyewa">
                        </div>
                        <div class="form-group">
                          <label>Lapangan</label>
                          <select name="lapangan" onChange="dropdownTip(this.value)" class="form-control" id="lapanganModal">
                            <option value="0">Silahkan Pilih Lapangan</option>
                            <option value="130000">Lapangan Lantai</option>
                            <option value="150000">Lapangan Rumput</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Sewa</label>
                          <input type="date" class="form-control" id="" name="date" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label>Lama Sewa (Jam)</label>
                          <input type="text" class="form-control" name="lamasewa" oninput="calculate()" id="lamasewaModal">
                        </div>
                        <div class="form-group">
                          <label>Waktu Sewa</label>
                          <input type="time" name="waktuawal" id="time1Modal">
                          <label>sampai</label>
                          <input type="time" name="waktuakhir" id="time2Modal">
                        </div>
                        <div class="form-group">
                          <script type="text/javascript">
                            function dropdownTip(value) {
                              value = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'IDR'
                              }).format(value)
                              document.getElementById("bSewa").innerHTML = value;
                              document.getElementById("jmlsewaModal").value = value;
                              if (value == 500000) {
                                document.getElementById("laplModal").value = "Lapangan Lantai";
                              } else {
                                document.getElementById("laplModal").value = "Lapangan Rumput";
                              }
                            }
                          </script>
                          <label>Biaya Sewa</label>
                          <p id="bSewa">IDR. 0</p>
                        </div>
                        <div class="form-group">
                          <script type="text/javascript">
                            function calculate() {
                              var select = document.getElementById('lapanganModal');
                              var hasil1 = select.options[select.selectedIndex].value;
                              var hasil2 = document.getElementById("lamasewaModal").value;
                              var result = parseInt(hasil1) * parseInt(hasil2);
                              result = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'IDR'
                              }).format(result)
                              document.getElementById("tSewa").innerHTML = result;
                              document.getElementById("jmltotalModal").value = result;
                            };
                          </script>
                          <label>Total Sewa</label>
                          <p id="tSewa">IDR. 0</p>
                        </div>
                        <input type="hidden" name="jmlSewa" id="jmlsewaModal">
                        <input type="hidden" name="jmlTotal" id="jmltotalModal">
                        <input type="hidden" name="lapangan" id="laplModal">

                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-success" value="Submit">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w3-container">
          <h2>Waktu Tersedia</h2>
          <ul class="w3-ul w3-card-4">
            <li class="w3-bar">
              <span class="w3-bar-item w3-button w3-white w3-right">07.00 - 24.00</span>
              <div class="w3-bar-item">
                <span>Senin</span>
              </div>
            </li>
            <li class="w3-bar">
              <span class="w3-bar-item w3-button w3-white w3-right">07.00 - 24.00</span>
              <div class="w3-bar-item">
                <span>Selasa</span>
              </div>
            </li>
            <li class="w3-bar">
              <span class="w3-bar-item w3-button w3-white w3-right">07.00 - 24.00</span>
              <div class="w3-bar-item">
                <span>Rabu</span>
              </div>
            </li>
            <li class="w3-bar">
              <span class="w3-bar-item w3-button w3-white w3-right">07.00 - 24.00</span>
              <div class="w3-bar-item">
                <span>Kamis</span>
              </div>
            </li>
            <li class="w3-bar">
              <span class="w3-bar-item w3-button w3-white w3-right">07.00 - 24.00</span>
              <div class="w3-bar-item">
                <span>Jumat</span>
              </div>
            </li>
            <li class="w3-bar">
              <span class="w3-bar-item w3-button w3-white w3-right">07.00 - 24.00</span>
              <div class="w3-bar-item">
                <span>Sabtu</span>
              </div>
            </li>
            <li class="w3-bar">
              <span class="w3-bar-item w3-button w3-white w3-right">07.00 - 24.00</span>
              <div class="w3-bar-item">
                <span>Minggu</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="w3-container">
          <h2>Rating Lapangan</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <div class="button">
                <a href="ReviewLapangan.php" class="text-light">Review</a>
              </div>
        </div>
      </div>
      <div class="w3-container">
        <h2>Fasilitas</h2>
        <ul class="w3-ul ">
          <li class="w3-bar">
            <img src="assets/img/toilet.svg" class="w3-bar-item w3-shape w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
              <span class="w3-large">Toilet</span><br>
            </div>
          </li>
          <li class="w3-bar">
            <img src="assets/img/coffee-shop.svg" class="w3-bar-item w3-shape w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
              <span class="w3-large">Coffe Shop</span><br>
            </div>
          </li>
          <li class="w3-bar">
            <img src="assets/img/locker.svg" class="w3-bar-item w3-shape w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
              <span class="w3-large">Ruang Ganti</span><br>
            </div>
          </li>
        </ul>
        <div>
          <p></p>
        </div>
      </div>
    </div>
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