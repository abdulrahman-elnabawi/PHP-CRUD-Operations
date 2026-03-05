<?php
$connect = mysqli_connect("localhost","root","","users_db") ;
if(!$connect){
    die("Connect Faild".mysqli_connect_error());
}