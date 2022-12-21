<!doctype html>
<html>

<head>
  <title>Sign Up</title>
  <link rel="icon" type="image/png" href="Pictures/hpLogo.png">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
  <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="styling.css">

  <style>

    /*Formatting fiedlset*/
    fieldset {
      border: 3px solid #9A784f;
      border-radius: 10px;
      margin: 1em 1em;
      padding: 1em;
      width: fit-content;
    }

    .center {
      display: flex;
      justify-content: center;
      text-align: center;
    }

    .back {
      border: 2px solid #9A784f;
      border-radius: 10px;
      background-color: #bc905a;
      color: white;
      font-size: 20px;
      padding: 10px 17px;
      width: 96.22px;
      text-decoration: none;
    }

    a:hover {
      color: white;
    }

    /*Formatting button*/
    .saveANDclear {
        background-color: #9a7b4f;
        color: white;
        width: 120px;
        height: 40px;
        font-size: 1.3em;
        text-decoration: underline;
        border-color: white;
    }

    .saveANDclear:hover{
        color: black;
    }

    .actions {
        color: #9a7b4f;
        width: 120px;
        height: 40px;
        font-size: 1.3em;
        text-decoration: underline;
        border-color: white;
    }

    .actions:hover{
        color: black;
    }

  </style>
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body>
  <?php
      //connecting to SQL
      include 'database.php';
  ?>
  <header>
    <!--Header section which include the top navigation bar menu-->
    <div id="header">
      <div id="logo-div">
        <a href="index.html"><img id=logo src="Pictures/Logo-No-BG.png"></a>
      </div>
      <nav>
        <div id="menu">
          <ul>
            <li><a href="aboutUs.html">About Us</a></li>
            <li><a href="booking.php">Booking & Reservation</a></li>
            <li><a href="facilities.html">Facilities</a></li>
            <li><a href="staff.html">Staff & Concierge</a></li>
            <li><a href="applyjob.php">Apply for a Job</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
            <li><a href="login.php">Log In</a></li>
          </ul>
        </div>
      </nav>
    </div>

  </header>

  <!--Log In fieldset-->
  <fieldset style="text-align: center; margin: 10% auto;">
    <form method = "POST" action = "signup.php">
      <img class="mb-4" src="Pictures/hpLogo.png" style="width: 50%; height: auto;">
      <h1 class="h3 mb-3 fw-normal" style="font-family: times-new-roman;">ADMINS ONLY!!!</h1>
      <div class="form-floating center">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"
          style="border: 2px solid #9A784f;border-radius: 10px; width: 20rem;margin-bottom: .3em;">
        <label for="floatingInput center" style="text-align: center;">Email address</label>
      </div>
      <div class="form-floating center">
        <input type="text" class="form-control" name="name" placeholder="Text"
          style="border: 2px solid #9A784f;border-radius: 10px; width: 20rem;margin-bottom: .3em;">
        <label style="text-align: center;">Name</label>
      </div>
      <div class="form-floating center">
        <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password"
          style="border: 2px solid #9A784f;border-radius: 10px; width: 20rem;">
        <label for="floatingPassword center" style="text-align: center;">Password</label>
      </div>
      <br>
      <input type = "submit" name="insert" value = "Sing Up" class = "saveANDclear"/>
      <input type = "reset" value = "Clear" class = "saveANDclear"/>
    </form>

    <br/>
    <a href="login.php" class="actions">Back to Login Page</a>

  </fieldset>
</body>
<?php
//When button with name "insert" is clicked, the following code executes.
  if(isset($_POST['insert'])) {
    //Creating variables by getting the values through the name.
      $email = $_POST["email"];
      $name = $_POST["name"];
      $password = $_POST["pass"];

      //Variable of insert to the table needed.
      $sql = "INSERT INTO `login`(`Email`, `Name`, `Password`) VALUES ('$email','$name','$password')";
      //Making connection and updating table.
      $rs = mysqli_query($conn, $sql);
  }

  //Closing connection.
  mysqli_close($conn);
?>

<!--Footer of the page-->
<footer id="footer-box">

  <div id="footer-cont">
    <h3> Harmony Plaza</h3>
    <ul id="social-media">
      <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
      <li><a href="https://www.gmail.com/"><i class="bi bi-envelope"></i></a></li>
      <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
      <li><a href="https://www.whatsapp.com/"><i class="bi bi-whatsapp"></i></a></li>
      <li><a href="https://www.twitter.com/"><i class="bi bi-twitter"></i></a></li>
    </ul>
    <div id="footer">
      <p>copyright &copy;2022 harmonyPlaza. designed by mohammed ali, ali murtadha, and sulaiman khalifa</p>
    </div>
  </div>

</footer>

</html>
