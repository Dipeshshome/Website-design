<?php

$db = mysqli_connect("localhost", "root", "", "registration");
?>
<section id="delete">
	<div class="grid_10">
	<div class="box round first">
		<h2>Display Items</h2>
		<div class="block" style="padding: 10%;margin-top: -5%">
			<?php


			$res=mysqli_query($db,"SELECT * FROM addproduct");
			echo "<table border='1'>";
				echo "<tr>";
				echo "<th>"; echo "Product Image"; echo "</th>";	
				echo "<th>"; echo "Product Name"; echo "</th>";
				echo "<th>"; echo "Product Price"; echo "</th>";
				echo "<th>"; echo "Product Details"; echo "</th>";
				echo "<th>";echo "</th>";
				echo "</tr>";
			while ($row=mysqli_fetch_array($res)) {
					echo "<tr>";
					echo "<td>";?> <img src="<?php echo $row["Pimage"];?>" width="200" height= "200" ><?php echo "</td>";
					echo "<td>"; echo $row["Pname"]; echo "</td>";
					echo "<td>"; echo $row["Pprice"]; echo "</td>";
					echo "<td>"; echo $row["Pdetails"]; echo "</td>";

					echo "<td>";?><a href="delete.php?id=<?php echo  $row["pid"];?>">Delete</a><?php echo "</td>";
                      echo "</tr>";
				# code...
			}
			echo "</table>";

			?>
			
		</div>
	</div>
</div>

</section>

