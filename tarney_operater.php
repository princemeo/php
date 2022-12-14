<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Greater number program</h1>
    <form method="post">
        <fieldset>
            <legend>Enter your number</legend>
        <label>FIRST : </label>
        <input type="number" name="number1"> <br>
        <label >SECOUND: </label>
        <input type="text" name="number2"><br>
        <label >THIRD :</label>
        <input type="text" name="number3"> <br>
        <input type="submit" name="submit" placeholder="submit">
        <?php
        $num = $_POST ;
        $k = ($num['number1'] > $num['number3']) ? ($num['number1']) : ($num['number3']) ;
        $f = ($num['number2'] > $k) ? ($num['number2']):($k) ;
        echo "<br>" ;
        if ($f){
            echo $f."<b style = 'color:green;'>  greater numbere</b>" ;
        }
        

        ?>
    </fieldset>
    </form>
</body>
</html>