<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", intial-scale="1.0">

        <title>Doctor World | WE ARE HERE TO HEAL YOU </title>

       

        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../utils.css">
        <link rel="stylesheet" href="../service.css">
        <link rel="stylesheet" href="../About.css">
		<link rel="stylesheet" href="../custom.css">
		<link rel="stylesheet" href="../blog_timeline.css">
		<link rel="stylesheet" href="../footer.css">
		<link rel="stylesheet" href="../header.css">
    </head>
    <body class='overflow-x-hidden' style="background-image: url('../images/Doctor3.png');">
        <div class="container mx-auto">
            <header>
                <nav class="flex justify-between">
                    <div class=" Logo font-bold flex items-center text-blue">
                        <span style="font-size: 20px;">Doctor World</span>
                        <img src="../images/Doctor.png" alt="Doctor" class="Image1" style="height: 80px; width: 80px;">
                    </div>
                    <ul class="navbar flex items-center" >
                        <li><Button class="btn" onClick="location.href='index.php'">Home</Button></li>

                        <?php
                            session_start();
                            if(isset($_SESSION['flag'])) {
                                if($_SESSION['flag'] == 'Admin'){
                        ?>
                        
                        <li><Button class="btn" onClick="location.href='AllAppointment.php'">Appointments</Button></li>
                        <li><Button class="btn" onClick="location.href='../backend/logout.php'">Logout</Button></li>

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
                            <img src="../images/OIP.png">
                            <h1 class="my-1">Welcome Admin</h1>
                        </div>
                </section>
                <br>
                <br>  
            </main>
         </div> 
    </body>
    </html>