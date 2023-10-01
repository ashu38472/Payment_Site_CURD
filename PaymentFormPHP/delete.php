<?php
    include 'connect.php';
    if(isset($_GET['did'])){
        $id = $_GET['did'];
        $sql = "delete from user where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:user.php');
        }else{
            echo die(mysqli_error($con));
        } 
    }
?>