<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Dulu Ya gais</title>
  <link rel='shortcut icon' type='image/x-icon' href='assets/icon/favicon.ico' />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('img/log.svg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:fit;
    }
</style>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh;">
      	<form class="border shadow p-3 rounded"
      	      action="checklogin.php" 
      	      method="post" 
      	      style="width: 600px; background-color:white; border-radius=200px;" >
      	      <h1 class="text-center p-3">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
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
		  <button type="submit" 
		          class="btn btn-primary">LOGIN</button>
				  <div class="mb-3">
				  <label  
		           class="form-label">Belum punya akun ?, Yuk daftar dulu <a class="link-dark"href="signup.php"> Signup </a></label> </label>
		</form>
				</div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>