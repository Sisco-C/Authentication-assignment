<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum scale=1.0">
	<meta http-equiv="X=UA=Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
	<title style=>School System Registration</title>
</head>
<body>
	<!-- REGISTRATION AREA -->
 <main id="main-area">
 	
<section id="register">

	<div class="row m-0">

		<div class="col-lg-4 offset-lg-2">

            <br>
            <br>
			<div class="container">  
            <div style="margin-left: 100px;" class="jumbotron">
			
          	<h1 style="text-align: center;" class="login-title text-dark">Registration </h1>
				<p style="text-align: center;">Register to access the system</p>

<form action="action_page.php" style="border:1px solid #ccc">
  <div style="text-align: center;" class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create your students' account.</p>
    <hr>

    <label for="students-id"><b>Student's ID</b></label>
    <input type="text" placeholder="enter Student's ID" name="students-id" required>
      <label for="first-name"><b>First Name</b></label>
    <input type="text" placeholder="Enter your first name" name="first-name" required>
      <label for="last-name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter last name" name="last-name" required>
    <label for="psw" id="password1"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <label for="psw-repeat" id="password2"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to the school's <a href="http://www.jkuat.ac.ke/schools/sms/wp-content/uploads/2017/09/Rules-and-Regulations.pdf" style="color:dodgerblue">Terms & Conditions</a>.</p>

    <div class="clearfix">
      <button type="button" class="btn btn-danger">Cancel</button>
      <button type="submit" class="btn btn-warning">Sign Up</button>
    </div>
  </div>
</form>


				<p style="text-align: center;"><span>I already have <a href="login.php">Login</a></span><p> 
			 <div class="upload-profile-image">
			 <div class="text-center">
			 	<div class="d-flex justify-content-center"
			 	<img src="./images/" alt=""></div>
			 	</div>
			 </div>
			</div>
			</div>  
			</div>  
	</section> 	
 </main>

	<!-- REGISTRATION AREA -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>
</html>