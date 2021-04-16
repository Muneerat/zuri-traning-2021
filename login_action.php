<?php
session_start();


 if(isset($_POST['login'])){
    $full_name = $_POST['full_name'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $array_data=[
        'full_name' => $full_name,
        'username' => $username,
        'password' => $password
    ];
    
    echo $full_name. $username . $password;

    $filename = ("files/");
    $_SESSION["name"] = $array_data;
    if(file_exists($array_data['full_name']) === $filename){
        fread($filename);
        echo "register";
    }else{
        echo "Not register";
    }
    if($full_name === $full_name && $username=== $username && $password === $password){
          $_SESSION["full_name"] = $full_name;
          $_SESSION["username"] = $username;
          $_SESSION["password"] = $password;
          
          echo "LogIn";
    }else{
        echo "LogOut";
    }
    
 }
?>
