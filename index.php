<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <form action="success.php" method="POST">
       Name: <input type="text" name="username" placeholder="Enter your name"><br>
       Password: <input type="password" name="password" placeholder="Enter your password">
        <input type="submit">

    </form>
    
    
        <?php 
            $len=strlen($password);
            if($len<6){
                echo "Password is less than 6";
            }
            
        ?>
   
</body>
</html>