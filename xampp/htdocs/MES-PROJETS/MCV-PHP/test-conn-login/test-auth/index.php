

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<?php

if (isset($result)) {
    echo $result;
}
else {
    header('index.php');
}


?>

    <form method="post" action="login.php">
        
        <label for="">Username</label>
        <input type="text" name="usr" >

        <label for="">Password</label>
        <input type="password" name="psw" >   

        <input type="submit" value="Connection">
    
    </form>

    

</body>
</html>