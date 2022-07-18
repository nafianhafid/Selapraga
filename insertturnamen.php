<?php
include "connect_db.php";

// membuat variabel untuk menampung data dari form
  $judul   = $_POST['judul'];
  $gambar = $_FILES['gambar']['name'];
  $lapangan   = $_POST['lapangan'];
  $tanggal    = $_POST['tanggal'];
  $waktuawal = $_POST['waktuawal'];
  $tanggalakhir = $_POST['tanggalakhir'];


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'turnamen/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO turnamen (judul, gambar, lapangan, tanggal, waktu_mulai, tanggal_akhir) VALUES ('$judul', '$nama_gambar_baru', '$lapangan','$tanggal','$waktuawal', '$tanggalakhir')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='CariInfoTournament.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='insertturnamen.php';</script>";
            }
} else {
   $query = "INSERT INTO turnamen (judul, gambar, lapangan, tanggal, waktu_mulai, tanggal_akhir) VALUES ('$judul', NULL, '$tanggal' '$lapangan','$waktuawal', '$tanggalakhir')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='CariInfoTournament.php';</script>";
                  }
}