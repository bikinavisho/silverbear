<?php
//we referenced our code for labs for project 3
// Stores the name of the class for hidden error messages
$HIDDEN_ERROR_CLASS = "hiddenError";
$radiovalid=true;
//Get information
$submit=$_REQUEST["submit"];

if (isset($submit)) {
  $feedback = $_POST["rank"];
  error_log("user submitted the form");
  // VALIDATE RADIO FORM
  if(isset($feedback)){
    $radiovalid=true;
  }
  else{
    $radiovalid=false;
  }
  //VALIDATE NAME
  $name=$_REQUEST["name"];
  if (!empty($name)) {
    $nameValid = true;
  } else {
    $nameValid = false;
  }

  // VALIDATE EMAIL
  $email = $_REQUEST["email"];
  if ((!empty($email)) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $emailValid = true;
  } else {
    $emailValid = false;
  }


//VALIDATE the TEXTAREA
 $extra=$_REQUEST["extra"];
 if (!empty($extra) ) {
   $extraValid = true;
 }
 else {
   $extraValid = false;
 }
  // the form is valid if all of the parts are valid.
  $formValid = $nameValid && $emailValid && $extraValid && $radiovalid;

  // if everything is valid, allow submission
  if ($formValid) {
    // create a session to pass all the values to formsubmission page
    session_start();
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['extra']=$extra;
    $_SESSION['rank']=$feedback;


    // redirect to submitted-Contact.php
    header("Location: submitted-Contact.php");
    return;
  }
}

 else {

   //if nothing was submitted yet
  $nameValid=true;
  $emailValid=true;
  $extraValid=true;
}
?>






<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title> Temple of Zeus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <script src="scripts/jquery-3.2.1.min.js"></script>
  <script src="scripts/active-page.js" type="text/javascript"></script>
  <script src="scripts/formValidation-Contact.js" type="text/javascript"></script>
</head>

<body>

  <?php include "includes/header-nav.php"; ?>

  <div class="section" id="contact-info">
    <h2>We would love to hear from you!</h2>
    <p>Please contact us via Facebook or Twitter or come into the
      store and talk to us face-to-face!
    </p>
    <p>
      Facebook:
      <a href="https://www.facebook.com/TempleOfZeusCornell/">
        @TempleOfZeusCornell
      </a>
      <br/>
      Twitter:
      <a href="https://twitter.com/TempleZeus">
        @TempleZeus
      </a>
    </p>

  </div>

<!-- FEEDBACK FORM: -->

  <div class="section" id="feedback">
    <h3 class="form-heading">If you would like to give us feedback:</h3>



    <form name="myform" action="contact.php" method="post" id="myform" novalidate>

      <div class="form-input">
        <label for="name">Name(required):</label>
        <input type="text" id="name" name="name" value= "<?php echo(htmlspecialchars($name));?>" required>
        <div class="errorDiv">
          <span class="errorContainer <?php if($nameValid){ echo($HIDDEN_ERROR_CLASS);}?>" id="nameError">
            You must enter a name.
          </span>
        </div>
      </div>

      <div class="form-input">
        <label for="email">Email(required):</label>
        <input type="email" id="email" name="email" value= "<?php echo(htmlspecialchars($email));?>" required>
        <div class="errorDiv">
          <span class="errorContainer <?php if($emailValid){ echo($HIDDEN_ERROR_CLASS);}?>" id="emailError">
            You must enter a valid email address.
          </span>
        </div>
      </div>

      <div class="form-input">
        <label id="extralabel" for="extra">Message(required):</label>
        <textarea id="extra" name="extra" required><?php echo(htmlspecialchars($extra));?></textarea>
        <div class="errorDiv">
          <span class="errorContainer <?php if($extraValid){ echo($HIDDEN_ERROR_CLASS);}?>" id="extraError">
            You must enter a message.
          </span>
        </div>

      </div>
      <div class="radioform">
        <label id="rankform" for="rank"> Please Rank Your Experience
          (1 = Terrible, 5 = Incredible)</label><br>
        <div id="radio-buttons">
        <input type="radio" id="rank" name="rank" value="1" <?php if($feedback=="1"){echo "checked";}?>>1<br>
        <input type="radio" id="rank" name="rank" value="1" <?php if($feedback=="2"){echo "checked";}?>>2<br>
        <input type="radio" id="rank" name="rank" value="1" <?php if($feedback=="3"){echo "checked";}?>>3<br>
        <input type="radio" id="rank" name="rank" value="1" <?php if($feedback=="4"){echo "checked";}?>>4<br>
        <input type="radio" id="rank" name="rank" value="1" <?php if($feedback=="5"){echo "checked";}?>>5<br>
      </div>
        <div class="errorDiv">
          <span class="errorContainer <?php if($radiovalid){echo($HIDDEN_ERROR_CLASS);}?>" id="radioError">
          You must choose a ranking.
        </span>
        </div>
      </div>


      <button class="submit form-button" type="submit" name="submit">Send</button>
    </form>
  </div>




</body>

</html>
