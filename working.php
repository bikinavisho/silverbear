<?php
$HIDDEN_ERROR_CLASS="hiddenError";
$submit=$_REQUEST["submit"];

if(isset($submit)) {
  /* For the resume upload: (code help found from
  https://www.w3schools.com/php/php_file_upload.asp) */
  $resume=$_REQUEST["resume"];

  $fileTypeValid = true;
  $fileSizeValid = true;
  $upload = true;

  if (isset($_FILES['resume']) && $_FILES['resume']['size'] > 0) {
    $resume_dir = "uploads/";
    $resume_file = $resume_dir . basename($_FILES["resume"]["name"]);
    $upload = false;
    $fileType = pathinfo($resume_file,PATHINFO_EXTENSION);
    $fileTypeValid = false;
    $fileSizeValid = false;

    if ($fileType == "pdf") {
      $fileTypeValid = true;
    }

    if ($_FILES["resume"]["size"] < 20000000) {
      $fileSizeValid = true;
    }

    if ($fileTypeValid && $fileSizeValid) {
      move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_file);
      $upload = true;
    }
  }

  $username=$_REQUEST["app-name"];
  $email=$_REQUEST["app-email"];
  $avail=$_REQUEST["avail"];
  $message=$_REQUEST["app-message"];
  if(!empty($username)){
    $namevalid=true;
  }
  else{
    $namevalid=false;
  }
  if(!empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailvalid=true;
  }
  else{
    $emailvalid=false;
  }
  if(!empty($avail)){
    $availvalid=true;
  }
  else{
    $availvalid=false;
  }
  if(!empty($message)){
    $messagevalid=true;
  }
  else{
    $messagevalid=false;
  }
  $validform=($messagevalid and $availvalid and $emailvalid and $namevalid
  and $upload);
  if($validform){
    session_start();
    $_SESSION["messagesfield"]=$message;
    $_SESSION["namefield"]=$username;
    $_SESSION["emailaddr"]=$email;
    $_SESSION["avail"]=$avail;
    $_SESSION["resume"]=$resume;
    header("Location: submitted-Working.php");
    return;
  }
}
else{
  $namevalid=true;
  $emailvalid=true;
  $availvalid=true;
  $messagevalid=true;
  $fileTypeValid = true;
  $fileSizeValid = true;
  $file_exists = false;
}
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
  <script src="scripts/formValidation-Working.js" type="text/javascript"></script>
</head>
<body>
  <?php include "includes/header-nav.php"; ?>

  <div class="section" id="working-page">
 <!--The Form-->
  <div class="form-section" id="application">
    <h3 class="form-heading">If you would like to work with us:</h3>
    <form id="application-form" name="working-form" action="working.php"
    method="post" enctype="multipart/form-data" novalidate>

    <div class="form-input">
      <label for="app-name">Name:</label>
      <input type="text" id="app-name" name="app-name"
      value="<?php echo(htmlspecialchars($username))?>"required>
      <div class="errorDiv">
        <span id="app-nameError" class="errorContainer
        <?php if($namevalid){echo($HIDDEN_ERROR_CLASS);}?>">
        You must enter a name.
      </span>
    </div>
  </div>

  <div class="form-input">
    <label for="app-email">Email Address:</label>
    <input type="text" id="app-email" name="app-email"
    value="<?php echo(htmlspecialchars($email))?>"required>
    <div class="errorDiv">
      <span id="app-emailError" class="errorContainer
      <?php if($emailvalid){echo($HIDDEN_ERROR_CLASS);}?>">
      You must enter a valid email address.
    </span>
  </div>
</div>

<div>
  <label id="app-message-label" for="app-message">Message:</label>
  <textarea id="app-message" name="app-message"
  required><?php echo(htmlspecialchars($message))?></textarea>
  <div class="errorDiv">
    <span id="app-messError" class="errorContainer
    <?php if($messagevalid){echo($HIDDEN_ERROR_CLASS);}?>">
    You must enter a message.
  </span>
</div>
</div>

<div class="form-input">
  <label id="avail-label" for="avail">
    Our hours are 7:30am to 5:00pm Monday-Friday. <br/>
    Please explain what times you are available to work.
  </label>
  <textarea id="avail" name="avail"
  required><?php echo(htmlspecialchars($avail))?></textarea>
    <div class="errorDiv">
      <span id="availError" class="errorContainer
      <?php if($availvalid){echo($HIDDEN_ERROR_CLASS);}?>">
      Please tell us when you are available.
    </span>
  </div>
</div>

<div class="form-input">
  <label id="resume-label" for="resume">
    Upload your Resume</label>
    <input id="resume" type="file" name="resume">
    <div class="errorDiv">
      <span id="resumeFileTypeError" class="errorContainer
      <?php if($fileTypeValid){echo($HIDDEN_ERROR_CLASS);}?>">
      The file must be a pdf.
    </span>
    <span id="resumeFileSizeError" class="errorContainer
    <?php if($fileSizeValid){echo($HIDDEN_ERROR_CLASS);}?>">
    The file is too large.
  </span>
</div>
</div>

<button type="submit" class="submit form-button" name="submit">Send</button>
</form>
<!--END OF FORM-->
</div>

<img id="statuepic" alt="soup" src="images/statue.jpg">
<!--found at https://ru.pinterest.com/pin/515380751086237916/ -->
</div>

</body>
</html>
