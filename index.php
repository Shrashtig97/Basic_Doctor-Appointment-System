<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", intial-scale="1.0">

        <title>Doctor World | WE ARE HERE TO HEAL YOU </title>

       

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

            <main class="min-h-screen" >
                <section>
                    <div class="flex">
                        <div class="topleft flex items-center flex-col px-2">
                            <img src="images/OIP.png">
                            <h1 class="my-1">The best doctor appointment website on the google is here</h1>
                            <p  class="FontClass">
                                Welcome To the home page we are here to cure you from any disease.
                                Book your appointment any time from anywhere in just few click . 
                                It was that easy.
                            </p> 
                        </div>
                </section>
                <br>
                <br>
                <section>
                    <h1 class="text-centre" my-2>About Us</h1>
                    <p class="text-main">Quickly book your appointment any time anywhere whenever required.  </p>
                    <div class="boxes flex">
                        <div class="box">
                            <h2>Services</h2> 
                            <ul>
                                <li>Book your appointment</li>
                                <li>Regular Checkup</li>
                                <li>Pathological Tests</li>
                                <li>Multi-Specaility Services</li>
                                <li>Diseases Diagnosis & Cure</li>
                            </ul>
                        </div>
                        <div class="box">
                            <h2>Features</h2> 
                            <ul>
                                <li>Best & Tursted Doctor</li>
                                <li>Help 24X7</li>
                                <li>Minimal Charges</li>
                                <li>Best Care For Patients</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <br>
                <br>
                <section>
                    <div class="box1">
                        <h2>Doctor World</h2>
                        <br>
                         <img class="image3" src="images/Doctor2.png">
                        <br>
                        <h2 class"text-centre">
                            <p>Copyright © 2022, Doctor World</p>
                            <p>All rights reserved</p>
                        </h2>
                        <br>
                        <h2 class="text-centre">Made By Lavish Sheth & Shrashti Gupta</h2>
                        <br>
                        <br>
                    </div>
                </section>
            </main>
         </div> 
    </body>
    </html>