<!DOCTYPE html>
<html>
<head>
	<title>user login </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="jquery.js"></script>
	<style>
          .login-right{
          	display:none;

        }
   </style>

</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
		<div class="login-left">
		<h2> Login here </h2>
		<form action= "validate.php" method="post">
			<div class "form-group">
				<label>username</label>
				<input type="text" name="user" class="form-control"required>
			</div>	
			<div class "form-group">
				<label>password</label>
				<input type="password" name="password" class="form-control"required>
			</div>	
			<button type="submit" class="btn btn-primary">login</button>
			<p>new user click here</p>
</form>
	</div>
</div>
     
	<div class="col-md-6 login-right">
		<div class="login-right">
		<h2> REGISTER HERE </h2>
		<form action= "register.php" method="post">
			<div class "form-group">
				<label>username</label>
				<input type="text" name="user" class="form-control"required>
			</div>	
			<div class "form-group">
				<label>password</label>
				<input type="password" name="password" class="form-control"required>
			</div>	
			<button type="submit" class="btn btn-primary">register</button>

	</div>
	</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
	$("p").click(function (){
     $(".login-left").fadeToggle(1000,function (){
     $(".login-right").fadeIn(1000);
     	});

	});
</script>
</body>
</html>