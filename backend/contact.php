<?php
    $name= $_POST['name'];
    $email= $_POST['email'];
    $number= $_POST['number'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'doctorapp');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $contact = $conn->prepare("insert into contact(name, email, number, subject, message) values(?, ?, ?, ?, ?)");
        $contact->bind_param("sssss", $name, $email, $number, $subject, $message);
        $contact->execute();
        echo"your message is send successfully....";
        $contact->close();
        $conn->close();
        echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Your message is send successfully.... ');
                   window.location.href='http://localhost/Doctor-Appointment-System/index.php';
                </script>");
        exit();
    }