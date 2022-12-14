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
            }

            /*Formatting input data forms*/
            input.submitANDclear {
                background-color: #9a7b4f;
                color: white;
                width: 120px;
                height: 40px;
                font-size: 1.3em;
                text-decoration: underline;
                border-color: white;
            }

            input.submitANDclear:hover{
                color: black;
            }

            /*Formatting p and label in the form*/
            p, label {
                font-family: 'Times New Roman', Times, serif;
                font-size: 1.3em;
                margin: 1%;
            }

            /*Formatting textarea in the form*/
            textarea {
                width: 56em;
            }

            /*Formatting span inside both p and label in the form*/
            p span, label span {
                color: red;
            }
        </style>

        <script type="text/javascript">
            //This function validates the name textbox to check if the user have entered any data in it or no.
            function fillName() {
                //using if and else statements to validate whether the name input is empty or no, and displaying the appropriate message
                if (document.getElementById("name").value == "") {
                    alert("You didn't enter a name!\nPlease enter your name");
                    document.getElementById("name").style.borderColor = "red";
                    return false;
                }
                else {
                    document.getElementById("name").style.borderColor = "lime";
                    return true;
                }
            }

            //This function validates the email textbox to check if the user have entered any data in it or no.
            function fillEmail() {
                //using if and else statements to validate whether the email input is empty or no, and displaying the appropriate message
                if (document.getElementById("email").value == "") {
                    alert("You didn't enter an email!\nPlease enter your email");
                    document.getElementById("email").style.borderColor = "red";
                    return false;
                }
                else {
                    document.getElementById("email").style.borderColor = "lime";
                    return true;
                }
            }

            //This function validates the review textarea to check if the user have entered any data in it or no.
            function fillReview() {
                //using if and else statements to validate whether the review input is empty or no, and displaying the appropriate message
                if (document.forms[0].elements["Review"].value == "") {
                    alert("You didn't write a review!\nPlease write your review");
                    document.forms[0].elements["Review"].style.borderColor = "red";
                    return false;
                }
                else {
                    document.forms[0].elements["Review"].style.borderColor = "lime";
                    return true;
                }
            }

            //This function validates the rating radio button to check if the user have selected any rating choice or no.
            function validateRating() {
                //declaring some variables
                var ratings = document.getElementsByName("Rating");
                var rated = false;
                var i = 0;
                //using the while loop to validate if the user has chosen a rating or no
                while (!rated && i < ratings.length) {
                    if (ratings[i].checked) 
                    rated = true;
                    i++;        
                }
                //using if statement to display a message if the user hasn't chosen a rating
                if (!rated) 
                alert("Please select a rating!");
                return rated;
            }

            //This function validates the facilities checkbox to check if the user have selected at least one facilities choice or no.
            function validateFacilities() {
                //declaring some variables
                var facilities = document.getElementsByName("Facilities");
                var chosen = false;
                //using the for loop to validate if the user has selected at least one facilities option.
                for (var i = 0; i < facilities.length; i++) {
                    if (facilities[i].checked) {
                        chosen = true;
                        break;
                    }
                }
                //using if statement to display a message if the user hasn't chosen any facilities he like
                if (!chosen)
                alert("Please choose at least one thing you liked!")
                return chosen;
            }

            //This function validates the recommend radio button to check if the user have selected any recommend choice or no.
            function validateRecommend() {
                //declaring some variables
                var recommend = document.getElementsByName("Recommend");
                var recommended = false;
                var i = 0;
                //using the while loop to validate if the user has chosen a recommend option or no
                while (!recommended && i < recommend.length) {
                    if (recommend[i].checked) 
                    recommended = true;
                    i++;        
                }
                //using if statement to display a message if the user hasn't chosen a recommend option
                if (!recommended) 
                alert("Please choose if you would recommend the hotel to your friends/family!");
                return recommended;
            }

            //This function validates the stay radio button to check if the user have selected any stay choice or no.
            function validateStay() {
                //declaring some variables
                var stay = document.getElementsByName("Stay");
                var stayed = false;
                var i = 0;
                //using the while loop to validate if the user has chosen a stay option or no
                while (!stayed && i < stay.length) {
                    if (stay[i].checked) 
                    stayed = true;
                    i++;        
                }
                //using if statement to display a message if the user hasn't chosen a stay option
                if (!stayed)
                alert("Please choose if you would stay with us again or no!");
                return stayed;
            }

            //This function validates if all the inputs in the form have been filled or no when clicking the submit button.
            function sendData() {
                //using if and else statements to validate if all the functions are true or some of them are false
                if (validateRating() && validateFacilities() && validateRecommend() && validateStay() && fillReview() && fillName() && fillReview())
                return true;
                else
                return false;
            }
        </script>

    </head>

    <body style="text-align:center;">
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

        <!--Beginning of the questionnaire page-->
        <h1> Questionnaire </h1>

        <!--The questionnaire form with javascript validation using onsubmit attribute by calling sendData() function-->
        <form action="questionnairephp.php" method="post" onsubmit="return(sendData())">

            <p> Please rate your stay with us:- <span>*</span></p>
            <label> <input type="radio" id="vp" name="Rating" value="VP"/> Very Poor </label>
            <label> <input type="radio" id="p" name="Rating" value="P"/> Poor </label>
            <label> <input type="radio" id="g" name="Rating" value="G"/> Good </label>
            <label> <input type="radio" id="vg" name="Rating" value="VG"/> Very Good </label>
            <label> <input type="radio" id="e" name="Rating" value="E"/> Excellent </label>
            <br/><br/>

            <p> Choose the things that you most liked:- <span>*</span></p>
            <label> <input type="checkbox" id="room" name="Facilities" value="Room"/> The Room </label>
            <label> <input type="checkbox" id="hall" name="Facilities" value="Hall"/> The Hall </label>
            <label> <input type="checkbox" id="restaurant" name="Facilities" value="Restaurant"/> The Restaurant </label>
            <label> <input type="checkbox" id="spa" name="Facilities" value="Spa"/> The Spa </label>
            <label> <input type="checkbox" id="pool" name="Facilities" value="Pool"/> The Swimming Pool </label>
            <br/><br/>

            <p> Would you recommend our hotel for your friends and family? <span>*</span></p>
            <label> <input type="radio" id="no" name="Recommend" value="No"/> No </label>
            <label> <input type="radio" id="maybe" name="Recommend" value="Maybe"/> Maybe </label>
            <label> <input type="radio" id="yes" name="Recommend" value="Yes"/> Yes </label>
            <br/><br/>

            <p> Would you stay in our hotel again? <span>*</span></p>
            <label> <input type="radio" id="no" name="Stay" value="No"/> No </label>
            <label> <input type="radio" id="maybe" name="Stay" value="Maybe"/> Maybe </label>
            <label> <input type="radio" id="yes" name="Stay" value="Yes"/> Yes </label>
            <br/><br/>

            <!--Validating the review, name, and email using onblur attribute-->
            <p> Please write a review about your stay below:- <span>*</span></p>
            <!--The review calls fillReview() function to validate the input onblur-->
            <textarea rows="5" name="Review" style="border-width:2px;" onblur="fillReview()"></textarea>
            <br/><br/>

            <p> Please provide the following data so that we can contact you:- <span>*</span></p>
            <!--The name calls fillName() function to validate the input onblur-->
            <label> Full Name: <input type="text" id="name" name="Name" style="border-width:2px;" onblur="fillName()"/><span> *</span></label>
            <br/><br/>
            <!--The email calls fillEmail() function to validate the input onblur-->
            <label> Email: <input type="email" id="email" name="Email" style="border-width:2px;" onblur="fillEmail()"/><span> *</span></label>
            <br/><br/><br/><br/>

            <input type="submit" name="Submit" value="Submit" class="submitANDclear"/>
            <input type="reset" value="Clear" class="submitANDclear"/>
        </form>

    </body>
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

        //Closing connection.
        mysqli_close($conn);
    ?>

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