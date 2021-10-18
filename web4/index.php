<?php
     // set cookies 
     setcookie('Auth', 'ok' , time()+3600);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="loggedin.php" method="">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log me in">
    </form>
</body>
</html>