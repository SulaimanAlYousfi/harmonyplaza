<!DOCTYPE html>
<html>
<head>
    <title>Job Aplications php</title>
    <link rel = "stylesheet" type = "text/css" href = "styling.css">
    <style type = "text/css">
            /*Formatting h1 in the page*/
            h1 {
                font-family: 'Times New Roman', Times, serif;
                font-size: 3em;
                font-weight: lighter;
                text-decoration: underline;
                color: #9a7b4f;
                margin-top: 80px;
                text-align: center;
            }

            /*Formatting table styling*/
            th {
                font-family: 'Times New Roman', Times, serif;
                font-size: 1.8em;
                font-weight: lighter;
                color: #9a7b4f;
            }

            div.table {
                overflow-x : auto;
            }

            table {
                width : 200%;
                padding-left : 100px;
                padding-right : 100px;
                padding-bottom : 20px;
            }

            td.info {
                text-align: center;
                font-size: 1.2em;
            }

        </style>
</head>

<body >
    <?php
        //connecting to SQL
        include 'database.php';
    ?>
    <!--Header section which include the top navigation bar menu-->
    <header>

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

    <!--Beginning of the applyjobphp page-->
    <h1> Apply Job Rendering </h1>
    <br/>

    <?php       
    
    //Code for full time job.
        //When button with name "submit_full" is clicked, the following code executes.
        if(isset($_POST['submit_full'])) {
            //Creating variables by getting the values through the name.
            $type = "Full-time";
            $first_name = $_POST["firstName1"];
            $last_name = $_POST["lastName1"];
            $gender = $_POST["gender1"];
            $id_number = $_POST["iD1"];
            $phone_number = $_POST["phone1"];

            //Variable of insert to the table needed.
            $sql = "INSERT INTO `applyjob`(`Type`, `First Name`, `Last Name`, `Gender`, `ID. Number`, `Phone Number`) VALUES ('$type', '$first_name', '$last_name', '$gender', '$id_number', '$phone_number')";
            //Making connection and updating table.
            $rs = mysqli_query($conn, $sql);
        }

        //Code for part time job.
        //When button with name "submit_part" is clicked, the following code executes.
        if(isset($_POST['submit_part'])) {
            //Creating variables by getting the values through the name.
            $type = "Part-time";
            $first_name = $_POST["firstName2"];
            $last_name = $_POST["lastName2"];
            $gender = $_POST["gender2"];
            $id_number = $_POST["iD2"];
            $phone_number = $_POST["phone2"];

            //Variable of insert to the table needed.
            $sql = "INSERT INTO `applyjob`(`Type`, `First Name`, `Last Name`, `Gender`, `ID. Number`, `Phone Number`) VALUES ('$type', '$first_name', '$last_name', '$gender', '$id_number', '$phone_number')";
            //Making connection and updating table.
            $rs = mysqli_query($conn, $sql);
        }
    ?>

    <div style="overflow-x : auto;">
    <table id="table">
        <?php
        //Priting room headers.
        echo"
        <tr>
        <th>Type</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>ID. Number</th>
        <th>Phone Number</th>
        </tr>   ";

        echo "<tr>
                <td class='info'>" . $type."</td>".
                "<td class='info'>" . $first_name."</td>".
                "<td class='info'>" . $last_name."</td>".
                "<td class='info'>" . $gender."</td>".
                "<td class='info'>" . $id_number."</td>".
                "<td class='info'>" . $phone_number."</td>";
            
                //Closing connection.
                mysqli_close($conn);
        ?>
    </table>
    </div>

    </body>
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