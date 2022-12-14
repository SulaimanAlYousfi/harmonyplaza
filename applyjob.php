<!DOCTYPE html>
<html>
<head>
    <!--Title, and linking file to styling.css and bootstraps-->
    <title>Job Aplications</title>
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
            margin-bottom: 2.5em;
        }

        /*Formatting h2 in the page*/
        h2 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 2em;
            padding-left: 1.5em;
        }

        /*Formatting h3 in the page*/
        h3.header {
            font-family: 'Times New Roman', Times, serif;
            font-size: 3em;
            font-weight: lighter;
            color: #9a7b4f;
            padding-top: 1em;
            margin-bottom: 0;
            text-align: center;
        }

        /*Formatting list items*/
        .desc {
            text-align: left;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.4em;
            padding-left: 4em;
        }

        /*Formatting labels and inputs*/
        label {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.3em;;
        }

        input {
            margin-bottom: 1em;
        }

        select {
            width: 18em;
            height: 2em;
        }

        .button {
            height: 1.5em;
            font-size: large;
            width: 14em;
        }

        .info {
            margin-top: 3em;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.3em;
        }

        /*Formatting table content*/
        tr {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.3em;
            border: .1em solid #9A784F;
        }

        th {
            border: .1em solid #9A784F;
        }

        th ul {
            text-align: left;
            margin-left: 1em;
        }

        .container{
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        input.addANDsearch {
            font-size: 20px;
            width: 300px;
            height: 25px;
        }

    </style>
    <script type="text/javascript">
        //constructing an object called 'requirement' with 5 instance variables and 5 methods.
        const requirement = {
            //instance variables for 'requirement' object.
            label: "",
            under20: "",
            above20: "",
            //set methods/functions for 'requirement' objects's instance variables.
            setLable: function(newLabel) {
                return (this.label = newLabel);
            },
            setUnder20: function(under20data) {
                return (this.under20 = under20data);
            },
            setAbove20: function(above20data) {
                return (this.above20 = above20data);
            }
        };

        //function for adding requirement data into the table t1.
        function addRow() {
            //calling the 5 methods of 'requirement' object and assigning them the appropriate values.
            requirement.setLable(document.getElementById("label").value);
            requirement.setUnder20(document.getElementById("under20data").value);
            requirement.setAbove20(document.getElementById("above20data").value);

            //constructing a 'table' variable that gets the <tr> elements from the table, an empty array called 'data', and a counter variable for the array called 'j'.
            var table = document.getElementById("t1");
            var data = [];
            var j = 0;
            //using for-in loop to add each instance variable value in 'requirement' object into the array 'data'.
            for (var i in requirement) {
                data[j] = requirement[i];
                j++;
            }

            //creating a variable called 'row' that constructs a new <tr> element.
            var row = document.createElement("tr");
            //using for loop to create a <th> element, assign the appropriate value to it from array 'data' and appending it to the row.
            for (var i = 0; i < 3; i++) {
                var cell = document.createElement("th");
                cell.innerHTML = data[i];
                row.appendChild(cell);
            }
            //appending the row to the table.
            table.appendChild(row);
        }

        //function for searching in the table.
        function searchTable() {
                //constructing three variables: two for the table "t1" and for the <tr>s in the table, and one is an empty array called 'values'.
                var table = document.getElementById("t1");
                var rows = table.getElementsByTagName("tr");
                var values = [];
                //using nested for loop to add every data in the table to the array.
                for (var i = 0; i < table.rows.length; i++) {
                    var row = table.rows[i];
                    for (var j = 0; j < row.cells.length; j++) {
                        var cell = row.cells[j];
                        values.push(cell.innerHTML.toLowerCase());
                    }
                }
                //constructing a variable for assingning the search value from 'search' textbox, and a boolean variable called 'found' for knowing it the search value is found in the table or not.
                var searchValue = document.getElementById("search").value.toLowerCase();
                var found = false;
                //using for loop with if statement to check if the search value is found in the table, displaying an alert, changing found to true, and breaking the loop if the value is found.
                for (var i = 0; i < values.length; i++) {
                    if ((searchValue != "") && (values[i].includes(searchValue))) {
                        alert("Value is found!")
                        found = true;
                        break;
                    }
                }
                //using if statement to display an alert if the search value is not found in the table.
                if (!found)
                    alert("Value is not found!")
            }
    </script>
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
    
    <!--General requirements-->
    <h1>Job Application</h1>
    <hr>   
    <h3 class="header">Requirements</h3>
    <h2>Must have done hospitality courses:</h2>
    <ul style="list-style-type: circle;" class="desc">
        <li>Hospitality law</li><br>
        <li>Hospitality financial management</li><br>
        <li>Hotel and restaurant sales and marketing</li><br>
        <li>Security</li><br>
        <li>Facilities management</li><br>
        <li>Hotel operations</li><br>
        <li>Restaurant management</li><br>
    </ul>

    <hr>
    <br>
    <!--Table of requirements-->
    <table style="border: .3em solid #9A784F; border-radius: .3em; opacity: 100%; margin: 0 auto;" id="t1">
        <tr>
            <td rowspan="2"></td>
            <th colspan="2">Age</th> 
        </tr>
        <tr>
            <th>under 20</th>
            <th>20 and above</th>
        </tr>
        <tr>
            <th>Requirements</th>
            <th>
                <ul>
                    <li>Age 15 and above.</li><br>
                    <li>Parents approval, you will be givin a contract to be signed by your parents.</li><br>
                    <li>Required to work 3-4 days a week.</li><br>
                    <li>Work hours are strictly after school.</li><br>
                    <li>Work hours 2-4 hours.</li><br>
                </ul>
            </th>
            <th>
                <ul>
                    <li>Clean haircut, no tattoos. no pearcings are allowed.</li><br>
                    <li>No eyeglasses are allowed, only contact lences if needed. </li><br>
                    <li>Required to work 6 days a week.</li><br>
                    <li>Required to work 8 hours a day.</li><br>
                    <li>No past or recent criminal records.</li><br>
                </ul>
            </th>
        </tr>
    </table>

    <div class="container">
        <div>
            <h3 class="header" style="padding-top: 0em;">Add a Row</h3>
            <br/>
            <form action="">
                <input type="text" placeholder="Enter label" id="label" class="addANDsearch">
                <input type="text" placeholder="Enter data for under 20" id="under20data" class="addANDsearch">
                <input type="text" placeholder="Enter data for 20 and above" id="above20data" class="addANDsearch">
                <br/>
                <input type="button" value="Add" onclick="addRow()" style="font-size: 20px; width: 100px;">
            </form>
        </div>

        <div>
            <h3 class="header" style="padding-top: 0em;">Search in Table</h3>
            <br/>
            <form action="">
                <input type="text" placeholder="Enter search value" id="search" class="addANDsearch">
                <br/>
                <input type="button" value="Search" onclick="searchTable()" style="font-size: 20px; width: 100px;">
            </form>
        </div>

    </div>
    <hr>

    <!--Apply for job forms-->
    <h3 class="header" style="padding-bottom: 1.5em;">Professional Hotel Graduates</h3>
    <div style="text-align: center;">
        <form  method = "POST" action = "applyjobphp.php">
            <label>First Name: <input type="text" name="firstName1"></label><br>
            <label>Last Name: <input type="text" name="lastName1"></label><br>
            <label>Gender: <input type="radio" name="gender1" value="Male">Male<input type="radio" name="gender1" value="Female">Female</label><br>
            <label>ID No. <input type="text" name="iD1"></label><br>
            <label>Phone Number: <input type="text" name="phone1"></label><br>
            <label>Certificate: <input type="file"  class="button"></label><br>
            <input type="submit" name="submit_full" class="button" style="margin-right: 1em;"><input type="reset" class="button">
        </form>
        
    </div>
    
    <br>
    <hr>
    <h3 class="header" style="padding-bottom: 1.5em;">Part Timers</h3>
    <div style="text-align: center;">
        <form method = "POST" action = "applyjobphp.php">
            <label>First Name: <input type="text" name="firstName2"></label><br>
            <label>Last Name: <input type="text" name="lastName2"></label><br>
            <label>Gender: <input type="radio" name="gender2" value="Male">Male<input type="radio" name="gender2" value="Female">Female</label><br>
            <label>ID No. <input type="text" name="iD2"></label><br>
            <label>Phone Number: <input type="text" name="phone2"></label><br>
            <input type="submit" name="submit_part" class="button"  style="margin-right: 1em;"><input type="reset" class="button">
        </form>
        
    </div>
        
        <p class="info">For any further clarifications, please contact us by <a href="" style="color: #9A784F; text-decoration: none; font-style: italic;">Clicking Here</a>.</p>
        
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