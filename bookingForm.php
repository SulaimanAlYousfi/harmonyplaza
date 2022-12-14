<!DOCTYPE html>
<html>
    <head>

        <!--Title, and linking file to styling.css and bootstraps-->
        <title> Booking Form </title>
        <link rel="icon" type="image/png" href="Pictures/hpLogo.png">
        <link rel="stylesheet" href="styling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <style type = "text/css">
            /*Formatting h1 in the page*/
            h1 {
                font-family: 'Times New Roman', Times, serif;
                font-size: 3em;
                font-weight: lighter;
                text-decoration: underline;
                color: #9a7b4f;
            }

            /*Formatting h2 in the page*/
            h2 {
                font-family: 'Times New Roman', Times, serif;
                font-size: 2em;
                font-weight: lighter;
                color: #9a7b4f;
            }

            /*Formatting h3 in the page*/
            h3.note {
                font-family: 'Times New Roman', Times, serif;
                font-size: 1.5em;
                font-weight: lighter;
                color: #9a7b4f;
                text-decoration: underline;
            }

            /*Formatting input data forms*/
            input.saveANDclear {
                background-color: #9a7b4f;
                color: white;
                width: 120px;
                height: 40px;
                font-size: 1.3em;
                text-decoration: underline;
                border-color: white;
            }

            input.saveANDclear:hover{
                color: black;
            }

            label {
                font-family: 'Times New Roman', Times, serif;
                font-size: 1.3em;
                margin: 1%;
            }

            select {
                width: 9em;
                height: 2em;
            }

            textarea {
                width: 56em;
            }

            input.date {
                width: 12em;
                height: 1.4em;
                font-size: 0.9em;
            }


        </style>

    </head>

    <body style = "text-align : center;">
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

        <br/>


        <h3 class = "note"> (Note: All payments are done in the hotel itself. No pre-payments are needed.) </h3>
        <hr/><br/><br/>

        <h1 id = "roomBooking"> Reserve a Room </h1>

        <hr/>

        <!--Forms of the page for room booking-->
        <form method = "post" action = "bookingFormphp.php">

            <h2> Customer's Details </h2>
            <label> First Name: <input type = "text" name = "first_name1"/> </label>
            <label> Last Name: <input type = "text" name = "last_name1"/> </label>
            <br/><br/>
            <label> Phone Number: <input type = "tel" name = "tel_num1"/> </label>
            <label> Email: <input type = "email" name = "email1"/> </label>

            <br/><br/><hr/>

            <h2> Reservation Details </h2>
            <label> Prefered Room: <input type = "radio" id = "sob" name = "room_choice" value = "SOB"/> Standard One Bedroom </label>
            <label> <input type = "radio" id = "pob" name = "room_choice" value = "POB"/> Premium One Bedroom </label>
            <label> <input type = "radio" id = "sdb" name = "room_choice" value = "SDB"/> Standard Double Bedroom </label>
            <label> <input type = "radio" id = "pdb" name = "room_choice" value = "PDB"/> Premium Double Bedroom </label>
            <label> <input type = "radio" id = "dtb" name = "room_choice" value = "DTB"/> Deluxe Triple Bedroom </label>

            <br/><br/>

            <label> Number of Adults: </label>
            <select name = "num_of_adults">
                <option> 1 </option>
                <option> 2 </option>
                <option> 3 </option>
                <option> 4 </option>
                <option> 5 </option>
                <option> 6 </option>
                <option> 7 </option>
                <option> 8 </option>
            </select>

            <label> Number of Children: </label>
            <select name = "num_of_children">
                <option> 1 </option>
                <option> 2 </option>
                <option> 3 </option>
                <option> 4 </option>
                <option> 5 </option>
                <option> 6 </option>
                <option> 7 </option>
                <option> 8 </option>
            </select>

            <br/><br/>

            <label > Check-in Date: <input type = "date" class = "date" name = "check_in_date"/> </label>
            <label> Check-out Date: <input type = "date" class = "date" name = "check_out_date"/> </label>
            
            <br/><br/>

            <label> Special Requests:- </label>
            <br/>
            <textarea rows = "5" name = "special_requests1"> </textarea>

            <br/><br/><br/>

            <input type = "submit" name="submit1" value = "Save" class = "saveANDclear"/>
            <input type = "reset" value = "Clear" class = "saveANDclear"/>

        </form>

        <hr/><br/><br/><br/>

        <h1 id = "hallBooking"> Reserve a Ballroom/Hall </h1>

        <hr/>

        <!--Forms of the page for room hall booking-->
        <form method = "post" action = "bookingFormphp.php">

            <h2> Customer's Details </h2>
            <label> First Name: <input type = "text" name = "first_name2"/> </label>
            <label> Last Name: <input type = "text" name = "last_name2"/> </label>
            <br/><br/>
            <label> Phone Number: <input type = "tel" name = "tel_num2"/> </label>
            <label> Email: <input type = "email" name = "email2"/> </label>

            <br/><br/><hr/>

            <h2> Reservation Details </h2>
            <label> Prefered Ballroom/Hall: <input type = "radio" id = "b1" name = "hall_choice" value = "B1"/> Ballroom 1 </label>
            <label> <input type = "radio" id = "b2" name = "hall_choice" value = "B2"/> Ballroom 2 </label>
            <label> <input type = "radio" id = "h1" name = "hall_choice" value = "H1"/> Hall 1 </label>
            <label> <input type = "radio" id = "h2" name = "hall_choice" value = "H2"/> Hall 2 </label>
            <label> <input type = "radio" id = "h3" name = "hall_choice" value = "H3"/> Hall 3 </label>

            <br/><br/>

            <label> Event Type: <input type = "radio" id = "w" name = "event" value = "Wedding"/> Wedding </label>
            <label> <input type = "radio" id = "c" name = "event" value = "Confrence"/> Confrence </label>
            <label> <input type = "radio" id = "bp" name = "event" value = "Birthday"/> Birthday Party </label>
            <label> <input type = "radio" id = "gp" name = "event" value = "Graduation"/> Graduation Party </label>
            <label> <input type = "radio" id = "m" name = "event" value = "Meeting"/> Meeting </label>
            <label> <input type = "radio" id = "o" name = "event" value = "Other"/> Other </label>

            <br/><br/>

            <label> If you chose <span style = "text-decoration : underline;">Other</span>, please specify the event type: <input type = "text" name = "other_event"/> </label>

            <br/><br/>

            <label> Date of Event: <input type = "date" class = "date" name = "date"/> </label>
            
            <br/><br/>

            <label> Special Requests:- </label>
            <br/>
            <textarea rows = "5" name = "special_requests2"> </textarea>

            <br/><br/><br/>

            <input type = "submit" name="submit2" value = "Save" class = "saveANDclear"/>
            <input type = "reset" value = "Clear" class = "saveANDclear"/>

        </form>

        <hr/>

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