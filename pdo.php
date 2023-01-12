<?php
$host = 'localhost';
$username= "root";
$password = '';
$db = 'details';

try{   
$pdo = new pdo('mysql: host=localhost;dbname=details',$username,$password);
 echo '<h2 style ="color : green ;">connection successfully </h2>';
 $lang = 'select * from information';
 $result = $pdo ->query($lang) or die('connection failed : $result ');
 $result -> execute();

 echo '<pre>';
 $l = $result -> fetch(PDO::FETCH_ASSOC);
 print_r($l);





}catch(pdoexception $ex){
    echo 'connection failed '.$ex -> getmessage();
}

?>