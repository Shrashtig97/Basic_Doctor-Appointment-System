<html> 
<head>
	<title> Doctor World | Doctors </title>

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
	<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/header.css">
	<link rel="stylesheet" href="../assets/css/footer.css">
	<link rel="stylesheet" href="../assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="../assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/custom.css">
	
	<link rel="stylesheet" ref="../style.css">
	<link rel="stylesheet" href="../utils.css">
	<link rel="stylesheet" href="../service.css">
	<link rel="stylesheet" href="../About.css">
	<link rel="stylesheet" href="../custom.css">
	<link rel="stylesheet" href="../blog_timeline.css">
	<link rel="stylesheet" href="../footer.css">
	<link rel="stylesheet" href="../header.css">
	<link rel="stylesheet" href="../style.css">
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


	<div class="container content-md team-v1">
		<h1 class="box2">All Appointments</h1>
		<ul class="list-unstyled row">
		<?php
			$email = $_SESSION["email"];

			$conn = new mysqli('localhost', 'root', '', 'doctorapp');
			if($conn->connect_errno){
				die('Connection Failed : '.$conn->connect_error);
			}else{
				$sql = "SELECT * FROM book_appointment ";
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
							<!-- Update code -->
							<!-- <form onsubmit="showMsg(0);return false;" method="post"  action="../backend/admin/update.php" autocomplete="off"> 
								 <input type="hidden" name=update  id="update" value="<?php echo $row['id'] ?>">	 
								<button type="submit" class="btn btn-n">Update</button>
							</form>  -->

							<!-- Delete code -->
							<form onsubmit="showMsg(0);return false;" method="post"  action="../backend/admin/delete.php" autocomplete="off">
								<input type="hidden" name=delete  id="delete" value="<?php echo $row['id'] ?>">	
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</li>

		<?php
					}
				}else{
					echo '<h3 class="text-center"> No Appointment here! </h3>' ;
				}
			}
		?>	
		</ul>
	</div>
</body>
</html>
