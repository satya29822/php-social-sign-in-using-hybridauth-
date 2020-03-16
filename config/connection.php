<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "u797394643_mint");

$conn= mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE); //mintlime
//$connection = mysqli_connect('localhost','u797394643_/digi','','u797394643_digi'); //digital

//if($connection){
//echo "Connected to Digital";
//}
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 
//if ($connection->connect_error) {
    //die("Connection failed: " . $conn->connect_error);

//} 
 $this_site_id=11; //THIS SITE ID 
 $this_site_url='http://localhost/seller2702/';
 function errlog($error,$sql){
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";     
    $url.= $_SERVER['HTTP_HOST'];    
    $url.= $_SERVER['REQUEST_URI'];   $error_log = fopen("error_log.txt", "a");
    $timestamp = date("Y-m-d h:i");
    $txt = $timestamp." ERROR : [URL:".$url."] ".$error." [SQL:".$sql."]\r\n";
    fwrite($error_log, $txt);
	fclose($error_log);
	echo '<script> location.replace("error.html"); </script>';
}
