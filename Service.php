<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", intial-scale="1.0">

        <title>Doctor World | Service</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="utils.css">
        <link rel="stylesheet" href="service.css">
        <link rel="stylesheet" href="About.css">
        <link rel="stylesheet" href="custom.css">
        <link rel="stylesheet" href="blog_timeline.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="style.css">
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
                    <h1 class="box2">Our Services</h1>
                    <br><br>
                    <h1 class="head">Daily Checkup</h1>
                    <p class="para" style="text-align: justify;">Regular health checks can identify any early signs of health issues.When you have a health check, your doctor will talk with you about your medical history, your family’s history of disease and your lifestyle, including your diet, weight, physical activity, alcohol use and whether you smoke.Your doctor may include a general health check when you visit for another reason.Your doctor can tell you how often you need health checks.</p>
                    <img src="images/Doctor4.png" class="imgdoc">
                    <br><br>
                </section>

                <section class="">
                    <h1 class="head">Pathological Test</h1>
                    <p class="para" style="text-align: justify;">Pathology labs offer end-to-end diagnostic solutions to detect a wide range of diseases and abnormalities.The primary step that enables a doctor to detect a medical condition is by getting relevant blood test or other clinical examinations done. Some of the basic tests that are carried out at almost every diagnostic centre are complete blood count tests and specific tests like complete lipid profile and thyroid profile tests. The presence of these centres at favourable locations in almost every neighbourhood makes it easier for the locals to get pathology tests done. For your ease, a number of laboratories make available pathology services of home sample collection wherein the blood and urine samples are collected from the convenience of your home. Many centres are also equipped to conduct X-rays, sonography, 2D Echo, ECG test and stress test. The accuracy of results provided by these clinical pathology laboratories make them a name to be trusted.You can find all the pathology labs in Indore City, Indore and avail their services when in need.</p>
                </section>

                <section>
                    <br><br>
                    <h1 class="head">Much More...</h1>
                    <p class="para">Health Consultation,Telepathy,Monthly Checkups.</p>
                    <br><br>
                </section>
            </main>
        </div>
    </body>
    </html>