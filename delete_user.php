<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>