<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: tips.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Div, initial-scale=1.0">
    <link rel = "icon" href = "images\LOGOF.png" type = "image/x-icon">
    <link rel="stylesheet" href="stylesheet\stylesheet2.php">
    <link rel="stylesheet" href="stylesheet\stylesheet3.php">
    <title>TechNoob</title>
</head>

<body>
    <div class="header-nav">
        <nav>
            <a href="main.php" img><img  src="images\LOGOF.png" alt="lol" width="100" height="90"></a>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="aboutus.php">About</a></li>
            </ul>
        </nav>

        <div class="mysign">
            <h2>
                Login
            </h2>
            <form action="">
                <input type="email" name="email" id="username" placeholder="Email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                <input type="password" name="password" id="password" placeholder="Password" name="Password" required>
                <input type="submit" id="login" value="Login" onclick="myFunction()" >

            </form>
            <p id="demo"></p>
            <h5 style="padding-top:15px;">Don't have an Account?<a href="signup.php">Register</a></h5>
        </div>

    </div>

    <div class="footer">
    <a href="https://www.facebook.com/"><li><img src="images\f.png" alt="not available"></li></a>
            <a href="https://www.instagram.com/"><li><img src="images\i.png" alt="not available"></li></a>
             <a href="https://www.twitter.com/"><li><img src="images\t.png" alt="not available"></li></a>
               <p>Views counter</p>  <p ><span><a href="https://www.webfreecounter.com/" target="_blank"><img style=" width:100px;" src="https://www.webfreecounter.com/hit.php?id=gvapndp&nd=6&style=93" border="0" alt="hit counter"></a>
<!-- End of WebFreeCounter Code --></span></p>
               <p> &copy; Copyright 2020 TechNoob.inc  All Rights Reserved. </p>  <!-- Start of WebFreeCounter Code -->

               
   </div>
   <script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password},
				success: function(data){
                    if($.trim(data) === "loginSuccessful")
                    {
                        Swal.fire({
								'title': 'Successful',
								'text': 'Login!',
								'type': 'success'
								})
                                setTimeout(' window.location.href = "tips.php"', 1000);
					}
                    else
                    {
                        Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while login.',
								'type': 'error'
								})
                                setTimeout(function() {
      // Do something after 5 seconds
      location.reload();//reload page
}, 2000)
                    }
					},
                error: function(data){
					alert('there were erros while doing the operation.');
                    }
				
                    
				});
		});
	});
</script>

<script>
function myFunction() {
  var x = document.getElementById("login").pattern;
  document.getElementById("demo").innerHTML = x;
}
</script>
</body>
</html>