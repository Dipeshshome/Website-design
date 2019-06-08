
<!DOCTYPE html>
<html>
<html lang="en">

<head>
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
  //error_reporting(0);

$msg = "";
if (isset($_POST["submit1"])) {
        $v1=rand(1111,9999);
         $v2=rand(1111,9999);
         $v3=$v1.$v2;
         $v3=md5($v3);
   
     	$fnm=$_FILES["pimage"]["name"];	
     	
     	$dst="product_image/".$v3.basename($fnm);
        move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

    $sql2="INSERT INTO addproduct (pid,Pname,Pprice,Pquantity,Pimage,Pcatagory,Pdetails,showstatus) VALUES('','$_POST[pnm]','$_POST[pprice]','$_POST[pqty]','$dst','$_POST[pcatagory]','$_POST[pdescription]','$_POST[showstatus]')";


     	//$sql2="INSERT INTO pr (Img_Dir) VALUES('$fnm')";
     	
 

     	if(mysqli_query($conn, $sql2)){
  		$msg = "Image uploaded successfully";
  	     }
  	     else{
  		$msg = "Failed to upload image";
  	     }
     }


if (isset($_POST["submitcat"])) {
        $v4=rand(1111,9999);
         $v5=rand(1111,9999);
         $v6=$v4.$v5;
         $v6=md5($v6);
   
     	$fnm2=$_FILES["cimage"]["name"];	
     	$fnm3=$_FILES["cicon"]["name"];	
     	
     	$dst2="product_image/".$v6.basename($fnm2);
     	$dst3="images/".basename($fnm3);
        move_uploaded_file($_FILES["cimage"]["tmp_name"],$dst2);
      

   $sql="INSERT INTO catagorytable (pid,Cname,Cicon,Cimage) VALUES('','$_POST[name]','$dst3','$dst2' )";
      

     	if(mysqli_query($conn, $sql)){
  		$msg = "Image uploaded successfully";
  	     }
  	     else{
  		$msg = "Failed to upload image";
  	     }
     }

 ?>

   

	<title>Add Product</title>

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
                                     <i  class='fa fa-user-secret' style='font-size:20px'><a href="adminForm.php" class="p-3" >ADMIN</a></i>
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

      <div class="container">
      	<div class="row" style="margin-top: 2%">
      		<div class="col-md-6">
      			 <div class="grid_10">
	 	<div class="box round first">
	 			<h5 style="text-align: center;padding: 1%;background:black;color: white">ADD CATEGORY</h5>
	 		<?php echo $msg;?>
	 		<div class="block">
	 			<form name="form" action="addproduct.php" method="POST" enctype="multipart/form-data">
	 				<table>
	 					<tr>
	 						<td>Catagory Name</td>
	 					  <td style="padding: 2%"><input type="text" name="name"></td>
	 					</tr>
	 					<tr>
	 						<td>Catagory Icon</td>
	 						<td style="padding: 2%"><input type="file" name="cicon"></td> 
	 					</tr>
	 					
	 					
	 					<tr>
	 						<td>Catagory Image</td>
	 						<td style="padding: 2%"><input type="file" name="cimage"></td> 
	 					</tr>
	 					
	 					<tr>
	 						<td colspan="2" align="center"><input type="submit" name="submitcat" value="upload"></td>
	 					</tr>

	 					

	 				</table>


	 			</form>
	 			
	 		</div>
	 	</div>
	 </div>
      			
      		</div>

      		<div class="col-md-6">
      			 <div class="grid_10">
	 	<div class="box round first">
	 		<h5 style="text-align: center;padding: 1%;background:black;color: white">ADD PRODUCT</h5>
	 		<?php echo $msg;?>
	 		<div class="block" >
	 			<form name="form1" action="addproduct.php" method="POST" enctype="multipart/form-data" >
	 				<table style="margin-bottom: 5%">
	 					<tr>
	 						<td>Product Name</td>
	 						<td style="padding: 2%"><input type="text" name="pnm"></td> 
	 					</tr>
	 					<tr>
	 						<td>Product Price</td>
	 						<td style="padding: 2%"><input type="text" name="pprice"></td> 
	 					</tr>
	 					<tr>
	 						<td>Product quantity</td>
	 						<td style="padding: 2%"><input type="text" name="pqty"></td> 
	 					</tr>
	 					<tr>
	 						<td>Product Image</td>
	 						<td style="padding: 2%"><input type="file" name="pimage"></td> 
	 					</tr>
	 					<tr>
	 						<td>Product Catagory</td> 
	 						<td style="padding: 2%">

	 						<select name="pcatagory">

	 							<?php
                 $res=mysqli_query($conn,"SELECT  *  FROM  catagorytable");
                 while ($row=mysqli_fetch_array($res)) {
                 ?>
	 							<option value="<?php echo $row["pid"];?>"><?php echo $row["Cname"];?></option>
	 							                   
              <?php
             }

             ?> 
	 							
	 						</select>
	 						</td>
	 					</tr>
	 					<tr>
	 						<td>Product Description</td>
	 						<td style="padding: 2%"><textarea cols="20" rows="4" name="pdescription"></textarea></td>
	 					</tr>
	 					<tr>
	 						<td>Catagory Show</td>
	 						<td style="padding: 2%"><input type="text" name="showstatus"></td> 
	 					</tr>
	 					<tr >
	 						<td colspan="2" align="center" ><input type="submit" name="submit1" value="upload"></td>
	 					</tr>
	 				</table>


	 			</form>
	 			
	 		</div>
	 	</div>
	 </div>

      			
      		</div>

      	</div>
      </div>


     



	






   
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type ="text/JavaScript"  src="js/jquery.min.js"></script>
<script type ="text/JavaScript" src="js/popper.min.js"></script>
<script type ="text/JavaScript" src="js/bootstrap.min.js"></script>

</body>
</html>