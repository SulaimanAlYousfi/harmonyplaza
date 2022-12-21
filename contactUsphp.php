<!DOCTYPE html>
<html>
<head>
    <title> Booking Form php</title>
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

    <!--Beginning of the contactUsphp page-->
    <h1> Contac Us Rendering </h1>
    <br/>

    <div style="overflow-x: auto;">
    <table id="table">
        <?php
        //When button with name "Submit" is clicked, the following code executes.
        if(isset($_POST['Submit'])) {
            //Creating variables by getting the values through the name.
            $title = $_POST["Title"];
            $first_name = $_POST["first-name"];
            $last_name = $_POST["last-name"];
            $email = $_POST["Email"];
            $contact_number = $_POST["contact-number"];
            $enquiry = $_POST["Enquiry"];
            $message = $_POST["message"];

            //Variable of insert to the table needed.
            $sql = "INSERT INTO `contact`(`Title`, `First Name`, `Last Name`, `Email`, `Contact Number`, `Enquiry`, `Message`) VALUES ('$title', '$first_name', '$last_name', '$email', '$contact_number', '$enquiry' , '$message')";
            //Making connection and updating table.
            $rs = mysqli_query($conn, $sql);
        }

        //Priting room headers.
        echo"
        <tr>
        <th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Enquiry</th>
        <th>Message</th>
        </tr>   ";

        echo "<tr>
                <td class='info'>" . $title."</td>".
                "<td class='info'>" . $first_name."</td>".
                "<td class='info'>" . $last_name."</td>".
                "<td class='info'>" . $email."</td>".
                "<td class='info'>" . $contact_number."</td>".
                "<td class='info'>" . $enquiry."</td>".
                "<td class='info'>" . $message."</td>";
            
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