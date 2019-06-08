<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


<?php

error_reporting(0);
include 'login.php';
 
if(isset($_POST['submit'])){
$name= $_POST['name'];
$subject= $_POST['subject'];
$email= $_POST['email'];
$message= $_POST['message'];

   $query=mysqli_query($conn,"INSERT INTO contact_table(Name,Subject,Email,Message) Values('$name','$subject','$email','$message')") or die("query 1 incorrect....."); 
   $error = '<label class="text-success">Thank you for contacting us</label>';


}
?>
    
    <title>Contact</title>



   
   
</head>
<body>

	  <section id="Home">
        <div class="Head">
             
            
              <nav class="navbar navbar-expand-lg navbar-light bg-black">
                    <div class="container">
                      <i class="fa fa-shopping-cart" style="font-size:36px"><a href="Home.php" class="p-1">CART</a></i>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
                        </button>

                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto float-right">
                                <li class="nav-item active">
                                     <i  class='fa fa-user-secret' style='font-size:20px'><a href="LoginForm.php" class="p-3" >SIGN IN</a></i>
                                </li>
                                

                                <li class="nav-item">
                                    <i class='fab fa-telegram-plane' style='font-size:20px'><a style="font-weight: bold;" href="contactForm.php" class="p-3">CONTACT</a></i>
                                </li>
                                


                            </ul>

                        </div>
                    </div>
                </nav>
      
        </div>
         
    </section>


	<section id="Contact" >
		<div class="ContactBackground">
			<div class="header">
			<h3 style="color: white; font-family: 'serif'">SAY HELLOW!!!</h3>
			<h3 style="color: white; font-family: 'Pacifico';">WE ARE ALWAYS READY TO SERVE YOU</h3>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-md-6" style="text-align: center;" >
					
					<div class="contactbox">
							<?php echo $error;?>
			<form class="formcontrol" action="ContactForm.php" method="POST" style="text-align: center;" >
			<input  type="text" name="name"   placeholder="Your Name" required>
			<br>
			<input type="text" name="subject"  placeholder="Your Subject" required>
			<br>
			<input type="text" name="email"  placeholder="Your Email" required>
			<br>
			<textarea type="message" name="message"  placeholder="Message" row="10" required></textarea>
            <br>
            <button type="submit" name="submit" class="submit">SEND MESSAGE</button>       

           
    

		</form>
				
			
					</div>

			
				</div>

				<div class="col-md-6" >
					<div class="contactbox2" >
						
						<i class='fas fa-phone-volume' style='font-size:36px'><a style ="font-size:15px" class="p-3">Let's Talk</a></i>
					
						<p style ="font-size:15px" class="p-3">+8801521325108  <br> +8801822409776</p>
					
						<i class="fa fa-map-marker" style="font-size:36px"><a style ="font-size:15px" class="p-3">ADDRESS</a></i>
					
						<p style ="font-size:15px" class="p-3">15/9/C Modhubag,Moghbzar.Dhaka <br>E72/C,Modhubagh.Dhaka</p>
						
						<i class="fa fa-comments" style="font-size:36px"><a style ="font-size:15px" class="p-3">General Support</a></i>
						
						<p style ="font-size:15px" class="p-3">durjoydipesh789@gmail.com <br> tipuanika1231@gmail.com</p>
							
					
					</div>
				</div>
				
			</div>
			s
		
		</div>

		

		</div>

		
		
				
		
		
	</section>


	
	   



	
	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>