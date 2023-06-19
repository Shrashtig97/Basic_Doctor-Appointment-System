<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", intial-scale="1.0">

    <title>Doctor World | About</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
    <link rel="stylesheet" href="service.css">
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="blog_timeline.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
</head>

<body class='overflow-x-hidden' style="background-image: url('images/Doctor3.png');">
        <div class="container mx-auto">
            <header>
                <nav class="flex justify-between">
                    <div class=" Logo font-bold flex items-center text-blue">
                        <span style="font-size: 20px;">Doctor World</span>
                        <img src="images/Doctor.png" alt="Doctor" class="Image1" style="height: 80px; width: 80px;">
                    </div>
                    <ul class="navbar flex items-center" >
                        <li><Button class="btn" onClick="location.href='index.php'">Home</Button></li>
                        <li><Button class="btn" onClick="location.href='Service.php'">Services</Button></li>
                        <li><Button class="btn" onClick="location.href='About.php'">About Us</Button></li>
                        <li><Button class="btn" onClick="location.href='Doctors.php'">Doctors</Button></li>
                        <li><Button class="btn" onClick="location.href='contact.php'">Contact us</Button></li>

                        <li><Button class="btn" onClick="location.href='registration.php'">Registration</Button></li>
                        <li><Button class="btn" onClick="location.href='login.php'">Login</Button></li>
                        

                        <?php
                            session_start();
                            if(isset($_SESSION['flag'])) {
                                if($_SESSION['flag'] == 'Login'){
                        ?>
                        
                        <li><Button class="btn" onClick="location.href='Appointment.php'">Book Appointment</Button></li>
                        <li><Button class="btn" onClick="location.href='backend/logout.php'">Logout</Button></li>

                        <?php
                                }
                            }
                        ?>
                    </ul>
               </nav>
            </header>

        <main class="min-h-screen">
            <section>
                <br>
                <h1 class="box2">About Us</h1>
                <br><br>
                <h1 class="head">Our Mission</h1>
                <p class="para" style="text-align: justify;">Dcotor World is on a mission to make quality healthcare affordable and accessible for over a billion+ Indians.We believe in empowering our users with the most accurate, comprehensive, and curated information and care, enabling them to make better healthcare decisions.</p>
                <br><br>
                <p class="para" style="text-align: justify;">Doctor World allow you to book your appointment in just few click. We make this super easy for you. You can now book your appointment from comfort of your home. We provide 24x7 hours booking service and cure your loved often from fatal diseases.</p>
                <img src="images/Doctor5.png" class="imgdoc">
                <br><br>
            </section>
        </main>
    </div>
</body>
</html>