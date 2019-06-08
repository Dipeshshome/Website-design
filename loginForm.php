<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="css/style.css"/>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


  <?php
session_start();
   ?>

    <?php
   
     error_reporting(0);
     include 'login.php';

     if(isset($_SESSION['Name'])){
      header("location:Showcarts.php");

     }

     else{





         if(isset($_POST['submitL'])){
         $name =$_POST['UserName'];
         $pass =$_POST['Password'];
         $pass=md5($pass);
      
        
        $query=mysqli_query($conn,"SELECT * from userinformation where Name='$name' and Password='$pass'") or die("query 1 incorrect....."); 
      
        if(mysqli_num_rows($query)==1){
          
          $_SESSION['Name']=$name;


           header("location:Showcarts.php");
         
          
        }
        else
          {
            echo "User Name and Password Incorrect";
          }
        }
      }
         
         ?>


         <?php
    error_reporting(0);
    include 'login.php'; 
 

    if(isset($_POST['submitR']))
    {
      
          $name =$_POST['UserName'];
          $email =$_POST['Email'];
          $pass =($_POST['Password']);
          $pass2 =($_POST['Password2']);
          $phone=($_POST['Phone']);
          $address=($_POST['Address']);

      if($pass==$pass2){
       $pass=md5($pass);
       $sql="INSERT into userinformation (Name,Email,Password,Phone_Number,Address) values('$name','$email','$pass','$phone','$address')";
       mysqli_query($conn,$sql);    
        $_SESSION['message']="You Are Now Registered";
        echo "You Are Now Registered";
    
    }
    else{
      $_SESSION['message']="The Two Password Did Not Matched";

    }
    	
    }

    
?>

    
    <title>Registration</title>
   
   
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

	<section id="Login">
		<div class="LoginForm">
            <h2>Welcome!!!<br>Login to access the Market Place</h2>
			<div class="row">
				<div class="col-md-6 ">
            	<div class="container" style="margin-top: 25%">
            		<form class="box" action="LoginForm.php" method="POST" enctype="multipart/form-data">
            		<h3>LOGIN</h3>
            		<input type="text" name="UserName" placeholder="UserName" required>
            		<input type="password" name="Password" placeholder="Password" required>
            		<input type="submit" name="submitL" value="Login" >
            	</form>
            	</div>
            	
            </div>

            <div class="col-md-6 ">
            	
            	<form class="box" action="LoginForm.php" method="POST"  >
            		<h3>REGISTER</h3>   
            		<input type="text" name="UserName" placeholder="UserName" required>
            		<input type="text" name="Email" placeholder="Email" required>
            		<input type="password" name="Password" placeholder="Password" required>
                <input type="password" name="Password2" placeholder="Retype Password" required>
                 <input type="text" name="Phone" placeholder="Phone No" required> 
                   <input type="text" name="Address" placeholder=" Address" required>
            		<input type="submit" name="submitR" value="Register">
>
            	</form>
            	
            		
            
            	
            </div>

            <div class="copyright">
			     <a style="color:white;">&copy 2018 AUST CSE 3.1,All Right Reserved </a>
		         </div>
				
			</div>
            
      
		</div>
		 
	</section>
	    



	
	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type ="text/JavaScript"  src="js/jquery.min.js"></script>
<script type ="text/JavaScript" src="js/popper.min.js"></script>
<script type ="text/JavaScript" src="js/bootstrap.min.js"></script>
<script type ="text/JavaScript" src="js/main.js"></script>
</body>
</html>