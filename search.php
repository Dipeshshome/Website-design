
<?php 
  error_reporting(0);
     include 'login.php';
     $set=$_POST['search'];
?>
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
  
    <title>Show Catagorised</title>
   
   
</head>
<body>
   <section id="Home">
        <div class="Head">
             
              <nav class="navbar navbar-expand-lg navbar-light bg-Dark">
                    <div class="container">
                       <i class="fa fa-phone"style="font-size:20px"><a href="Home.php" class="p-1">01521325108</a></i>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
                        </button>

                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto float-right">
                                <li class="nav-item active">
                                     <i  class='fa fa-user-secret' style='font-size:20px'><a href="loginForm.php" class="p-3" >SIGN IN</a></i>
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
  <section id="nav_part">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                   <a class="center"  href="Home.php"><img src="images/logoicon.png"></a>      
                        <p style="font-size: 110%; font-family: 'Pacifico', cursive; text-align: center; " class="text">It's Everywhere You Want to be!!!!!</p>
                             <form class="form-inline" action="search.php" method="POST">
                       <input style="padding: 2%;border-radius: 5px;"  type="text" name="search" placeholder="Search Product"/><button style="margin-left: 1%;" class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                                              

                    </div>
                </nav>

      </section>
      
               <section id="product">
                 <div class="productlist">
                <div class="container">
                        <div class="row"> 
                        <div class="col-md-12">

                <?php
                 $res=mysqli_query($conn,"SELECT  Cname  FROM  catagorytable WHERE pid BETWEEN 1 AND 7");
                 while ($row=mysqli_fetch_array($res)) {
                 ?>
                            <a  href="list.php?id=<?php echo $row["pid"];?>"><?php echo $row["Cname"]; ?></a>
                                
                               
              <?php
             }

             ?> 
                              
                        </div>   
                                             
                      </div>
                        </div>
                      
                  </div> 
              </section>



	<section id="search">
		<div class="col-md-12">
       <div class="container mt-4" >     
                    <?php
                 if($set) {
     	$show="SELECT * FROM addproduct WHERE  Pname LIKE  '%".$set."%'";
     	$result=mysqli_query($conn,$show);
                 while ($row=mysqli_fetch_array($result)) {
                 ?>
                 <div class="row2" style="margin-top:">
                    <div class="card" style="border: 1px solid #b2beb5;">

                               <img src="<?php echo $row["Pimage"]; ?>"class="card-img-top"  style=" padding: 2%"/>  
                                <div class="card-body">
                                  <p style="text-align: center; margin-top: -10%" > ৳ <?php echo $row["Pprice"]?><br><?php echo $row["Pname"]?></p>
                                
                                   <button class="btn btn-primary btn-sm" style="width: 100%; font-size: 60%; padding: 2%; text-align: center;"><a  style="color: white;font-weight: bold;" href="cart.php?id=<?php echo  $row["pid"];?>">Buy Now</a></button>
                               </div>
                             </div>
                              </div>
               <?php
             }
             }

             ?>  
             </div>
  
    </div> 

	</section>


    <section id="Endingpart" style="margin-top: 60%">
  <div class="end" >
    <div class="container" style="border-bottom: 2px solid white">
          <div class="row">
       <div class="col-md-4" style="padding: 2%; ">

        <h3 style="color: white">cart.com</h3>
        <div class="container" style="color: white;">
        <li><a style="color: white;"href="">How to order</a></li>
       <li><a style="color: white;"href="">Return Policy</a></li>
       <li><a style=" color: white;"href="">Shipment</a></li>
        </div>
      

    
  </div>
  <div class="col-md-4"  style="padding: 2%;">
    <h3 style="color: white">Information</h3>
    <div class="container" style="color: white;">
      <li><a style="color: white;"href="">Contact Us</a></li>
       <li><a style="color: white;"href="">About Seller</a></li>
    </div>
       
    

    
  </div>
  <div class="col-md-4"  style="padding: 2%">
     <h3 style="color: white">Communities</h3>
     <div class="container" style="color: white;">
       <li><a style="color: white;"href="">Facebook</a></li>
       <li><a style="color: white;"href="">Google Plus</a></li>
       <li><a style="color: white;"href="">Twitter</a></li>
       <li><a style="color: white;"href="">Youtube</a></li>
     </div>
      
    
    
    
  </div>
    </div>
    </div>

<div>

  <h3 style="color: white;text-align: center;padding-top: 1%">We Accept</h3>
  <div class="container" style="text-align: center;">
     <img src="images/payment.jpg" class="pay" style="padding: 2%">
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

