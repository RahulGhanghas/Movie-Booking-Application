<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Book Tickets</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Book Ticket</a></li>
        <li  class="tab active"><a style="background-color: #c3cc00 !important" href="../index.html">Cancel</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Book Your Show</h1>

          <form action="registration.php" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="firstname" id="first_name"/>
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lastname" id="last_name"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Number of tickets<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="tickets"/>
          </div>

          <div class="field-wrap">
            <label>
              Phone number<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="phone"/>
          </div>

          <button type="submit" class="button button-block"/>Register</button>

          </form>

        </div>


          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<?php session_start();
$_SESSION['secure']=rand(1000,999);
if(isset($_POST['Submit'])){
// code for check server side validation
if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.
}else{// Captcha verification is Correct. Final Code Execute here!
$msg="<span style='color:green'>The Validation code has been matched.</span>";
}
}
?>
  
  <form action="" method="post" name="form1" id="form1" >
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="‪C:\xampp\htdocs\moviebookingsystem\image.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" onclick="return validate();" value="Submit" class="button1"></td>
    </tr>
  </table>
</form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

  </body>
</html>
