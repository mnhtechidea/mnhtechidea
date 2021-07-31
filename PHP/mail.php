<?php
    if(isset($_POST['submit'])){
        $name=$_POST['Fname'];
        $email=$_POST['email'];
        $comment=$_POST['comment'];
        $to="mnhtechidea@gmail.com";
        $subject="Comment from Website";
        $headers="From: ".$email; 
        $message="Name: ".$name."\nEmail: ".$email."\nMessage: ".$comment;
        mail($to,$subject,$message);
        if(mail($to,$subject,$message,$headers)){
            echo "<h1>Sent</h1>";
        }else{
            echo "<h1>Not Sent</h1>";
        }
    }
?>
