<?php

//connect to sql
$con =mysqli_connect("localhost","root","","jsshoutbox");

if(mysqli_connect_errno()){
    echo"failed to connect".mysqli_connect_error();
}