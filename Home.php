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
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <?php
   error_reporting(0);
session_start();
$_SESSION['Name'];
   ?>

<?php 
 
     include 'login.php';
?>
    
    <title>Homepage</title>
   
   
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
                          <a class="center"  href="Home.php"><img src="images/logoicon.png"   ></a>  
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
                 $res=mysqli_query($conn,"SELECT  *  FROM  catagorytable WHERE pid BETWEEN 1 AND 7");
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

              
                  <section id="banner_part">
                  <div class="Slider" style="border: 2px white outset;">        
                <div class="row">
                    
                    
                          <div class="col-md-9">
                            <div class="container">
                        
                             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="w-100" src="images/slide1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/slide2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/slider3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="container mt-4">
                             <div class="row">
                             <div class="owl-carousel owl-theme"   >
                               <?php
                 $res=mysqli_query($conn,"SELECT Cname,Cimage FROM catagorytable WHERE showstatus=0");
                 while ($row=mysqli_fetch_array($res)) {
                 ?>
                             <div class="item" style="border: 2px white outset" >
                                <div class="card" >
                               <img src="<?php echo $row["Cimage"]; ?>" class="card-img-top" >
                               <div class="card-body">
                                <p style="background-color: black;color: white"><?php echo $row["Cname"]; ?></p>
                                   
                               </div>
                               </div>
                                 </div>
                                   <?php
             }

             ?> 
                                                  
                  </div> 
    
              </div>
             </div>
     </div>
                    </div>
                     <div class="col-md-3" style="margin-left:-.5%;" >  
                        <h6 style="background-color:#FF4500; padding: 3%; color: white; font-weight: bold;">Categories</h6>
                        <div class="listicon"  style="background-color: white;" >
                         <ul class="fa-ul" style="border: 2px white outset" >
                          <?php
                 $res=mysqli_query($conn,"SELECT pid,Cname,Cicon FROM catagoryTable");
                 while ($row=mysqli_fetch_array($res)) {
                 ?>

                          <li style="padding: 2%;"><i class="fa-li icon"><img src="<?php echo $row["Cicon"]; ?>"></i><a  style="font-size: 15px; color: black;" href="list.php?id=<?php echo  $row["pid"];?>"><?php echo $row["Cname"]; ?></a></li>
                   
                         <?php
             }

             ?> 
                          
                            </ul>

                        
                        </div>
                      
                     
                    </div>
                
                
    
                    </div>
                </div>                   
                </div>
                 

                        
</section>


<section id="dynamicproduct">
    <div class="product">

    <div class="row">
          <div class="col-md-3" >
            <h6 style="background-color:#FF4500;padding: 3%; color: white; font-weight: bold;">Men's Fashion</h6>
              <div class="listicon" style="background-color: white;border: 2px white outset;">
                         <ul class="fa-ul" style="padding: 10%">
                          <li><a  style="font-size: 15px; color: black; "href="">Men's Accessories</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Winter Clothing</a></li>
                          <li><a    style="font-size:15px;color: black;" href="">Shoes</a></li> 
                         <li><a   style="font-size: 15px;color: black;" href="">Panjabi</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Polo Shirt</a></li>
                          <li><a  style="font-size:15px;color: black;" href="">TShirt</a></li> 
                           <li><a  style="font-size:15px;color: black;" href="">Shirt</a></li> 
                            </ul>

                             </div>

                             <h6 style="background-color:#FF4500;padding: 3%; color: white; font-weight: bold; margin-top:10%">Women's Fashion</h6>
              <div class="listicon" style="background-color: white;border: 2px white outset;">
                         <ul class="fa-ul" style="padding: 10%">
                           <li><a  style="font-size: 15px; color: black; "href="">Salwar Kameez</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Sharee</a></li>
                          <li><a    style="font-size:15px;color: black;" href="">W. Accessories</a></li> 
                         <li><a   style="font-size: 15px;color: black;" href="">Bags</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Beauty Care</a></li>
                          <li><a  style="font-size:15px;color: black;" href="">Kurti</a></li> 
                           <li><a  style="font-size:15px;color: black;" href="">Cosmetics</a></li>  
                            </ul>
                        
                        </div>

                        <h6 style="background-color:#FF4500;padding: 3%; color: white; font-weight: bold; margin-top:10%">Gadget & Electronics</h6>
              <div class="listicon" style="background-color: white;border: 2px white outset;">
                         <ul class="fa-ul" style="padding: 10%">
                           <li><a  style="font-size: 15px; color: black; "href="">Lighting</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Speaker</a></li>
                          <li><a    style="font-size:15px;color: black;" href="">Camera Gadget</a></li> 
                          <li><a   style="font-size: 15px;color: black;" href="">Stand & Holder</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Microphone</a></li>
                          <li><a  style="font-size:15px;color: black;" href="">USB Gadget</a></li> 
                            </ul>
                        
                        </div>


                         <h6 style="background-color:#FF4500;padding: 3%; color: white; font-weight: bold; margin-top:10%">Computer & Laptop</h6>
              <div class="listicon" style="background-color: white;border: 2px white outset;">
                         <ul class="fa-ul" style="padding: 10%">
                           <li><a  style="font-size: 15px; color: black; "href="">Router</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Laptop</a></li>
                          <li><a    style="font-size:15px;color: black;" href="">Desktop</a></li> 
                          <li><a   style="font-size: 15px;color: black;" href="">Headphone</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Speaker</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Accessories</a></li>
                          
                         
                            </ul>
                        
                        </div>
    

                         <h6 style="background-color:#FF4500;padding: 3%; color: white; font-weight: bold; margin-top:10%">Home & Livings</h6>
              <div class="listicon" style="background-color: white;border: 2px white outset;">
                         <ul class="fa-ul" style="padding: 10%">
                           <li><a  style="font-size: 15px; color: black; "href="">Sofa Set</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Other Home Decor</a></li>
                          <li><a    style="font-size:15px;color: black;" href="">3D Sticker</a></li> 
                          <li><a   style="font-size: 15px;color: black;" href="">Bedding</a></li>
                          <li><a   style="font-size:15px;color: black;"  href="">Dining Table</a></li>
                         
                            </ul>
                        
                        </div>
    
    
  </div>
  <div class="col-md-9" >
       <div class="container mt-4" >     
                    <?php

                 $res=mysqli_query($conn,"SELECT  *  FROM  addproduct WHERE showstatus=0");
                 while ($row=mysqli_fetch_array($res)) {
                 ?>
                 
                 <div class="row2">
                    <div class="card" style="border: 1px solid #b2beb5;margin-bottom: 5%">

                               <img src="<?php echo $row["Pimage"]; ?>"class="card-img-top"  style=" padding: 2%"/>  
                                <div class="card-body">
                                  <p style="text-align: center; margin-top: -10%" > ৳ <?php echo $row["Pprice"]?><br><?php echo $row["Pname"]?></p>
                                
                                   <button class="btn btn-primary btn-sm" style="width: 100%; font-size: 60%; padding: 2%; text-align: center;"><a  style="color: white;font-weight: bold;" href="cart.php?id=<?php echo  $row["pid"];?>">Buy Now</a></button>
                               </div>
                             </div>
                              </div>

             

               <?php
             }

             ?>  
             </div>
  
    </div>

   </div>
  </div>


   



  
            
</section>

  



  
            




<section id="Endingpart">
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
      <li><a style="color: white;"href="aboutcart.php">About CART</a></li>
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

  <div class="copyright" style="background-color:#FF4500;">

    <h5 style="color:white; padding:.5%; text-align: center;">&copy 2018 cart.com,All Right Reserved </h5>
  </div>
                      
   
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type ="text/JavaScript"  src="js/jquery.min.js"></script>
<script type ="text/JavaScript" src="js/popper.min.js"></script>
<script type ="text/JavaScript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>

<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="js/owl.carousel.js"></script>

<script>
 var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>

</body>
</html>