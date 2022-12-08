//Defining needed variables to use for room's reservation.
var SSBroomsReserved = 0; PSBroomsReserved = 0; SDBroomsReserved = 0; PDBroomsReserved = 0; DTBroomsReserved = 0;
var SSBprice = 45; PSBprice = 65; SDBprice = 90; PDBprice = 120; DTBprice = 160;
var totalReservedRooms = 0;
var roomsTotal = 0;
var roomsTotalDiscount = 0;

//Defining needed variables to use for ballroom's reservation.
var ballroom1Reserved = 0; ballroom2Reserved = 0;
var ballroom1Price = 450; ballroom2Price = 300;
var totalReservedBallrooms = 0;
var ballroomsTotal = 0;
var ballroomsTotalDiscount = 0;

//Defining needed variables to use for hall's reservation.
var hall1Reserved = 0; hall2Reserved = 0; hall3Reserved = 0; 
var hall1Price = 250; hall2Price = 175; hall3Price = 125;
var totalReservedHalls = 0;
var hallsTotal = 0;
var hallsTotalDiscount = 0;

//Defining needed variables to use for total reservations.
var totalReservations = 0;
var totalPrice = 0;

//reserveRoom function, which takes the id of the room to be reserved and makes needed calculations.
function reserveRoom(id) {
    //Incrementing total reserved rooms and total reservations.
    totalReservedRooms++;
    totalReservations++;

    //When choosing SSB (Standard Single Bedroom), its reservation is incremented and printed, and price calculated.
    if (id == "SSB") {
        SSBroomsReserved++;
        document.getElementById("SSBroomCount").innerHTML = SSBroomsReserved;
        document.getElementById("SSBprice").innerHTML = SSBroomsReserved * SSBprice;
    }

    //When choosing PSB (Premium Single Bedroom), its reservation is incremented and printed, and price calculated.
    else if (id == "PSB") {
        PSBroomsReserved++;
        document.getElementById("PSBroomCount").innerHTML = PSBroomsReserved;
        document.getElementById("PSBprice").innerHTML = PSBroomsReserved * PSBprice;
    }

    //When choosing SDB (Standard Double Bedroom), its reservation is incremented and printed, and price calculated.
    else if (id == "SDB") {
        SDBroomsReserved++;
        document.getElementById("SDBroomCount").innerHTML = SDBroomsReserved;
        document.getElementById("SDBprice").innerHTML = SDBroomsReserved * SDBprice;
    }

    //When choosing PDB (Premium Double Bedroom), its reservation is incremented and printed, and price calculated.
    else if (id == "PDB") {
        PDBroomsReserved++;
        document.getElementById("PDBroomCount").innerHTML = PDBroomsReserved;
        document.getElementById("PDBprice").innerHTML = PDBroomsReserved * PDBprice;
    }

    //When choosing DTB (Deluxe Triple Bedroom), its reservation is incremented and printed, and price calculated.
    else if (id == "DTB"){
        DTBroomsReserved++;
        document.getElementById("DTBroomCount").innerHTML = DTBroomsReserved;
        document.getElementById("DTBprice").innerHTML = DTBroomsReserved * DTBprice;
    }

    //Calculating total price.
    totalPrice = totalPrice - roomsTotalDiscount;

    //Calculating total cost, by the summation of multiplying each room count and its price.
    var roomsTotal = (SSBroomsReserved * SSBprice) + (PSBroomsReserved * PSBprice) + (SDBroomsReserved * SDBprice) + (PDBroomsReserved * PDBprice) + (DTBroomsReserved * DTBprice);
    roomsTotalDiscount = roomsTotal;
    
    //DISCOUNT CALCULATION: here the code will check for total room's reservations, and make discount on the price as needed.
    //No discount when only 1 room is reserved.
    if (totalReservedRooms == 1) {
        roomsTotalDiscount = roomsTotalDiscount;
        totalPrice = totalPrice + roomsTotalDiscount;

        document.getElementById("roomsTotal").innerHTML = "";
    }

    //5% discount when 2 rooms reserved.
    else if (totalReservedRooms == 2) {
        roomsTotalDiscount = roomsTotalDiscount*0.95;
        totalPrice = totalPrice + roomsTotalDiscount;
    
        document.getElementById("roomsTotal").innerHTML = roomsTotal;
    }

    //10% discount when 3 rooms reserved.
    else if (totalReservedRooms == 3) {
        roomsTotalDiscount = roomsTotalDiscount*0.9;
        totalPrice = totalPrice + roomsTotalDiscount;
    
        document.getElementById("roomsTotal").innerHTML = roomsTotal;
    }

    //20% discount when 4 or more rooms reserved.
    else if (totalReservedRooms >= 4) {
        roomsTotalDiscount = roomsTotalDiscount*0.8;
        totalPrice = totalPrice + roomsTotalDiscount;
    
        document.getElementById("roomsTotal").innerHTML = roomsTotal;
    }

    //Printing needed variables after their calculations.
    document.getElementById("roomsCount").innerHTML = totalReservedRooms;
    document.getElementById("roomsCount_").innerHTML = totalReservedRooms;
    document.getElementById("roomsTotal_").innerHTML = roomsTotalDiscount;
    document.getElementById("roomsTotalDiscount").innerHTML = roomsTotalDiscount;

    //Printing the total reservations.
    document.getElementById("totalReservations").innerHTML = totalReservations;
    document.getElementById("totalPrice").innerHTML = totalPrice;
}

//clearRooms function, which clears all the reservations applied for rooms, and resets the count and price of it.
function clearRooms() {

    //Subtracting from total reservations reserved rooms count, and then resetting the count of rooms.
    totalReservations = totalReservations - totalReservedRooms;
    totalReservedRooms = 0;

    //Resetting all rooms count and printing them.
    SSBroomsReserved = 0; PSBroomsReserved = 0; SDBroomsReserved = 0; PDBroomsReserved = 0; DTBroomsReserved = 0;
    document.getElementById("SSBroomCount").innerHTML = 0;
    document.getElementById("PSBroomCount").innerHTML = 0;
    document.getElementById("SDBroomCount").innerHTML = 0;
    document.getElementById("PDBroomCount").innerHTML = 0;
    document.getElementById("DTBroomCount").innerHTML = 0;

    //Resetting the room's prices.
    document.getElementById("SSBprice").innerHTML = "---";
    document.getElementById("PSBprice").innerHTML = "---";
    document.getElementById("SDBprice").innerHTML = "---";
    document.getElementById("PDBprice").innerHTML = "---";
    document.getElementById("DTBprice").innerHTML = "---";

    //Subtracting from total price price of rooms, and then resetting the price of rooms.
    totalPrice = totalPrice - roomsTotalDiscount;
    roomsTotalDiscount = 0;
    
    //Resetting data of rooms (count and price).
    document.getElementById("roomsCount").innerHTML = "---";
    document.getElementById("roomsCount_").innerHTML = "---";
    document.getElementById("roomsTotal").innerHTML = "";
    document.getElementById("roomsTotal_").innerHTML = "---";
    document.getElementById("roomsTotalDiscount").innerHTML = "---";

    //Printing the new calculated total reservations and total price.
    document.getElementById("totalReservations").innerHTML = totalReservations;
    document.getElementById("totalPrice").innerHTML = totalPrice;

    //Resetting total reservations and total price when no reservations.
    if (totalReservations == 0) {
        document.getElementById("totalReservations").innerHTML = "---";
        document.getElementById("totalPrice").innerHTML = "---";
    }
}

//reserveBallroom function, which takes the id of the ballroom to be reserved and makes needed calculations.
function reserveBallroom(id) {
    //Incrementing total reserved ballrooms and total reservations.
    totalReservedBallrooms++;
    totalReservations++;

    //When choosing ballroom1, its reservation is incremented and printed, and price calculated.
    if (id == "ballroom1") {
        ballroom1Reserved++;
        
        document.getElementById("ballroom1Count").innerHTML = ballroom1Reserved;
        document.getElementById("ballroom1Price").innerHTML = ballroom1Reserved * ballroom1Price;
    }

    //When choosing ballroom2, its reservation is incremented and printed, and price calculated.
    else if (id == "ballroom2"){
        ballroom2Reserved++;
        
        document.getElementById("ballroom2Count").innerHTML = ballroom2Reserved;
        document.getElementById("ballroom2Price").innerHTML = ballroom2Reserved * ballroom2Price;
    }

    //Calculating total price.
    totalPrice = totalPrice - ballroomsTotalDiscount;

    //Calculating total cost, by the summation of multiplying each ballroom count and its price.
    var ballroomsTotal = (ballroom1Reserved * ballroom1Price) + (ballroom2Reserved * ballroom2Price);
    ballroomsTotalDiscount = ballroomsTotal;
    
    //DISCOUNT CALCULATION: here the code will check for total ballroom's reservations, and make discount on the price as needed.
    //No discount when only 1 ballroom is reserved.
    if (totalReservedBallrooms == 1) {
        ballroomsTotalDiscount = ballroomsTotalDiscount;
        totalPrice = totalPrice + ballroomsTotalDiscount;

        document.getElementById("ballroomsTotal").innerHTML = "";
    }

    //20% discount when 2 or more ballrooms reserved.
    else if (totalReservedBallrooms >= 2) {
        ballroomsTotalDiscount = ballroomsTotalDiscount*0.8;
        totalPrice = totalPrice + ballroomsTotalDiscount;
    
        document.getElementById("ballroomsTotal").innerHTML = ballroomsTotal;
    }
    
    //Printing needed variables after their calculations.
    document.getElementById("ballroomsCount").innerHTML = totalReservedBallrooms;
    document.getElementById("ballroomsCount_").innerHTML = totalReservedBallrooms;
    document.getElementById("ballroomsTotal_").innerHTML = ballroomsTotalDiscount;
    document.getElementById("ballroomsTotalDiscount").innerHTML = ballroomsTotalDiscount;

    //Printing the total reservations.
    document.getElementById("totalReservations").innerHTML = totalReservations;
    document.getElementById("totalPrice").innerHTML = totalPrice;
}

//clearBallroom function, which clears all the reservations applied for ballrooms, and resets the count and price of it.
function clearBallrooms() {

    //Subtracting from total reservations reserved ballrooms count, and then resetting the count of ballrooms.
    totalReservations = totalReservations - totalReservedBallrooms;
    totalReservedBallrooms = 0;

    //Resetting all ballrooms count and printing them.
    ballroom1Reserved = 0; ballroom2Reserved = 0;
    document.getElementById("ballroom1Count").innerHTML = 0;
    document.getElementById("ballroom2Count").innerHTML = 0;

    //Resetting the ballroom's prices.
    document.getElementById("ballroom1Price").innerHTML = "---";
    document.getElementById("ballroom2Price").innerHTML = "---";

    //Subtracting from total price price of ballrooms, and then resetting the price of ballrooms.
    totalPrice = totalPrice - ballroomsTotalDiscount;
    ballroomsTotalDiscount = 0;
    
    //Resetting data of ballrooms (count and price).
    document.getElementById("ballroomsCount").innerHTML = "---";
    document.getElementById("ballroomsCount_").innerHTML = "---";
    document.getElementById("ballroomsTotal").innerHTML = "";
    document.getElementById("ballroomsTotal_").innerHTML = "---";
    document.getElementById("ballroomsTotalDiscount").innerHTML = "---";

    //Printing the new calculated total reservations and total price.
    document.getElementById("totalReservations").innerHTML = totalReservations;
    document.getElementById("totalPrice").innerHTML = totalPrice;

    //Resetting total reservations and total price when no reservations.
    if (totalReservations == 0) {
        document.getElementById("totalReservations").innerHTML = "---";
        document.getElementById("totalPrice").innerHTML = "---";
    }
}

//reserveHall function, which takes the id of the hall to be reserved and makes needed calculations.
function reserveHall(id) {
    //Incrementing total reserved halls and total reservations.
    totalReservedHalls++;
    totalReservations++;

    //When choosing hall1, its reservation is incremented and printed, and price calculated.
    if (id == "hall1") {
        hall1Reserved++;
        
        document.getElementById("hall1Count").innerHTML = hall1Reserved;
        document.getElementById("hall1Price").innerHTML = hall1Reserved * hall1Price;
    }

    //When choosing hall2, its reservation is incremented and printed, and price calculated.
    else if (id == "hall2") {
        hall2Reserved++;
        
        document.getElementById("hall2Count").innerHTML = hall2Reserved;
        document.getElementById("hall2Price").innerHTML = hall2Reserved * hall2Price;
    }

    //When choosing hall3, its reservation is incremented and printed, and price calculated.
    else if (id == "hall3") {
        hall3Reserved++;
        
        document.getElementById("hall3Count").innerHTML = hall3Reserved;
        document.getElementById("hall3Price").innerHTML = hall3Reserved * hall3Price;
    }

    //Calculating total price.
    totalPrice = totalPrice - hallsTotalDiscount;

    //Calculating total cost, by the summation of multiplying each hall count and its price.
    var hallsTotal = (hall1Reserved * hall1Price) + (hall2Reserved * hall2Price) + (hall3Reserved * hall3Price);
    hallsTotalDiscount = hallsTotal;
    
    //DISCOUNT CALCULATION: here the code will check for total hall's reservations, and make discount on the price as needed.
    //No discount when only 1 hall is reserved.
    if (totalReservedHalls == 1) {
        hallsTotalDiscount = hallsTotalDiscount;
        totalPrice = totalPrice + hallsTotalDiscount;

        document.getElementById("hallsTotal").innerHTML = "";
    }

    //10% discount when 2 halls reserved.
    else if (totalReservedHalls == 2) {
        hallsTotalDiscount = hallsTotalDiscount*0.9;
        totalPrice = totalPrice + hallsTotalDiscount;
    
        document.getElementById("hallsTotal").innerHTML = hallsTotal;
    }

    //20% discount when 3 or more halls reserved.
    else if (totalReservedHalls >= 3) {
        hallsTotalDiscount = hallsTotalDiscount*0.8;
        totalPrice = totalPrice + hallsTotalDiscount;
    
        document.getElementById("hallsTotal").innerHTML = hallsTotal;

    }

    //Printing needed variables after their calculations.
    document.getElementById("hallsCount").innerHTML = totalReservedHalls;
    document.getElementById("hallsCount_").innerHTML = totalReservedHalls;
    document.getElementById("hallsTotal_").innerHTML = hallsTotalDiscount;
    document.getElementById("hallsTotalDiscount").innerHTML = hallsTotalDiscount;

    //Printing the total reservations.
    document.getElementById("totalReservations").innerHTML = totalReservations;
    document.getElementById("totalPrice").innerHTML = totalPrice;
}

//clearHalls function, which clears all the reservations applied for halls, and resets the count and price of it.
function clearHalls() {

    //Subtracting from total reservations reserved halls count, and then resetting the count of halls.
    totalReservations = totalReservations - totalReservedHalls;
    totalReservedHalls = 0;

    //Resetting all halls count and printing them.
    hall1Reserved = 0; hall2Reserved = 0; hall3Reserved = 0;
    document.getElementById("hall1Count").innerHTML = 0;
    document.getElementById("hall2Count").innerHTML = 0;
    document.getElementById("hall3Count").innerHTML = 0;

    //Resetting the hall's prices.
    document.getElementById("hall1Price").innerHTML = "---";
    document.getElementById("hall2Price").innerHTML = "---";
    document.getElementById("hall3Price").innerHTML = "---";

    //Subtracting from total price price of halls, and then resetting the price of halls.
    totalPrice = totalPrice - hallsTotalDiscount;
    hallsTotalDiscount = 0;
    
    //Resetting data of halls (count and price).
    document.getElementById("hallsCount").innerHTML = "---";
    document.getElementById("hallsCount_").innerHTML = "---";
    document.getElementById("hallsTotal").innerHTML = "";
    document.getElementById("hallsTotal_").innerHTML = "---";
    document.getElementById("hallsTotalDiscount").innerHTML = "---";

    //Printing the new calculated total reservations and total price.
    document.getElementById("totalReservations").innerHTML = totalReservations;
    document.getElementById("totalPrice").innerHTML = totalPrice;

    //Resetting total reservations and total price when no reservations.
    if (totalReservations == 0) {
        document.getElementById("totalReservations").innerHTML = "---";
        document.getElementById("totalPrice").innerHTML = "---";
    }
}