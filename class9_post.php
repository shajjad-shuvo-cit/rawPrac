<?php
    session_start();
     //print_r($_POST);

    //dbinfo;

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "raw_prac";

    //db connect;
    $db_connect = mysqli_connect($db_host,$db_user,$db_password,$db_name);

    //get data from html form;
    // $user_name = $_POST['user_name'];
    // echo "<br>";
    // echo "<br>";
    
    $user_name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
   
    
    
    $after_sanitize_email =  filter_var($email, FILTER_SANITIZE_EMAIL);
    
    // echo $email =  filter_var($email, FILTER_SANITIZE_STRING);
    // echo "<br>";
    if(filter_var($after_sanitize_email, FILTER_VALIDATE_EMAIL)){
        $pass_cap = preg_match('@[A-Z]@',$password);
        $pass_small = preg_match('@[a-z]@',$password);
        $pass_num = preg_match('@[0-9]@',$password);
        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        $pass_char = preg_match($pattern,$password);
    
        if(strlen($password) >= 6 && $pass_cap == 1 && $pass_small == 1 && $pass_num == 1 && $pass_char == 1){
            $encripted_password = md5($password);

            $checking_sql = "SELECT COUNT(*) AS total_users FROM users WHERE email='$after_sanitize_email'";

            $db_reuslt = mysqli_query($db_connect,$checking_sql);
            $after_assoc= mysqli_fetch_assoc($db_reuslt);
    
            if($after_assoc["total_users"] == 0){
                $insert_sql = "INSERT INTO users(user_name,email,phone,password) VALUES('$user_name ','$after_sanitize_email','$phone','$encripted_password')";

                mysqli_query($db_connect,$insert_sql);

                $_SESSION['success_msg'] = "registe done ! Now u can log in";

                header('location: class_9.php');
            }else{
                $_SESSION['err_msg'] = "already registered !";
                header('location: class_9.php');
            }
            
            
        }else{
            $_SESSION['err_msg'] = "password must be at least 6 chars and must have a Capital Case,Small case,Number and Special Chars";
            header('location: class_9.php');
        }
    }else{
        $_SESSION['err_msg'] = "invalid email";
        header('location: class_9.php');
    }
    

  
    
    

    
    
?>