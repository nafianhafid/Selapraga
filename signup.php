<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Dulu Ya gais</title>
  <link rel='shortcut icon' type='image/x-icon' href='assets/icon/favicon.ico' />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('img/register.svg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:fit;
    }
</style>
<body>

      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh;">
      	<form class="border shadow p-3 rounded"
      	      action="insertuser.php" 
      	      method="GET" 
      	      style="width: 600px; background-color:white; border-radius=200px;" >
				<a class="link-dark" href="login.php" >Kembali</a>
      	      <h1 class="text-center p-3">SIGN UP</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
              <div class="mb-3">
		    <label for="nama" 
		           class="form-label">Nama</label>
		    <input type="nama" 
		           name="nama" 
		           class="form-control" 
		           id="nama">
		  </div>
		  <div class="mb-3">
      <label for="username" 
		           class="form-label">Username</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
          <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
		  </select>
		  <button type="submit" 
		          class="btn btn-primary">SIGNUP</button>
		</form>
		
				</div>
</body>
</html>
<?php }else{
	header("Location: signup.php");
} ?>