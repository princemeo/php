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
                <label for="da">Basic Salary         : </label>
                <input type="text" name='da'><br>

                <label for="pf">Provident Fund       :</label>
                <input type="text" name ='pf'><br>

                <label for="hra">House Rent Allowance :</label>
                <input type="text" name='hra'><br>

                <input type="submit" name='save'><br>
                <?php
                if (isset($_POST['save'])){
                    $da = $_POST['da'];
                    $hra = $_POST['hra'];
                    $pf = $_POST['pf'];

                    $groos_salary = $da + $hra + $pf ; 
                    echo "<h1 style ='color: red ; margin:auto;' >Gross Salary = ",$groos_salary,'</h1>' ;
                }
                ?>
            </div>
        </fieldset>
    </form>
</body>
</html>