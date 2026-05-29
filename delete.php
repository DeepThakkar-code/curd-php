<?php

include("./connection.php");

if(isset($_POST["id"])){
$did = $_POST["id"];
$sql = "delete from scurd where emp_id = $did ";
$result = mysqli_query($con,$sql);

if($result){
    echo " deleted";
}else{
    echo"not deleted";
}   
}
?>