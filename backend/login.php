<?php
    $email = $_POST['email'];
    $password = $_POST['password'] ;

    session_start();
    
    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'doctorapp');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $sql = "SELECT * FROM register WHERE email= '$email' AND password= '$password' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            if (($email == 'admin@gmail.com' ) & ( $password == '1234')) 
            {
                $_SESSION["email"] = $email;
                $_SESSION["flag"] = 'Admin';

                echo ("<script LANGUAGE='JavaScript'>
                 window.alert('You have logged Succesfully.... ');
                   window.location.href='http://localhost/Doctor-Appointment-System/admin/index.php';
                </script>");
                // header("Location: http://localhost/Doctor-Appointment-System/admin/index.php");
                die('Admin login');
            } 
            else {
                $_SESSION["email"] = $email;
                $_SESSION["flag"] = 'Login';

                echo ("<script LANGUAGE='JavaScript'>
                 window.alert('You have logged Succesfully.... ');
                   window.location.href='http://localhost/Doctor-Appointment-System/index.php';
                </script>");
                //header("Location: http://localhost/Doctor-Appointment-System/index.php");
            }
            

           
        } else {
            die('Invalid Email or Password.');
            
        }
    }