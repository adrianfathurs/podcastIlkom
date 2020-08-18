<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/lambang_crast.png" width="20px">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>

  <title>Crast FM</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/auth.css">
</head>
<body>
	
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<a href="https://www.youtube.com/channel/UCVw2hX3tXPK44WR7a-qXAVg/featured"><span><i class="fab fa-youtube"></i></span></a>
					<a href="https://www.instagram.com/crast1078fm/"><span><i class="fab fa-instagram"></i></span></a>
					<a href="https://www.twitter.com/CrastFM/"><span><i class="fab fa-twitter-square"></i></span></a>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo base_url('Auth/login') ?>">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="row align-items-center remember">
						<label >
						<input type="checkbox">Remember Me
						</label>
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
						<button type="button" class="btn btn-secondary" onclick="history.back();">Kembali </button>
					</div>
				</form>
			</div>			
		</div>
	</div>
</div>
</body>
</html>