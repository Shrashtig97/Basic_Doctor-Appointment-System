<html> 
<head>
	<title>Doctor World | Registration </title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">
	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
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

	<div class="container content">
		<div class="row " style="margin-bottom: 30px;">
			<div class="col-md-12" style="margin-bottom: 30px;">
				<div class="headline">
					<h1 class="box2">Registration</h1>
				</div>
				<form onsubmit="showMsg(0);return false;" method="post" class="sky-form sky-changes-3" action="backend/register.php" autocomplete="off">
					<fieldset>
						<div class="reg-header text-center">
							<h2>Register a new account</h2>
							<p>Already Signed Up? Click <a href="login.php" class="color-green"><span style="color: rgb(76, 116, 204); font-size: 15px;">Sign In</span></a> to login your account.</p>
						</div>
						<br>
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
									<input type="email" name="email" id="email" required>
								</label>
							</section>

							<section class="col col-6">
								<label class="label">Password</label>
								<label class="input">
									<i class="icon-append fa fa-key"></i>
									<input type="password" name="password" id="password" required>
								</label>
							</section> 

							<section class="col col-6">
								<label class="label">Confirm Password</label>
								<label class="input">
									<i class="icon-append fa fa-key"></i>
									<input type="password" name="cpassword" id="cpassword" required>
								</label>
							</section> 
						</div>
						<footer>
							<button type="submit" class="btn btn-u">Register</button>
						</footer>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>