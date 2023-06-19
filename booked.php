<html> 
<head>
	<title> Doctor World | Doctors </title>

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">
	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	
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

                        <?php
                            // session_start();
                            if(isset($_SESSION['flag'])) {
                                if($_SESSION['flag'] != 'Login'){
                        ?>
                        <li><Button class="btn" onClick="location.href='registration.php'">Registration</Button></li>
                        <?php
                                }
                            }else{
						?>
                        <li><Button class="btn" onClick="location.href='registration.php'">Registration</Button></li>

						<?php

							}
                        ?>


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

	<div class="container content-md team-v1">
		<h1 class="box2">Your Appointments</h1>
		<ul class="list-unstyled row">
		<?php
			$email = $_SESSION["email"];

			$conn = new mysqli('localhost', 'root', '', 'doctorapp');
			if($conn->connect_errno){
				die('Connection Failed : '.$conn->connect_error);
			}else{
				$sql = "SELECT * FROM book_appointment WHERE user_email='$email'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
		?>
		
						<li class="col-sm-6 col-xs-12" style="margin-bottom: 30px; background: #ffff;">
							<h2><span>Name - </span><?php echo $row['name'] ?></h2>
							<hr>
							<h3><span>Email - </span><?php echo $row['email'] ?></h3>
							<hr>
							<h3><span>Phone Number - </span><?php echo $row['number'] ?></h3>
							<hr>
							<h3><span>Purpose - </span><?php echo $row['purpose_of_message'] ?></h3>
							<hr>
							<h3><span>Department - </span><?php echo $row['department'] ?></h3>
							<hr>
							<h3><span>Date - </span><?php echo $row['date'] ?></h3>
							<hr>
							<h3><span>Time - </span><?php echo $row['time'] ?></h3>
						</li>
		<?php
					}
				}
			}
		?>	
		</ul>
	</div>
</body>
</html>
