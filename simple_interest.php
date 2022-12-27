<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <fieldset>
            <legend>SIMPLE IMTEREST</legend>
            <div>
                <label for="amount">Amount : </label>
                <input type="text" name='amount'><br>

                <label for="rate">Rate     :</label>
                <input type="text" name ='rate'><br>

                <label for="year">Year     :</label>
                <input type="year" name='year'><br>

                <input type="submit" name='save'><br>
                <?php
                if (isset($_POST['save'])){
                    $amount = $_POST['amount'];
                    $rate = $_POST['rate'];
                    $year = $_POST['year'];

                    $si = $amount * $rate * $year / 100 ;
                    
                    echo 'Total = '.$si + $amount ;
                    echo '<br>';
                }
                ?>
            </div>
        </fieldset>
    </form>
</body>
</html>