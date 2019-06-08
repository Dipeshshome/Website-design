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
 include 'login.php';
?>
    
    <title>Private Page</title>
   
   
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


  <section id="cartitem">
    <div class="itemcart"style="padding: 2%">
      <div class="container">
        <div class="table-resposive cart_info">
          <table border='1' class="table-condensed">

           
             <thead style="text-align: center;">
              <tr class="cart_menu"  style="background-color: yellow ; font-weight: bold;">
               
                <td class="description" style="text-align: center;">Name</td>
                <td class="price" style="text-align: center;">Address</td>
                <td class="total" style="text-align: center;">Phone_Number</td>
                <td class="total" style="text-align: center;">Product_Name</td>
                <td class="total" style="text-align: center;">Qty</td>
                <td class="total" style="text-align: center;">Total</td>

              </tr>
            </thead>
            <tbody>

           
           <?php
                 $res2=mysqli_query($conn,"SELECT  Name,Address,Phone_Number,Product_Name,Qty,Total  FROM  order_table");
                 while ($row1=mysqli_fetch_array($res2)) {
                 ?>
                    
           <tr>
                
                <td class="cart_description" style="width: 15%">
                  <p style="text-align: center; "> <?php echo $row1[Name];  ?></p>
                </td>

                <td class="cart_price" style="width: 15%">
                     <p style="text-align: center;"> <?php echo $row1[Address];?></p>
                </td>
                <td class="cart_quantity"  style="width: 15%">
                   <p style="text-align: center;"> <?php echo $row1[Phone_Number];?></p> 
                </td>

                <td class="cart_total" style="width: 15%">
                    <p style="text-align: center"> <?php echo $row1[Product_Name];?></p> 
                </td>
                  <td class="cart_total" style="width: 15%">
                    <p style="text-align: center"> <?php echo $row1[Qty];?></p> 
                </td>
                  <td class="cart_total" style="width: 15%">
                    <p style="text-align: center"> <?php echo $row1[Total];?></p> 
                </td>

              </tr>


          <?php


        }

              ?>
            
              </tbody>
          </table>

            
            
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