<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Div, initial-scale=1.0">
    <link rel = "icon" href = "images\LOGOF.png" type = "image/x-icon">
    <link rel="stylesheet" href="stylesheet\stylesheet6.php">

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
                Sign up
            </h2>
            <form action="signup.php" method="post">
                <input type="text" id="firstname" placeholder="First Name" name="firstname" required>
                <input type="text" id="lastname" placeholder="Last Name" name="lastname" required>
                <input type="text" id="email" placeholder="Email" name="email" required>
                <input type="text" id="contactnumber" placeholder="Contact number" name="contactnumber" required>
                <input type="password" id="password" placeholder="Password" name="password" required>

                <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up" onclick="doFormReset()" >
            </form>
            <h5 style="padding-top:15px;">Already have an Account? <a href="login.php">Login</a></h5>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function()
    {
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid)
            {
			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var contactnumber = $('#contactnumber').val();
			var password 	= $('#password').val();
			
				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,contactnumber: contactnumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': 'User Registered!',
								'type': 'success'
								})
                                setTimeout(' window.location.href = "login.php"', 1000);
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
                                header("Refresh:0");
					}
                    
				});

                setTimeout(function() {
      // Do something after 5 seconds
      location.reload();//reload page
}, 2000)
				
			}else{
				
			}
		});		
	});
	
</script>
</body>
</html>