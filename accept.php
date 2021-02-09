<?php
    require 'loginsystem/partials/dbconnect.php';
    
    $id = $_GET['id'];
    $query = "select * from `requests` where `id` = '$id' ";

    $result=mysqli_query($con,$query);

    $num=mysqli_num_rows($result);
    if($num > 0){
        while(($fetch=mysqli_fetch_assoc($result))){
            $firstname = $fetch['firstname'];
            $lastname = $fetch['lastname'];
            $username = $fetch['username'];
            $password = $fetch['password'];
            $pack=$fetch['pack'];
            $email=$fetch['email'];
            $code = 0;
           

            $query = "INSERT INTO `accounts` (`firstname`, `lastname`, `username`, `password`, `pack`, `email`,`time`,`code`,`status`) VALUES ('$firstname', '$lastname', '$username', '$password', '$pack', '$email', current_timestamp(),'$code');";
            
            $result=mysqli_query($con,$query);
            if($result){
                echo "Account has been accepted.";
            else{
                echo "Unknown error occured. Please try again.";
            }
        }
        $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id'";
        $result=mysqli_query($con,$query);
        // header("location:home.php");
        echo "<script>window.location.href='home.php'</script>";
        

        
    }else{
        echo "Error occured.";
    }
 
?>
