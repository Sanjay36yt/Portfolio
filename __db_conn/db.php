<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "persional";
// $eamil_val = "sanjay36yt@gmail.com";
// $pass_val = "Sanjay36yt@@";

global $data_base_con;
$data_base_con = new mysqli($servername,$user,$password,$dbname);

// if($data_base_con->connect_error){
//     echo("conne error ".$con->connect_error);

// }
// else{
//     echo "sucess conn";
// }


      

?>