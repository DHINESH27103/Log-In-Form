<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style2.css">
	
</head>
<body>
<div class="form-box">
<form class="form" method="post" action="register.php">
<?php include('errors.php'); ?>

    <span class="title">Register</span>
    <span class="subtitle">Create a free account with your email.</span>
    <div class="form-container">
      <input type="text" class="input" placeholder="Full Name" value="<?php echo $username; ?>" name="username" >
			<input type="email" class="input" placeholder="Email" value="<?php echo $email; ?>" name="email"  >
			<input type="password" class="input" placeholder="Password" name="password_1">
			<input type="password" class="input" placeholder="Confirm Password" name="password_2">
    </div>
    <button type="submit" name="reg_user">Register</button>
</form>
<div class="form-section">
  <p>Have an account? <a href="login.php">Log in</a> </p>
</div>
</div>
</body>
</html>