<?php
$servername = getenv('DB_HOST') ?: "localhost";
$user = getenv('DB_USER') ?: "root";
$password = getenv('DB_PASS') ?: "";
$dbname = getenv('DB_NAME') ?: "persional";


global $data_base_con;
$data_base_con = new mysqli($servername,$user,$password,$dbname);

// if($data_base_con->connect_error){
//     echo("conne error ".$con->connect_error);

// }
// else{
//     echo "sucess conn";
// }


      

?>