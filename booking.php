<!DOCTYPE html>
<html>
    <head>

        <!--Title, and linking file to styling.css and bootstraps-->
        <title> Booking & Resrevation </title>
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
                padding-top: 2em;
            }

            /*Formatting h2 in the page*/
            h2 {
                font-family: 'Times New Roman', Times, serif;
                font-size: 2.4em;
                font-weight: lighter;
                color: #9a7b4f;
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

            .data {
                padding-left : 100px;
            }

            #description {
                width : 500px;
                font-size: 1.2em;
            }

            img.room {
                width : 480px;
                height : 300px;
                padding-top: 10px;
            }

            img.hall {
                width : 480px;
                height : 300px;
                padding-top: 10px;
            }

            #sizeANDprice {
                font-weight: bold;
                font-size: 1.3em;
            }

            /*Formatting ancors of inputs*/
            a input {
                background-color: #9a7b4f;
                color: white;
                width: 250px;
                height: 40px;
                font-size: 20px;
                text-decoration: underline;
                border-color: white;
                cursor: pointer;

            }

            a input:hover {
                color: black;
            }

            /*Formatting inputs with class 'add'*/
            input.add {
                background-color: #9a7b4f;
                color: white;
                width: 180px;
                height: 30px;
                font-size: 15px;
                text-decoration: underline;
                border-color: white;
                cursor: pointer;
            }

            input.add:hover {
                color: black;
            }

        </style>

        <script type="text/javascript">
            //constructing an object called 'room' with 5 instance variables and 5 methods.
            const room = {
                //instance variables for 'room' object.
                name: "",
                photo: "",
                description: "",
                size: "",
                price: "",
                //set methods/functions for 'room' objects's instance variables.
                setRoomName: function(roomName) {
                    return (this.name = roomName);
                },
                setRoomPhoto: function(roomPhoto) {
                    return (this.photo = roomPhoto);
                },
                setRoomDescription: function(roomDescription) {
                    return (this.description = roomDescription);
                },
                setRoomSize: function(roomSize) {
                    return (this.size = "Size: " + roomSize + " m" + "2".sup());
                },
                setRoomPrice: function(roomPrice) {
                    return (this.price = "Price: " + roomPrice + " OMR /night");
                },
            };

            //function for adding room data into the rooms table.
            function addRoom() {
                //calling the 5 methods of 'room' object and assigning them the appropriate values.
                room.setRoomName(document.getElementById("roomName").value);
                room.setRoomPhoto(document.getElementById("roomPhoto").value);
                room.setRoomDescription(document.getElementById("roomDescription").value);
                room.setRoomSize(document.getElementById("roomSize").value);
                room.setRoomPrice(document.getElementById("roomPrice").value);

                //constructing a 'table' variable that gets the <tr> elements from rooms table, an empty array called 'values', and a counter variable for the array called 'j'.
                var table = document.querySelectorAll("#rooms tr");
                var values = [];
                var j = 0;
                //using for-in loop to add each instance variable value in 'room' object into the array 'values'.
                for (var i in room) {
                    values[j] = room[i];
                    j++;
                }

                //creating a <th> element and assigning it the first element of the 'values' array (name of the room), giving it the correct styling, and then adding it to the end of the first row in the table.
                var name = document.createElement("th");
                name.innerHTML = values[0];
                name.setAttribute("class", "data");
                table[0].appendChild(name);
                //creating a <td> element and an <img> element, assigning the second element of the 'values' array (photo of the room) to the 'src' attribute , giving it the correct styling, and then adding it to the <td> element, and adding the <td> to the end of the second row in the table.
                var photo = document.createElement("td");
                photo.setAttribute("class", "data");
                var image = document.createElement("img");
                image.setAttribute("src", values[1]);
                image.setAttribute("alt", ("image of " + values[0]));
                image.setAttribute("class", "room");
                photo.appendChild(image);
                table[1].appendChild(photo);
                //creating a <td> element and assigning it the third element of the 'values' array (description of the room), giving it the correct styling, and then adding it to the end of the third row in the table.
                var description = document.createElement("td");
                description.innerHTML = values[2];
                description.setAttribute("class", "data");
                description.setAttribute("id", "description");
                table[2].appendChild(description);
                //creating a <td> element and assigning it the fourth element of the 'values' array (size of the room), giving it the correct styling, and then adding it to the end of the fourth row in the table.
                var size = document.createElement("td");
                size.innerHTML = values[3];
                size.setAttribute("class", "data");
                size.setAttribute("id", "sizeANDprice");
                table[3].appendChild(size);
                //creating a <td> element and assigning it the last element of the 'values' array (price of the room), giving it the correct styling, and then adding it to the end of the last row in the table.
                var price = document.createElement("td");
                price.innerHTML = values[4];
                price.setAttribute("class", "data");
                price.setAttribute("id", "sizeANDprice");
                table[4].appendChild(price);
            }

            //function for searching a specific value in rooms table.
            function searchRoom() {
                //constructing three variables: two for the table 'rooms' and for the <tr>s in the table, and one is an empty array called 'values'.
                var table = document.getElementById("rooms");
                var rows = table.getElementsByTagName("tr");
                var values = [];
                //using nested for loop to add every data in the table to the array.
                for (var i = 0; i < table.rows.length; i++) {
                    var row = table.rows[i];
                    for (var j = 0; j < row.cells.length; j++) {
                        var cell = row.cells[j];
                        values[(5*i)+j] = cell.innerHTML.toLowerCase();
                    }
                }

                //constructing a variable for assingning the search value from 'roomValue' textbox, and a boolean variable called 'found' for knowing it the search value is found in the table or not.
                var searchValue = document.getElementById("roomValue").value.toLowerCase();
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

            //constructing an object called 'hall' with 5 instance variables and 5 methods.
            const hall = {
                //instance variables for 'hall' object.
                name: "",
                photo: "",
                description: "",
                price: "",
                //set methods/functions for 'hall' objects's instance variables.
                setHallName: function(hallName) {
                    return (this.name = hallName);
                },
                setHallPhoto: function(hallPhoto) {
                    return (this.photo = hallPhoto);
                },
                setHallDescription: function(hallDescription) {
                    return (this.description = hallDescription);
                },
                setHallPrice: function(hallPrice) {
                    return (this.price = "Price: " + hallPrice + " OMR");
                },
            };

            //function for adding hall data into the ballroom/halls table.
            function addHall() {
                //calling the 5 methods of 'hall' object and assigning them the appropriate values.
                hall.setHallName(document.getElementById("hallName").value);
                hall.setHallPhoto(document.getElementById("hallPhoto").value);
                hall.setHallDescription(document.getElementById("hallDescription").value);
                hall.setHallPrice(document.getElementById("hallPrice").value);

                //constructing a 'table' variable that gets the <tr> elements from ballroom/halls table, an empty array called 'values', and a counter variable for the array called 'j'.
                var table = document.querySelectorAll("#halls tr");
                var values = [];
                var j = 0;
                //using for-in loop to add each instance variable value in 'hall' object into the array 'values'.
                for (var i in hall) {
                    values[j] = hall[i];
                    j++;
                }

                //creating a <th> element and assigning it the first element of the 'values' array (name of the ballroom/hall), giving it the correct styling, and then adding it to the end of the first row in the table.
                var name = document.createElement("th");
                name.innerHTML = values[0];
                name.setAttribute("class", "data");
                table[0].appendChild(name);
                //creating a <td> element and an <img> element, assigning the second element of the 'values' array (photo of the ballroom/hall) to the 'src' attribute , giving it the correct styling, and then adding it to the <td> element, and adding the <td> to the end of the second row in the table.
                var photo = document.createElement("td");
                photo.setAttribute("class", "data");
                var image = document.createElement("img");
                image.setAttribute("src", values[1]);
                image.setAttribute("alt", ("image of " + values[0]));
                image.setAttribute("class", "room");
                photo.appendChild(image);
                table[1].appendChild(photo);
                //creating a <td> element and assigning it the third element of the 'values' array (description of the ballroom/hall), giving it the correct styling, and then adding it to the end of the third row in the table.
                var description = document.createElement("td");
                description.innerHTML = values[2];
                description.setAttribute("class", "data");
                description.setAttribute("id", "description");
                table[2].appendChild(description);
                //creating a <td> element and assigning it the last element of the 'values' array (price of the ballroom/hall), giving it the correct styling, and then adding it to the end of the last row in the table.
                var price = document.createElement("td");
                price.innerHTML = values[3];
                price.setAttribute("class", "data");
                price.setAttribute("id", "sizeANDprice");
                table[3].appendChild(price);
            }

            //function for searching a specific value in ballroom/halls table.
            function searchHall() {
                //constructing three variables: two for the table 'halls' and for the <tr>s in the table, and one is an empty array called 'values'.
                var table = document.getElementById("halls");
                var rows = table.getElementsByTagName("tr");
                var values = [];
                //using nested for loop to add every data in the table to the array.
                for (var i = 0; i < table.rows.length; i++) {
                    var row = table.rows[i];
                    for (var j = 0; j < row.cells.length; j++) {
                        var cell = row.cells[j];
                        values[(5*i)+j] = cell.innerHTML.toLowerCase();
                    }
                }

                //constructing a variable for assingning the search value from 'hallValue' textbox, and a boolean variable called 'found' for knowing it the search value is found in the table or not.
                var searchValue = document.getElementById("hallValue").value.toLowerCase();
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

    <body style = "text-align : center; overflow-x: hidden;">
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

        <!--Page content-->
        <h1> Booking & Reservation </h1> 
        <br/><br/><br/>

        <h2> Book a Room </h2>
        <hr/><br/>

        <div class = "table" id="table1">

            <!--Tables which indlude rooms data-->
            <table id="rooms">

                <tr>
    
                    <th> Standard Single Bedroom </th>
                    <th class = "data"> Premium Single Bedroom </th>
                    <th class = "data"> Standard Double Bedroom </th>
                    <th class = "data"> Premium Double Bedroom </th>
                    <th class = "data"> Deluxe Triple Bedroom </th>
    
                </tr>
    
                <tr>
    
                    <td> <img src = "Pictures/standard-single-bedroom.jpg" alt = "Image of Standard Single Bedroom" class = "room"/> </td>
                    <td class = "data"> <img src = "Pictures/premium-single-bedroom.jpg" alt = "Image of Premium Single Bedroom" class = "room"/> </td>
                    <td class = "data"> <img src = "Pictures/standard-double-bedroom.jpg" alt = "Image of Standard Double Bedroom" class = "room"/> </td>
                    <td class = "data"> <img src = "Pictures/premium-double-bedroom.jpg" alt = "Image of Premium Double Bedroom" class = "room"/> </td>
                    <td class = "data"> <img src = "Pictures/deluxe-triple-bedroom.jpg" alt = "Image of Deluxe Triple Bedroom" class = "room"/> </td>
    
                </tr>
    
                <tr style = " text-align : justify;">
    
                    <td id = "description"> This room is suitable for couples who would like to have a comfortable stay without a very high budget. The room contains a king size bed, a small kitchennet, and one bathroom. It includes complimentry access to the swimming pool. </td>
                    <td id = "description" class = "data"> This room is suitable for a small family consisting of two adults and at most two children. The room contains a king size bed, a single size bed, a small kitchen, and two bathrooms. It includes complimentry breakfast and access to the swimming pool. </td>
                    <td id = "description" class = "data"> This room is suitable for a normal family consisting of four adult or two adults and at most four children. The room contains two king size beds, one single size bed, a small kitchen, and three bathrooms. It includes complimentry breakfast and access to the swimming pool. </td>
                    <td id = "description" class = "data"> This room is suitable for a large family consisting of six adults, four adults and three children, or three adults and five children. The room contains two king size beds, two single size beds, a proper kitchen with washing machine, and four bathrooms. It includes complimentry breakfast and access to the swimming pool and spa. </td>
                    <td id = "description" class = "data"> This bedroom is suitable for huge families consisting of more than six adults and four children. The room contains three king size beds, three single beds, a proper kitchen with washing machine, and six bathrooms. It includes complimentry breakfast and access to the swimming pool and spa. </td>
                    
                </tr>
    
                <tr>
    
                    <td id = "sizeANDprice"> Size: 55 m<sup>2</sup> </td>
                    <td class = "data" id = "sizeANDprice"> Size: 80 m<sup>2</sup> </td>
                    <td class = "data" id = "sizeANDprice"> Size: 110 m<sup>2</sup> </td>
                    <td class = "data" id = "sizeANDprice"> Size: 145 m<sup>2</sup> </td>
                    <td class = "data" id = "sizeANDprice"> Size: 195 m<sup>2</sup> </td>
                    
                </tr>
    
                <tr>
    
                    <td id = "sizeANDprice"> Price: 45 OMR /night </td>
                    <td class = "data" id = "sizeANDprice"> Price: 65 OMR /night </td>
                    <td class = "data" id = "sizeANDprice"> Price: 90 OMR /night </td>
                    <td class = "data" id = "sizeANDprice"> Price: 120 OMR /night </td>
                    <td class = "data" id = "sizeANDprice"> Price: 160 OMR /night </td>
                    
                </tr>
    
            </table>

        </div>

        <br/>

        <a href = "bookingForm.php">
            <input type = "button" value = "Reserve a Room"/>
        </a>

        <br/><hr/>

        <div style="height:250px;">
            <!--Division that includes a form for adding a room to the rooms table-->
            <div style="float:left; width:950px;">
                <h2> Add a Room </h2>
                <form action="">
                    <span> Room Name: <input type="text" id="roomName"/></span>
                    <span> Room Picture Link/Path: <input type="text" id="roomPhoto"/></span>
                    <br/><br/>
                    <span> Room Description: <input type="text" id="roomDescription"/></span>
                    <span> Room Size: <input type="text" id="roomSize"/></span>
                    <span> Room Price: <input type="text" id="roomPrice"/></span>
                    <br/><br/>
                    <input type="button" value="Add Room" class="add" onclick="addRoom()"/>
                </form>
            </div>
            <!--Division that includes a form for for searching for specific value in rooms table-->
            <div style="float:right; width:515px; margin-right: 30px;">
                <h2> Search in Room </h2>
                <form action="">
                    <span> Search Value: <input type="text" id="roomValue"/></span>
                    <br/><br/>
                    <input type="button" value="Search" class="add" onclick="searchRoom()"/>
                </form>
            </div>
        </div>
        

        <hr/><br/><br/><br/><br/><br/><br/>

        <h2> Book a Ballrom/Hall </h2>
        <hr/><br/>

        <div class = "table">

            <!--Table which include Ballroom & halls information-->
            <table id="halls">

                <tr>
    
                    <th> Ballroom 1 </th>
                    <th class = "data"> Ballroom 2 </th>
                    <th class = "data"> Hall 1 </th>
                    <th class = "data"> Hall 2 </th>
                    <th class = "data"> Hall 3 </th>
    
                </tr>
    
                <tr>
    
                    <td> <img src = "Pictures/Ballroom1.JPG" alt = "Image of Ballroom 1" class = "hall"/> </td>
                    <td class = "data"> <img src = "Pictures/Ballrom2.jpg" alt = "Image of Ballroom 2" class = "hall"/> </td>
                    <td class = "data"> <img src = "Pictures/Hall1.jpg" alt = "Image of Hall 1" class = "hall"/> </td>
                    <td class = "data"> <img src = "Pictures/Hall2.jpg" alt = "Image of Hall 2" class = "hall"/> </td>
                    <td class = "data"> <img src = "Pictures/Hall3.jpg" alt = "Image of Hall 3" class = "hall"/> </td>
    
                </tr>
    
                <tr style = " text-align : justify;">
    
                    <td id = "description"> This ballroom is the largest in our hotel! It could accomudate upto 280 person with a special area for buffet. It is suitable for weddings and big confrences. </td>
                    <td id = "description" class = "data"> This ballroom could accomudate upto 190 person with a special area for buffet. It is suitable for birthday and graduation parties, and for small confrences. </td>
                    <td id = "description" class = "data"> This is the best business hall in our hotel! It combines the luxurious style with the traditional ambience. It could accomudate upto 140 person, and it is equiped with all required technologies for proffesional business meetings. </td>
                    <td id = "description" class = "data"> This hall is more on the modern style. It can accomudate upto 100 person, and it is equiped with all necessary technologies for meetings. </td>
                    <td id = "description" class = "data"> This hall is the smallest in the hotel, but even though an extraordinary meeting could be held in it with the outstanding decor it has to offer! It can accomudate upto 60 person, and it is equiped with all the required technologies. </td>
                    
                </tr>
    
                <tr>
    
                    <td id = "sizeANDprice"> Price: 450 OMR </td>
                    <td class = "data" id = "sizeANDprice"> Price: 300 OMR </td>
                    <td class = "data" id = "sizeANDprice"> Price: 250 OMR </td>
                    <td class = "data" id = "sizeANDprice"> Price: 175 OMR </td>
                    <td class = "data" id = "sizeANDprice"> Price: 125 OMR </td>
                    
                </tr>
    
            </table>

        </div>

        <br/>
        
        <a href = "bookingForm.php">
            <input type = "button" value = "Reserve a Ballroom/Hall"/>
        </a>

        <br/><hr/>

        <div style="height:250px;">
            <!--Division that includes a form for adding a ballroom/hall to the ballroom/halls table-->
            <div style="float:left; width: 750px;">
                <h2> Add a Ballroom/Hall </h2>
                <form action="">
                    <span> Hall Name: <input type="text" id="hallName"/></span>
                    <span> Hall Picture Link/Path: <input type="text" id="hallPhoto"/></span>
                    <br/><br/>
                    <span> Hall Description: <input type="text" id="hallDescription"/></span>
                    <span> Hall Price: <input type="text" id="hallPrice"/></span>
                    <br/><br/>
                    <input type="button" value="Add Ballroom/Hall" class="add" onclick="addHall()"/>
                </form>
            </div>
            <!--Division that includes a form for for searching for specific value in ballroom/halls table-->
            <div style="float:right; width:550px; margin-right: 30px;">
                <h2> Search in Ballroom/Hall </h2>
                <form action="">
                    <span> Search Value: <input type="text" id="hallValue"/></span>
                    <br/><br/>
                    <input type="button" value="Search" class="add" onclick="searchHall()"/>
                </form>
            </div>
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