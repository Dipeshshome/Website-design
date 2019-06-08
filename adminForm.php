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
  if(isset($_POST['submitS'])){
    	   header("location:show.php");
         }

         if(isset($_POST['submitA'])){
    	   header("location:addProduct.php");
         }
          if(isset($_POST['submitD'])){
    	   header("location:display.php");
         }





 ?>


    
    <title>Admin</title>
   
   
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
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                     <i  class='fa fa-user-secret' style='font-size:20px'><a href="adminForm.php" class="p-3" >ADMIN</a></i>
                                </li>
                              
                                <li class="nav-item">
                                    <i class='fab fa-telegram-plane' style='font-size:20px'><a href="contactForm.php" style="font-weight: bold;" class="p-3">CONTACT</a></i>
                                </li>
                                


                            </ul>

                        </div>
                    </div>
                </nav>
      
        </div>
         
    </section>

	<section id="admin">
	   <div class="sidebar">
	   	<h1 style="color: white">ADMINISTRATION</h1>
	   		<form class="Admin_form" method="post" action="">
	   	  <button type="submit" name="submitA" class="submit">ADD</button>
	   	  <br>
	   	  <button type="submit" name="submitD" class="submit">DELETE</button>
	   	  <br>
	   	  <button type="submit" name="submit" class="submit">UPDATE</button>
	   	  <br>
	   	  <button type="submit" name="submitS" class="submit">Show Message</button>
	   	

	
	   	  <br>
	   	  	</form> 


	   </div>

		

	</section>

	



	
	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>