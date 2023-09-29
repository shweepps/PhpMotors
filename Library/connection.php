<?php
/*
*Proxy connection to the phpmotor database 
pass EvD-CLSz(5uA!sjI
*/

function phpmotorsConnec(){


$server = 'localhost';
$dbname = 'phpmotors';
$username = 'iClient';
$password ='EvD-CLSz(5uA!sjI';
$dsn ='mysql:host='.$server;'dbname=' .$dbname;
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try{
    $link = new PDO($dsn, $username, $password, $option);
    if (is_object($link)){
        echo "it works";
    }
}catch (PDOexception $e){
    echo " failed connection " . $e ->getMessage();
}

}
phpmotorsConnec();
?>
