<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
  <script type="text/javascript" src="validation.js"></script>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>

  <body class="login_register">

<div class="form">
  <h1>LOGIN </h1><br>
    <form action="login_submit.php" method="post" name="form2" onsubmit="return validatelogin()">

    <p>EMAIL:</p>
  <input type="email" name="email" class="input" ><br>
    <p>PASSWORD:</p>
  <input type="password" name="password" class="input" ><br>
  <input type="submit" class="button">
  </form>
  <button class="button" onclick="location.href='register_form.php';" ><i class="fas fa-sign-in-alt"></i>REGISTER HERE</buuton>
</div>

  </body>
</html>
