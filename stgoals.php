<?php
include_once('connection.php');

$query="select * from stgoals ";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
    MyFriend.com
  </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
<!--===============================================================================================-->
</head>
<body class="index-page sidebar-collapse">
	<nav class="navbar navbar-expand-lg fixed-top bg-info " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="home1.html" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
          MyFriend
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a href="home1.html" target="_blank" class="nav-link"> Home</a>
          </li>
          <li class="nav-item">
            <a href="logout.html" target="_blank" class="nav-link"> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	<div class="main">
	<!--<div class="limiter">-->
		<div class="section section-buttons text-center">
      <div class="container">
        <div class="title">
          <h1><strong>Goals</strong></h1>
          <h3><strong>View your Short-term Goals here</strong></h3>
          <br>
          <a href="ltgoals.php" class="btn btn-twitter-bg btn-lg twitter-sharrre " rel="tooltip">
              View Long-Term Goals
            </a>
        </div>
    	</div>
    	
        <
	</div>

		
			<!--<div class="wrap-table100">-->
				
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1 text-center">ID</th>
						    <th class="column2 text-center">Goals</th>
								<th class="column3 text-center">Username</th>
								
							</tr>
						</thead>
						
					<?php
	while($rows=mysqli_fetch_assoc($result)){
	?>
	<div style="font-weight: bold">
		<tr>
			<td class="column1 text-center" style="font-weight:bold"><?php echo $rows['id'];  ?> </td>
			<td class="column2 text-center" style="font-weight:bold"><?php echo $rows['goal']; ?> </td>
			<td class="column3 text-center" style="font-weight:bold"><?php echo $rows['username']; ?> </td>
		</tr>
	</div>
	<?php
	}
	?>	
	</table>
  <div class="row justify-content-md-center sharing-area text-center">
          
          <div class="text-center col-md-12 col-lg-8">
            <a href="home1.html" class="btn btn-twitter-bg btn-lg twitter-sharrre btn-round" rel="tooltip" title="Tweet!">
              Back
            </a>
            <a href="addstgoals.php" class="btn btn-twitter-bg btn-lg twitter-sharrre btn-round" rel="tooltip" title="Tweet!">
              Add a goal
            </a>
            
          </div>
        </div>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>