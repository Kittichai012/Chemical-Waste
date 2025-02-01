<?php

session_start();
$open_connect = 1;
require('connect.php');

if(isset($_POST['username_account']) && isset($_POST['email_account']) && isset($_POST['password_account1']) && isset($_POST['password_account2'])){
   $username_account = htmlspecialchars( mysqli_real_escape_string($connect,$_POST['username_account'])); 
   $email_account = htmlspecialchars( mysqli_real_escape_string($connect,$_POST['email_account'])); 
   $password_account1 = htmlspecialchars( mysqli_real_escape_string($connect,$_POST['password_account1'])); 
   $password_account2 = htmlspecialchars( mysqli_real_escape_string($connect,$_POST['password_account2'])); 

   if(empty($username_account)){
    die(header('Location: form-register.php'));
   }elseif(empty($email_account)){
    die(header('Location: form-register.php'));
   }elseif(empty($password_account1)){
    die(header('Location: form-register.php'));
   }elseif(empty($password_account2)){
    die(header('Location: form-register.php'));
   }elseif($password_account1 != $password_account2){
    die(header('Location: form-register.php'));
   }else{
     $query_check_email_account = "SELECT email_account FROM account WHERE email_account = '$email_account'";
     $call_back_query_check_email_account = mysqli_query($connect,$query_check_email_account);
     if(mysqli_num_rows($call_back_query_check_email_account ) > 0){
        die(header('Location: form-register.php'));
     }else{
        $length = random_int(97,128);
        $salt_account = bin2hex(random_bytes($length));
        $password_account1 = $password_account1 . $salt_account;
        $algo = PASSWORD_ARGON2ID;
        $options = [
            'cost' => PASSWORD_ARGON2_DEFAULT_MEMORY_COST,
            'time_cost' => PASSWORD_ARGON2_DEFAULT_TIME_COST,
            'threads' => PASSWORD_ARGON2_DEFAULT_THREADS
        ];
        $password_account = password_hash($password_account1, $algo, $options);
        $query_create_account = "INSERT INTO account VALUE ('','$username_account','$email_account','$password_account','$salt_account','member','','','')";
        $call_back_create_account = mysqli_query($connect, $query_create_account);
        if($call_back_create_accoun){
            die(header('Location: form-login.php'));  
        }else{
            die(header('Location: form-register.php'));
        }
     }
   }

}else{
    die(header('Location: form-register.php'));

}

?>
