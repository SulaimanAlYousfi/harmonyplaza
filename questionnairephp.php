<!DOCTYPE html>
<html>
    <head>

        <!--Title, and linking file to styling.css and bootstraps-->
        <title> Questionnaire </title>
        <link rel="icon" type="image/png" href="Pictures/hpLogo.png">
        <link rel = "stylesheet" type = "text/css" href = "styling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

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

    <body>
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

        <!--Beginning of the questionnairephp page-->
        <h1> Questionnaire Rendering </h1>
        <br/>

        <?php
        //When button with name "Submit" is clicked, the following code executes.
        if(isset($_POST['Submit'])) {
            //Creating variables by getting the values through the name.
            $rating = $_POST["Rating"];
            $favorite = $_POST["Facilities"];
            $recommend = $_POST["Recommend"];
            $stay = $_POST["Stay"];
            $review = $_POST["Review"];
            $name = $_POST["Name"];
            $email = $_POST["Email"];

            //Variable of insert to the table needed.
            $sql = "INSERT INTO `questionnaire`(`Rate`, `Favorite thing`, `Recommend for others`, `Stay again`, `Review`, `Full Name`, `Email`) VALUES ('$rating', '$favorite', '$recommend', '$stay', '$review', '$name' , '$email')";
            //Making connection and updating table.
            $rs = mysqli_query($conn, $sql);
        }
        ?>

        <div style="overflow-x: auto;">
        <table id="table">
        
        <?php
        //Priting room headers.
        echo"
        <tr>
        <th>Rate</th>
        <th>Favorite thing</th>
        <th>Recommend for others</th>
        <th>Stay again</th>
        <th>Review</th>
        <th>Full Name</th>
        <th>Email</th>
        </tr>   ";

        echo "<tr>
                <td class='info'>" . $rating."</td>".
                "<td class='info'>" . $favorite."</td>".
                "<td class='info'>" . $recommend."</td>".
                "<td class='info'>" . $stay."</td>".
                "<td class='info'>" . $review."</td>".
                "<td class='info'>" . $name."</td>".
                "<td class='info'>". $email."</td>";
            
                //Closing connection.
        mysqli_close($conn);
        ?>

        </table>
        </div>

    </body>


    <!--Footer of the page that contains the project's logo, several social media links, and a copyright statement-->
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