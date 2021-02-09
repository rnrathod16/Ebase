<?php 
session_start();
require "../loginsystem/partials/dbconnect.php";
$email = "";
$name = "";
$errors = array();


if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM `accounts` WHERE email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE `accounts` SET code = $code WHERE email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if($run_query){
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: rnrathod37@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        $errors['email'] = "This email address does not exist!";
    }
}


if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM `accounts` WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

// if(isset($_POST['check'])){
//     $_SESSION['info'] = "";
//     $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
//     $check_code = "SELECT * FROM `accounts` WHERE code = $otp_code";
//     $code_res = mysqli_query($con, $check_code);
//     if(mysqli_num_rows($code_res) > 0){
//         $fetch_data = mysqli_fetch_assoc($code_res);
//         $fetch_code = $fetch_data['code'];
//         $email = $fetch_data['email'];
//         $code = 0;
//         $status = 'verified';
//         $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
//         $update_res = mysqli_query($con, $update_otp);
//         if($update_res){
//             $_SESSION['name'] = $name;
//             $_SESSION['email'] = $email;
//             header('location: home.php');
//             exit();
//         }else{
//             $errors['otp-error'] = "Failed while updating code!";
//         }
//     }else{
//         $errors['otp-error'] = "You've entered incorrect code!";
//     }
// }

if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        // $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE `accounts` SET code = $code, password = '$password' WHERE email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if($run_query){
            // $info = "Your password changed. Now you can login with your new password.";
            echo '<script>alert("Password Changed Successfully");</script>';
            $_SESSION['info'] = $info;
            echo "<script>window.location.href='../index.php'</script>";
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}
?>