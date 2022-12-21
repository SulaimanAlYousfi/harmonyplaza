<!DOCTYPE html>
<html>
    <head>

        <!--Title, and linking file to styling.css and bootstraps-->
        <title> Booking & Resrevation Table Data </title>
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

            #roomDescription {
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

            td.info {
                text-align: center;
                font-size: 1.2em;
            }


        </style>

        </head>

        <body style="overflow-x: hidden;">
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
    <br>
    <br>

  </header>


        


         <!-- patients search function form-->
         <form action="" method="POST">
            <div class="row">
               <div class="col">
                  
               </div>
            </div>
         </form>
      </div>
      </div>
      <div class="container" style="overflow-x : auto;">
      <table id="table">
         <!-- table data -->
         <?php
         //table header
            echo"
            <tr>
            <th>ID</th>
            <th>Picture Directory</th>
            <th>Type</th>
            <th>Room Name</th>
            <th>Description</th>
            <th>size m*m (bedroom)/ number of people (ballroom/hall)</th>
            <th>Price per night</th>
            </tr>   ";
            //select data from table to print
            $sql = "SELECT * FROM `rooms`";
            $result = mysqli_query($conn, $sql);
            //check if there are selected rows.
            if (mysqli_num_rows($result) > 0) {
               //output data of each row
               while($row = mysqli_fetch_assoc($result)) {
               echo "<tr>
               <td class='info'>" . $row["ID"]."</td>".
               "<td class='info'>" . $row["Picture Directory"]."</td>".
               "<td class='info'>" . $row["Type"]."</td>".
               "<td class='info'>" . $row["Room Name"]."</td>".
               "<td style='padding-top: 20px;' id='roomDescription'>" . $row["Description"]."</td>".
               "<td class='info' style='width: 500px;'>" . $row["size m*m (bedroom)/ number of people (ballroom/hall)"]."</td>".
               "<td class='info'>". $row["Price per night"]."</td>"; } }
            ?>
            
      </table>
      </div>

      <br><hr><br>

      <div class="container" style="text-align: center">
      <form action="booking2.php" method="POST">
            <div class="row">
               <div class="col">

               <label>Room id: </label>
                  <input id="id" name="id_room" style="margin:10px" type="number">

                <label>Picture directory: </label>
                  <input id="picture" name="picture" style="margin:10px" type="text">
                  <label>Room type: </label>
                  <input id="type" name="type" style="margin:10px" type="text">
                  <label>Room name: </label>
                  <input id="name" name="name" style="margin:10px" type="text">
                  

               </div>
               <div class="col">
                <label>Room description: </label>
                  <input id="description" name="description" style="margin:10px" type="text">
                  <label>Room size (or) number of people it can hold: </label><input id="size" name="size" style="margin:10px" type="number">
                  <label>Room price per reservation: </label><input id="price" name="price" style="margin:10px" type="number">
                  <br>
                  <button style="margin:10px" type="submit" name="insert">insert Room</button>
                  <button style="margin:10px" type="submit" name="search">Search Room</button>
                  <button style="margin:10px" type="submit" name="update">Update Room</button>
                  <button style="margin:10px" type="submit" name="delete">Delete Room</button>
                </div>

            </div>
            <br>
            <hr>
            <br>

        </form>

        <div style="overflow-x : auto;">
        <?php
        //When button with name "insert" is clicked, the following code executes.
        if(isset($_POST['insert'])) {
            //Creating variables by getting the values through the name.
            $picture = $_POST["picture"];
            $type = $_POST["type"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $size = $_POST["size"];
            $price = $_POST["price"];

            //Variable of insert to the table needed.
            $sql = "INSERT INTO `rooms`(`Picture Directory`, `Type`, `Room Name`, `Description`, `size m*m (bedroom)/ number of people (ballroom/hall)`, `Price per night`) VALUES ('$picture', '$type', '$name', '$description', '$size', '$price')";
            //Making connection and updating table.
            $rs = mysqli_query($conn, $sql);
        }
        ?>

        <div >
        <table id="table2">
        <?php
        //When button with name "search" is clicked, the following code executes.
        if(isset($_POST['search'])){
            //Creating variables by getting the values through the name.
            $id= $_POST["id_room"];
            $picture = $_POST["picture"];
            $type = $_POST["type"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $size = $_POST["size"];
            $price = $_POST["price"];
            
            //Priting room headers.
            echo"
            <tr>
            <th>ID</th>
            <th>Picture Directory</th>
            <th>Type</th>
            <th>Room Name</th>
            <th>Description</th>
            <th>size m*m (bedroom)/ number of people (ballroom/hall)</th>
            <th>Price per night</th>
            </tr>   ";
            //Variable of select to the table needed.
            $sql = "SELECT * FROM rooms WHERE ID='$id' or `Picture Directory`='$picture' or `Type`='$type' or `Room Name`='$name' or `Description`='$description' or `size m*m (bedroom)/ number of people (ballroom/hall)`='$size' or `Price per night`='$price'";
            //Making connection and updating table.
            $result = mysqli_query($conn, $sql);
            //check if there are selected rows.
            if (mysqli_num_rows($result) > 0) {
               //printing rows of table.
               while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td class='info'>" . $row["ID"]."</td>".
                "<td class='info'>" . $row["Picture Directory"]."</td>".
                "<td class='info'>" . $row["Type"]."</td>".
                "<td class='info'>" . $row["Room Name"]."</td>".
                "<td style='padding-top: 20px;' id='roomDescription'>" . $row["Description"]."</td>".
                "<td class='info' style='width: 500px;'>" . $row["size m*m (bedroom)/ number of people (ballroom/hall)"]."</td>".
                "<td class='info'>". $row["Price per night"]."</td>"; } }
        }
        ?>
        </table>
        </div>

        <?php
        //When button with name "update" is clicked, the following code executes.
        if(isset($_POST['update'])) {
            //Creating variables by getting the values through the name.
            $id = $_POST["id_room"];
            $picture = $_POST["picture"];
            $type = $_POST["type"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $size = $_POST["size"];
            $price = $_POST["price"];

            //Variable of update to the table needed.
            $sql = "UPDATE `rooms` SET `Picture Directory`='$picture',`Type`='$type',`Room Name`='$name',`Description`='$description',`size m*m (bedroom)/ number of people (ballroom/hall)`='$size',`Price per night`='$price' WHERE ID='$id'";
            $rs = mysqli_query($conn, $sql);
        }

        //When button with name "delete" is clicked, the following code executes.
        if(isset($_POST['delete'])) {
            //Creating variables by getting the values through the name.
            $id = $_POST["id_room"];
            $picture = $_POST["picture"];
            $type = $_POST["type"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $size = $_POST["size"];
            $price = $_POST["price"];

            //Variable of delete to the table needed.
            $sql = "DELETE FROM rooms WHERE ID='$id' or `Picture Directory`='$picture' or `Type`='$type' or `Room Name`='$name' or `Description`='$description' or `size m*m (bedroom)/ number of people (ballroom/hall)`='$size' or `Price per night`='$price'";
            //Making connection and updating table.
            $rs = mysqli_query($conn, $sql);
        }

        //Closing connection.
        mysqli_close($conn);
        ?>
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