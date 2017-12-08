<?php
session_start();
$name = $_SESSION["a-name"];
$emailadd = $_SESSION["emailaddr"];
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title> Temple of Zeus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js"></script>
  <script src="scripts/active-page.js" type="text/javascript"></script>
</head>
<body>
  <?php include "includes/header-nav.php"; ?>
 <div class="section">
  <h2> Thank you for applying! We will contact you soon!<h2>
  </div>

</body>
