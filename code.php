<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, 
						initial-scale=1.0">
	<title>Branded Kart</title>
	<link rel="stylesheet"
		href="logincss.css">
</head>

<body>
	<header>
		<h1 class="heading">Branded Kart</h1>
		<h3 class="title">Register to Branded Kart</h3>
	</header>

	<!-- container div -->
	<div class="container">

	 <!-- upper button section to select
			the login or signup form -->
		<div class="slider"></div>
		<div class="btn">
			<button class="login">Login</button>
			<button class="signup">Sign up</button>
		</div>

		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">

			<!-- login form -->
			<form class="login-box" action="auth.php" name="login_form"
					onsubmit="return validation()" method="POST">
				<input type="email"
					class="email ele" name="email" 
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele" name="password" 
					placeholder="password">
				<input type="submit" name="Log in">
			</form>

			<!-- signup form -->
			<form class="signup-box" action="insert.php" method="post">
				<input type="text"
					class="name ele" id="txtName" name="first_name" 
					placeholder="Enter your name">
				<input type="text"
					class="name ele" id="txtConfirm" name="gender" 
					placeholder="Your Gender">
				<input type="email"
					class="email ele" id="txtEmail" name="email" 
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele" id="txtPass" name="password" 
					placeholder="password">
				<input type="submit" name="Sign up">


		</form>
		</div>
	</div>
	<script type="text/javascript">
		function validation()  
            {  
                var id=document.login_form.email.value;  
                var ps=document.login_form.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
	</script>
	<script src="logg.js"></script>

</body>
</html>
