<?php
include'database.php';
?>
<?php
if(isset($_POST['name'])&&isset($_POST['shout'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $shout=mysqli_real_escape_string($con,$_POST['shout']);
    $date=mysqli_real_escape_string($con,$_POST['date']);

    //set timezone
    date_default_timezone_set('Asia/Kolkata');
    $date=date('h:i:s',time());
    $query = "INSERT into shouts (name,shout,date) VALUES ('$name','$shout','$date')";


    if(!mysqli_query($con,$query)){
        echo'Error:'.mysqli_error($con);
    }
    else{
        echo'<li>'.$name.':'.$shout.'['.$date.']';

    }

}
?>
