<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><h1>gretest</h1></legend>
            <label for="number">Number   :</label>
            <input type="text" name='number'><br>
            <label for="number1">Number1 :</label>
            <input type="text" name='number1'><br>
            <label for="number2">Number2 :</label>
            <input type="text" name='number2'><br>
            <input type="submit" name='save'><br>
            <?php
            if(isset($_POST['save'])){
                $num = ($_POST['number'] > $_POST['number2'])? $_POST['number'] : $_POST['number2'] ;
                $result = ($num > $_POST['number1']) ? $num : $_POST['number1'] ;
                echo 'Greater Number is = '.$result ;
            }
            ?>


        </fieldset>
    </form>
</body>
</html>