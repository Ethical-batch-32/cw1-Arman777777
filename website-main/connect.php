<?php 
    $firstname = $_post['firstname'];
    $lastname = $_post['lastname'];
    $gemder = $_post['gender'];
    $messege = $_post['message'];
   

   
   $conn = new mysqli('localhost','root','','teat');
   if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
   }else{
   $stmt =$conn->prepare("insert into contact(firstname,lastname,gender,message)
   values(?,?,?,?)");
   $stmt->bind_param("ssss",$firstname,$lastname,$gender,$message);
   $stmt->execute();
   echo "contact successfully...";
   $stmt->close();
   $conn->close();
   {
?>