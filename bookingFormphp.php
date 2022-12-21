<!DOCTYPE html>
<html>
<head>
    <title> Booking Form php </title>
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

    <!--Beginning of the bookingFormphp page-->
    <h1> Booking Form Rendering </h1>
    <br/>

    <div style="overflow-x : auto;">
    <table id="table">
    <?php 

        if(isset($_POST['submit1'])) {
            $first_name = $_POST["first_name1"];
            $last_name = $_POST["last_name1"];
            $phone_number = $_POST["tel_num1"];
            $email = $_POST["email1"];
            $room_type = $_POST["room_choice"];
            $adults_count = $_POST["num_of_adults"];
            $children_count = $_POST["num_of_children"];
            $check_in = $_POST["check_in_date"];
            $check_out = $_POST["check_out_date"];
            $special_request = $_POST["special_requests1"];

            $sql = "INSERT INTO `bedroom_reservation`(`First Name`, `Last Name`, `Phone Number`, `Email`, `Room Type`, `Number of Adults`, `Number of Children`, `Check-in Date`, `Check-out Date`, `Special Request`) VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$room_type', '$adults_count', '$children_count', '$check_in', '$check_out', '$special_request')";
            $rs = mysqli_query($conn, $sql);

            //Priting room headers.
        echo"
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Room Type</th>
        <th>Number of Adults</th>
        <th>Number of Children</th>
        <th>Check-in Date</th>
        <th>Check-out Date</th>
        <th>Special Request</th>
        </tr>   ";

        echo "<tr>
                <td class='info'>" . $first_name."</td>".
                "<td class='info'>" . $last_name."</td>".
                "<td class='info'>" . $phone_number."</td>".
                "<td class='info'>" . $email."</td>".
                "<td class='info'>" . $room_type."</td>".
                "<td class='info'>" . $adults_count."</td>".
                "<td class='info'>" . $children_count."</td>".
                "<td class='info'>" . $check_in."</td>".
                "<td class='info'>" . $check_out."</td>".
                "<td class='info'>" . $special_request."</td>";
        }

        if(isset($_POST['submit2'])) {
            $first_name = $_POST["first_name2"];
            $last_name = $_POST["last_name2"];
            $phone_number = $_POST["tel_num2"];
            $email = $_POST["email2"];
            $room_type = $_POST["hall_choice"];
            $event = $_POST["event"];
            $other = $_POST["other_event"];
            $date = $_POST["date"];
            $special_request = $_POST["special_requests2"];

            $sql = "INSERT INTO `ballroom_hall_reservation`(`First Name`, `Last Name`, `Phone Number`, `Email`, `Ballroom/Hall Type`, `Event Type`, `Other Type`, `Date of Event`, `Special Request`) VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$room_type', '$event', '$other', '$date', '$special_request')";
            $rs = mysqli_query($conn, $sql);

            //Priting room headers.
        echo"
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Ballroom/Hall Type</th>
        <th>Event Type</th>
        <th>Other Type</th>
        <th>Date of Event</th>
        <th>Special Request</th>
        </tr>   ";

        echo "<tr>
                <td class='info'>" . $first_name."</td>".
                "<td class='info'>" . $last_name."</td>".
                "<td class='info'>" . $phone_number."</td>".
                "<td class='info'>" . $email."</td>".
                "<td class='info'>" . $room_type."</td>".
                "<td class='info'>" . $event."</td>".
                "<td class='info'>" . $other."</td>".
                "<td class='info'>" . $date."</td>".
                "<td class='info'>" . $special_request."</td>"; 
            }

        
            
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