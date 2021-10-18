<html>
<head><title>Your Favorite</title></head>
<body>

 Thanks for your selection 
 <?php
 if(isset($_POST ["username"])){
 	echo $_POST ["username"];
 }
 ?>
<br>
You really enjoy 
<?php 
	echo $_POST ["dish"]; ?>
<br>
 -especially with a nice <?php echo $_POST ["color"]; ?> wine"
  
</body>
</html>