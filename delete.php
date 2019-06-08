<?php

$db = mysqli_connect("localhost", "root", "", "registration");

$id=$_GET["id"];
mysqli_query($db,"DELETE FROM addproduct WHERE pid=$id");
?>

<script type="text/javascript">
	window.location="display.php";
</script>
