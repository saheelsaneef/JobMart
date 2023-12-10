<?php

$con=new mysqli('localhost','root','','analys');

if($con){
    echo"Connection Succesfull";
}else{
    die("mysqli_error($con)");
}
?>