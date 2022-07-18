<?php
include "koneksi.php";

echo $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
echo $username = isset($_GET['username']) ? $_GET['username'] : '';
echo $password = isset($_GET['password']) ? $_GET['password'] : '';
echo $role = isset($_GET['role']) ? $_GET['role'] : '';

$password = md5($password);

if (empty($username)) {
    header("Location: signup.php?error=User Name is Required");
}else if (empty($password)) {
    header("Location: signup.php?error=Password is Required");
}else {

if (true) {
    $sql = "INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES (NULL, '$role', '$username', '$password', '$nama')";
    if ($conn->query($sql) === TRUE) {
        echo "OK";
        header("Location: login.php");
   } } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: signup.php");
    }
} 
$conn->close();
