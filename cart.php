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
  error_reporting(0);
session_start();
$_SESSION['Name'];
   ?>


    <?php
   
     
    
     include 'login.php';
    
     $id=$_GET["id"];

    
     if(isset($_POST['submit2'])){
      
  header("location:Showcarts.php");

 
 }


      

     if(isset($_POST["submit1"]))
     {
        $d=0;

        if (is_array($_COOKIE['item'])) {
          # code...
       
        foreach ($_COOKIE['item'] as $name => $value) {
          $d=$d+1;
          # code...
        }
        $d=$d+1;
     }

     else{
      $d=$d+1;
     }


      $res=mysqli_query($conn,"SELECT  *  FROM  addproduct WHERE pid=$id");
       while ($row1=mysqli_fetch_array($res)){
        $img=$row1["Pimage"];
        $nm=$row1['Pname'];
        $price=$row1['Pprice'];
        $qty=$_POST['quantity'];
        $total=$qty*$price;


        if($qty>$row1['Pquantity']){
          echo "This Much Quantity Not Available";
        }
        else{
          $tb_qtys=$row1['Pquantity']-$qty;
        mysqli_query($conn,"UPDATE addproduct SET Pquantity=$tb_qtys WHERE Pimage='$img'");
        }
        

       }
       if(is_array($_COOKIE['item']))
       {
        foreach ($_COOKIE['item'] as $name1 => $value) {
          $value11=explode("__", $value);
          $found=0;
          if($img==$value11[0]){
            $found=$found+1;
            $qty=$value11[3]+$qty;
          
             $tb_qty;
             $res=mysqli_query($conn,"SELECT  *  FROM  addproduct WHERE Pimage='$img'");
       while ($row=mysqli_fetch_array($res)){
        $tb_qty=$row['Pquantity'];

       }

          if ($tb_qty<$qty) {
            ?>
            <script type="text/javascript">
              alert("This Much Quantity Not Available");
            </script> 
            <?php 
          }
          else{
              $total=$value11[2]*$qty; 
             
                setcookie("item[$name1]",$img."__".$nm."__".$price."__".$qty."__".$total,time()+1800);

          }

          }
        
        }

        if($found==0)
        {

            $tb_qty;
             $res=mysqli_query($conn,"SELECT  *  FROM  addproduct WHERE Pimage='$img'");
       while ($row=mysqli_fetch_array($res)){
        $tb_qty=$row['Pquantity'];

       }

          if ($tb_qty<$qty) {
            ?>
            <script type="text/javascript">
              alert("This Much Quantity Not Available");
            </script> 
            <?php 
          }
          else{
           setcookie("item[$d]",$img."__".$nm."__".$price."__".$qty."__".$total,time()+1800); 
        }
      }
    }
        else{


             $tb_qty;
             $res=mysqli_query($conn,"SELECT  *  FROM  addproduct WHERE Pimage='$img'");

       while ($row=mysqli_fetch_array($res)){
        $tb_qty=$row['Pquantity'];

       }

          if ($tb_qty<$qty) {
            ?>
            <script type="text/javascript">
              alert("This Much Quantity Not Available");
            </script> 
            <?php 
          }
          else{
           setcookie("item[$d]",$img."__".$nm."__".$price."__".$qty."__".$total,time()+1800); 
        }
       }
      
   }

  session_unset();

  session_destroy()
 
?>
    
    <title>Shopping Cart</title>
   
   
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
                 $res=mysqli_query($conn,"SELECT  *  FROM  catagorytable WHERE pid BETWEEN 1 AND 6");
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

  <section id="details" style="background: #f8f9fa">
    <div class="cart">
      <div class="container" style="background-color: white">
        <div class="row">
          <?php
                 $res=mysqli_query($conn,"SELECT * FROM addproduct WHERE pid=$id");
                 while ($row=mysqli_fetch_array($res)) {
                 ?>
          <div class="col-md-6" style="padding: 2%">
            
              <img src="<?php echo $row[Pimage]; ?>" style="padding: 3%;border: 2px solid #FF4500">
           
             
            
          </div>


                 
           <div class="col-md-6" style="padding: 10%">
            <h5><?php echo $row["Pname"]; ?></h5>
            <div class="order" style="border: 2px solid #FF4500;padding: 2%">
               <h4 style="font-weight: bold"> TK <?php echo $row["Pprice"]; ?></h4>
               <p>Shopping Code:</p>
               <form name="form1" action="" method="POST"  enctype="multipart/form-data">
               <p>Quantity <input  type="text" name="quantity" placeholder="1" style="width: 20%;height: 5%;"></p>
               <button class="button" style="margin: 2%;color:white;" type="submit" name="submit1" ><i class="fa fa-cart-plus" style="color:white;"></i> Add To Cart</button>
                 <button class="button" style="margin: 2%;color:white;" type="submit" name="submit2" ><i class="fa fa-shopping-cart" style="color:white;"></i> Order Now</button>
              </form>
              
            </div>
            <div class="call" style="padding: 5%">
                <h5>Order Now: <i class="fas fa-phone-volume" style="color:black;"></i>+8801521325108</h5>
              
            </div>
          
          </div>
        </div>
         <h5 style="background-color: #FF4500;padding: 1%;color: white"> Product Details</h5>
         <div class="ddetails" style="padding: 5%">
          <?php echo $row["Pdetails"]; ?>

           
         </div>
          <?php
             }

             ?> 

         <div class="delivery" >
          <div class="container" style="text-align: center;">
              <p style="background-color: #FF4500; padding: 1%; color: white">Delivery Charge and Speed</p>
           <table class="table ">
             <thead>
               <tr style="border: 2px white outset">
                 <td></td>
                 <td style="border: 2px white outset">Dhaka</td>
                 <td> Out Side of Dhaka </td>
               </tr>

             </thead>
             <tbody>
               <tr style="border: 2px white outset">
                 <td>Charge</td>
                 <td style="border: 2px white outset"> Tk 50 </td>
                 <td> Tk 90 </td>
               </tr>
             </tbody>
               <tbody>
               <tr style="border: 2px white outset">
                 <td >Speed</td>
                 <td style="border: 2px white outset"> 1 Day </td>
                 <td > 3 Day </td>
               </tr>
             </tbody>
           </table>
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

  <div class="copyright" style="background-color:#FF4500;">

    <h5 style="color:white; padding:.5%; text-align: center;">&copy 2018 cart.com,All Right Reserved </h5>
  </div>




	
	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type ="text/JavaScript"  src="js/jquery.min.js"></script>
<script type ="text/JavaScript" src="js/popper.min.js"></script>
<script type ="text/JavaScript" src="js/bootstrap.min.js"></script>
<script type ="text/JavaScript" src="js/main.js"></script>
</body>
</html>