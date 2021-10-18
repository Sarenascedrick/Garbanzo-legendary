<html>
<head><title>Your Favorite</title></head>
<body>

  
 <?php
 if(isset($_POST ["username"])){
 	echo 'Thanks for your selection ' ;
 	 echo $_POST ["username"];
 }
 ?>
<br>

<?php 
echo 'You really enjoy ';
	echo $_POST ["dish"]; ?>
<br>
 <?php 
 echo '-especially with a nice ';
 echo $_POST ["color"]; ?> wine
  
</body>
</html>