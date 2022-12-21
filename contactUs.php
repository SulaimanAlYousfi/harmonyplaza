<!DOCTYPE html>
<html>
    <head>

        <!--Title, and linking file to styling.css and bootstraps-->
        <title> Contact Us </title>
        <link rel="icon" type="image/png" href="Pictures/hpLogo.png">
        <link rel="stylesheet" href="styling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <style>
            /*Formatting h1 in the page*/
            h1 {
                font-family: 'Times New Roman', Times, serif;
                font-size: 3em;
                font-weight: lighter;
                text-decoration: underline;
                color: #9a7b4f;
                padding-top: 2em;
                text-align: center;
            }

            /*Formatting the top picture*/
            #main-background{
                width: 100%;
                height: 35em;
                object-fit: cover;
            }

            /*Formatting the forms used in the page*/
            label {
                font-family: 'Times New Roman', Times, serif;
                font-size: 1.3em;
                margin: 4%;
            }

            select {
                width: 18em;
                height: 2em;
            }

            input {
                width: 18em;
                height: 1.4em;
            }

            textarea {
                width: 56em;
            }

            #submit {
                height: 1.5em;
                font-size: large;
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

        <!--Top picture-->
        <img id="main-background" src="Pictures/background2.jpg">

        <!--Header and forms of the page-->
        <div id="contact-us" style="text-align: center; padding: 1% 25%;">
        <h1>Contact Us</h1>
        
        <!--Forms used in the page-->
        <form  method = "POST" action = "contactUsphp.php">
        <label>Title: 
            <select name="Title" id="Title-select">
                <option>Select</option>
                <option>Mr.</option>
                <option>Mrs.</option>
                <option>Ms.</option>
                <option>Dr.</option>
            </select>
        </label> <br> <br>

        <label>First Name:
            <input type="text" name="first-name">
        </label> <br/>
        
        <label>Last Name:
            <input type="text" name="last-name">
        </label> <br> <br>
        
        <label>Email:
            <input type="text" name="Email">
        </label> <br/>

        <label>Contact Number:
            <input type="text" name="contact-number">
        </label><br> <br>

        <label>Enquiry About: 
            <select name="Enquiry" id="Enquiry-select">
                <option>Select Enquiry Type</option>
                <option>Reservation</option>
                <option>Feedback</option>
                <option>Media</option>
                <option>Apply For Job</option>
                <option>Other</option>
            </select>
        </label> <br> <br>

        <label>Message:
            <p>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </p>
        </label>

        <input type="submit" name="Submit" id="submit">
        </form>
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

