<?php
try{
    $con = new mysqli('localhost','root','','details') or die('connection failed : $con');
    $sql = 'select *  from information';
    $result = $con->query($sql) or die('connection failed : query');

    /*echo '<pre>';
    $l =  mysqli_fetch_array($result);
    print_r($l);
    echo '</pre>';

    echo '<pre>';
    $l1 = mysqli_fetch_assoc($result);
    print_r($l1);
    echo $l1['name'] ," ". $l1['age'];*/
    echo 'id'.' NAME '.' age '.'   gmail    <br>';
    
    while($row = mysqli_fetch_assoc($result)){
        
        echo $row['id'],"  ",$row['name']."  ",$row['age']."  ",$row['gmail'].'<br>';

    }



}catch(exception $ex){
    echo 'connection error : '.$ex-> getmessage();
}



?>