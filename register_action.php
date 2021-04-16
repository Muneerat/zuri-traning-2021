<?php
session_start();


if(isset($_POST['submit'])){
 $full_name = $_POST['full_name'];
 $username  = $_POST['username'];
 $password  = $_POST['password'];
 $array_data=[
     'full_name' => $full_name,
     'username' => $username,
     'password' => $password
 ];
 
 echo $full_name . $username . $password. "Your registration has be been submitted";

 file_put_contents("files/" . $array_data['full_name'] . ".txt", json_encode($array_data));
}

?>