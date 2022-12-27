<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = 'post'>
        <fieldset>
            <legend><h1>swep</h1></legend>
            <label for="num1">Enter</label>
            <input type="text" name='num1'><br>

            <label for="num2">En2er</label>
            <input type="text" name='num2'><br>
            <input type="submit" name='save'><br>
            <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "<h2 style = 'color :green';>first statement ".$num1.' secound'.$num2.'</h2>';
            $swep1 = $num1;
            $num1 = $num2 ;
            $num2 = $swep1 ;
            echo "<h2 style = 'color:red;'>secound statement ".$num1.' secound'.$num2.'</h2>';


            ?>

        </fieldset>
    </form>
</body>
</html>