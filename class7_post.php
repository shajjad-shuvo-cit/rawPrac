<?php
    // print_r($_POST);

    //database part;
    $db_host_name = "localhost";
    $db_user_name = "root";
    $db_password = "";
    $db_name = "raw_prac";

    //db connect;
    $db_connect = mysqli_connect($db_host_name,$db_user_name,$db_password,$db_name);

    //get data from html form;
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    //to insert data into database;

    //1.1 insert query
    $sql_query = "INSERT INTO users(user_name,email,phone,password) VALUES('$user_name','$email','$phone','$password')";

    // $sql_query = "INSERT INTO users(user_name,email,phone,password) VALUES('shajjad','shajjad@yahoo.com','012345678910','abc')";

    //1.2 to insert in to db
    mysqli_query($db_connect,$sql_query);
?>