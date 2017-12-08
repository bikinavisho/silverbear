<?php
	session_start();
	$name=$_SESSION['name'];


	$email=$_SESSION['email'];
	$extra=$_SESSION['extra'];

  unset($_SESSION['name']);
	unset($_SESSION['email']);
	unset($_SESSION['extra']);
?>




<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>Temple of Zeus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <script src="scripts/jquery-3.2.1.min.js"></script>
</head>

<body>

  <?php include "includes/header-nav.php";?>

<div class="section">
 <h2> Thank you for your feedback! </h2>
  <p> Please make sure that the following information is correct: <br/>

  <div id="echo_info">
    Your name: <?php echo(htmlspecialchars($name) );?>        <br/>
    Your email: <?php echo(htmlspecialchars($email) );?>   <br/>
  	Additional comments: <?php echo(htmlspecialchars($extra) );?>
  </div>
  </p>

</div>






  </body>

  </html>
