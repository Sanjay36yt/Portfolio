<?php
// need to improve in next update

function block_page(){
    header("HTTP/1.1 404 Not Found");
    header("Location: ./404.html");
    exit();
}


?>