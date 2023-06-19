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
	
		<div class="container content-md team-v1">
			<ul class="list-unstyled row">
				<li class="col-sm-3 col-xs-6 " style="margin-bottom: 30px;">
					<div class="team-img">
						<img class="img-responsive" src="assets/img/team/1.jpg" alt="">
					</div>
					<h3>Dr. Harshil Patel</h3>
					<h4>/ Consultant</h4>
					<p>Child care</p>
				</li>

				<li class="col-sm-3 col-xs-6 " style="margin-bottom: 30px;">
					<div class="team-img">
						<img class="img-responsive" src="assets/img/team/2.jpg" alt="">
					</div>
					<h3>Dr. Sahil Achhava</h3>
					<h4>/ MBBS</h4>
					<p>Neurology</p>
				</li>

				<li class="col-sm-3 col-xs-6">
					<div class="team-img">
					<img class="img-responsive" src="assets/img/team/3.jpg" alt="">
					</div>
					<h3>Dr. Dhruv Shah</h3>
					<h4>/ MBBS, MS, DNB</h4>
					<p>General Surgery</p>
				</li>

				<li class="col-sm-3 col-xs-6">
					<div class="team-img">
						<img class="img-responsive" src="assets/img/team/4.jpg" alt="">
					</div>
					<h3>Dr. Vijeta Kumari</h3>
					<h4>/ MBBS</h4>
					<p>Health Checkup</p>
				</li>
			</ul>

			<div class="container content-md team-v1" style="margin-left: -13px;">
			<ul class="list-unstyled row">
				<li class="col-sm-3 col-xs-6 " style="margin-bottom: 30px;">
					<div class="team-img">
						<img class="img-responsive" src="assets/img/team/5.jpg" alt="">
					</div>
					<h3>Dr. Yagnesh Patel</h3>
					<h4>/ MD</h4>
					<p>Dermatology</p>
				</li>

				<li class="col-sm-3 col-xs-6 " style="margin-bottom: 30px;">
					<div class="team-img">
						<img class="img-responsive" src="assets/img/team/6.jpg" alt="">
					</div>
					<h3>Dr. Namita Bhoj</h3>
					<h4>/ MBBS,MS, MD</h4>
					<p>Eye Specialist</p>
				</li>

				<li class="col-sm-3 col-xs-6">
					<div class="team-img">
						<img class="img-responsive" src="assets/img/team/7.jpg" alt="">
					</div>
					<h3>Dr. Jeel Patel</h3>
					<h4>/ MBBS</h4>
					<p>CCU & ICU</p>
				</li>

				<li class="col-sm-3 col-xs-6 " style="margin-bottom: 30px;">
					<div class="team-img">
						<img class="img-responsive" src="assets/img/steam/8.jpg" alt="">
					</div>
					<h3>Dr. Harman</h3>
					<h4>/ MBBS</h4>
					<p>Health Checkup</p>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
