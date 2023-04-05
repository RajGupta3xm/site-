<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
       
       $username = $_POST['username'];
       $email = $_POST['email'];
       $mobile = $_POST['mobile'];
       $comments = $_POST['comment'];

       $q = "INSERT INTO `userinfodata`( `username`, `email`, `mobile`, `comment`) VALUES ('$username','$email','$mobile','$comments')";
        
       mysqli_query($con,$q);
       header("location:index.php");

    }

?>