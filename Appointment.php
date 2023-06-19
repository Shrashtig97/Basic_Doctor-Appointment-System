<html> 
<head>
	<title>Doctor World | Appointment</title>
	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<!-- CSS Customization -->
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

	<div class="row " style="margin-bottom: 30px;">
		<div class="col-md-12" style="margin-bottom: 30px;">
			<div class="headline">
				<h1 class="box2">Book Appointment</h1>
			</div>
			<Button class="btn" onClick="location.href='booked.php'">Show Appointment</Button>
			<br><br>
			<form onsubmit="showMsg(0);return false;" method="post" class="sky-form sky-changes-3" autocomplete="off" action="backend/appointment.php">
				<fieldset>
					<div class="row">
						<section class="col col-6">
							<label class="label">Name</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" id="name" required>
							</label>
						</section>

						<section class="col col-6">
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" id="email" required="">
							</label>
						</section>

						<section class="col col-6">
							<label class="label">Mobile Number</label>
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
								<input type="number" name="number" id="number" required="">
							</label>
						</section> 

						<section class="col col-6">
							<label class="label">Purpose Of Appointment</label>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
								<input type="text" name="purpose_of_message" required>
							</label>
						</section>

						<section class="col col-6">
							<label class="label">Department</label>
							<label class="select">
								<select name="department" required>
									<option selected disabled>Select Department</option>
									<option value="Cardiology">Cardiology</option>
									<option value="Dermatology and Cosmetology">Dermatology and Cosmetology</option>
									<option value="General Surgery">General Surgery</option>
									<option value="Health Checkup Packages">Health Checkup Packages</option>
									<option value="Neurology">Neurology</option>
								</select>
							</label>
						</section>

						<section class="col col-6">
							<label class="label">Select Date</label>
							<label class="input">
								<i class="icon-append fa fa-calendar"></i>
								<input type="date" name="date" id="date" required="">
							</label>
						</section>

						<section class="col col-6">
							<label class="label">Select Time</label>
							<label class="select">
								<select name="time" required>
									<option selected disabled>Select Time</option>
									<option value="8 AM-10 AM">8 AM-10 AM</option>
									<option value="10 AM-12 PM">10 AM-12 PM</option>
									<option value="12 PM-2 PM">12 PM-2 PM</option>
									<option value="2 PM-4 PM">2 PM-4 PM</option>
									<option value="4 PM-6 PM">4 PM-6 PM</option>
									<option value="6 PM-8 PM">6 PM-8 PM</option>
									<option value="8 PM-10 PM">8 PM-10 PM</option>
								</select>
							</label>
						</section>
					</div>
				
					<!-- <div class="alert alert-success successBox">
						<button type="button" class="close" onclick="showMsg(1);">×</button>
						<strong style="font-size: 16px;">Congratulations!</strong><span class="alert-link"> Your Appointment has been booked successfully.</span>
					</div> -->
				</fieldset>

				<footer>
					<button type="submit" class="btn btn-u">Book Appointment</button>
				</footer>
			</form>
		</div>
	</div>

	<!-- Java scripts -->
	<!-- <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">
		function showMsg(flag){
		if(flag==0){
		$('.successBox').css('display', 'block');
		}else{
		$('.successBox').css('display', 'none');
		}
		}
	</script> -->

</body>
</html>
