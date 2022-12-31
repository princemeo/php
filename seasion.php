<?php
session_start();
$_SESSION['name'] = 'prince';
$_SESSION['password'] ='12345678';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        echo 'hello good moring = '.$_SESSION['name'];
        echo '<br>';
        echo 'this is your password = '.$_SESSION['password'];
        #how to session close
        echo '<br>' ;
        $_SESSION = [];
        echo $_SESSION['name'];
        ?>
    </div>
</body>
</html>