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
 include 'login.php';

   if(isset($_POST['order'])){
     $name=$_POST['names'];
     $quan=$_POST['quan'];


    if($quan=' '){
       
          foreach ($_COOKIE['item'] as $name1 => $value) {
          $value11=explode("__", $value);
      $query=mysqli_query($conn,"INSERT INTO Cookie_table(Product_Name,Qty,Total) VALUES('$value11[1]',$value11[3],$value11[4])") or die("query 1 incorrect.....");
       
        }
        $query2=mysqli_query($conn,"INSERT INTO order_table(Name,Address,Phone_Number,Product_Name,Qty,Total) SELECT userinformation.Name,userinformation.Address,userinformation.Phone_Number,Cookie_table.Product_Name,Cookie_table.Qty,Cookie_table.Total from userinformation join Cookie_table WHERE userinformation.Name='$name'") or die("query 1 incorrect....."); 
    }
    else{
       foreach ($_COOKIE['item'] as $name1 => $value) {
          $value11=explode("__", $value);
      $query=mysqli_query($conn,"INSERT INTO Cookie_table(Product_Name,Qty,Total) VALUES('$value11[1]','$quan',$value11[2]*'$quan')") or die("query 1 incorrect.....");
       
        }
        $query2=mysqli_query($conn,"INSERT INTO order_table(Name,Address,Phone_Number,Product_Name,Qty,Total) SELECT userinformation.Name,userinformation.Address,userinformation.Phone_Number,Cookie_table.Product_Name,Cookie_table.Qty,Cookie_table.Total from userinformation join Cookie_table WHERE userinformation.Name='$name'") or die("query 1 incorrect....."); 

    }

  
   }
 
    
?>
    
    <title>Show Cart Item</title>
   
   
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
                               
                                

                                <li class="nav-item">
                                    <i class='fab fa-telegram-plane' style='font-size:20px'><a style="font-weight: bold;" href="contactForm.php" class="p-3">CONTACT</a></i>
                                </li>

                                 <li class="nav-item active">
                                     <i  class='fa fa-user-secret' style='font-size:20px'><a href="logout.php" class="p-3" >LOGOUT</a></i>
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
            
            <?php
              error_reporting(0);
              include 'login.php'; 
             $d=0;
              if (is_array($_COOKIE['item'])) {
               $d=$d+1;
             }

             if($d==0)
             {
                echo "No Record Available";
             }

             else{
             ?>
             <thead style="text-align: center;">
              <tr class="cart_menu"  style="background-color: yellow ; font-weight: bold;">
                <td class="image" style="text-align: center;padding: 1%">Item Image</td>
                <td class="description" style="text-align: center;">Product Description</td>
                <td class="price" style="text-align: center;">Product Price</td>
                <td class="quantity">Quantity</td>
                <td class="total" style="text-align: center;">Total Price</td>
                <td class="quantits" style="text-align: center;">Confirm Quantity</td>

              </tr>
            </thead>
            <tbody>

              <?php
                foreach ($_COOKIE['item'] as $name1 => $value) {
          $value11=explode("__", $value);
          ?>
          
           <tr>
                <td class="cart_product" style="width: 25%">
                  <a href=""><img src="<?php echo $value11[0]; ?>" alt="" height="60%" width="100%"></a>
                  
                </td>
                <td class="cart_description" style="width: 15%">
                  <p style="text-align: center; "> <?php echo $value11[1];  ?></p>
                </td>

                <td class="cart_price" style="width: 15%">
                     <p style="text-align: center;"> <?php echo $value11[2];  ?></p>
                </td>
                <td class="cart_quantity"  style="width: 15%">
                   <p style="text-align: center;"> <?php echo $value11[3];  ?></p> 
                </td>

                <td class="cart_total" style="width: 15%">
                    <p style="text-align: center"> <?php echo $value11[4];  ?></p> 
                </td>

                 <td class="cart_quantity" style="width: 15%">
                    <form class="form2" action="Showcart.php" method="POST" enctype="multipart/form-data">
                   <input type="text" name="quan" style="width: 50%;height: 20%;margin-left: 10%">
                   </form>
                </td>

              </tr>


          <?php


        }

              ?>
            
              </tbody>
          </table>

             <?php
               

             }


              ?>
              
            
        </div>
      </div>
    </div>
  </section>

 
                <form class="form-inline" action="Showcart.php" method="POST" style="margin-bottom:10%;padding: 5%">
                  <input type="text" name="names" placeholder="Confirm Name" style="margin-left:30%;height: 5%">
                       <button style="padding: .5%;margin-left:2%;background:#1e7b85;border:2px;border-radius: 5px;color: white" type="submit" name="order">Confirm Order</button>
                        </form>

 
  
                
      

	
	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type ="text/JavaScript"  src="js/jquery.min.js"></script>
<script type ="text/JavaScript" src="js/popper.min.js"></script>
<script type ="text/JavaScript" src="js/bootstrap.min.js"></script>
<script type ="text/JavaScript" src="js/main.js"></script>
</body>
</html>