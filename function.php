<?php 



$server = 'localhost';

$username = 'root';

$pw = '';

$db = 'phac2339_ph_air';

$conn = mysqli_connect($server, $username, $pw, $db);



if (!$conn) {

    die('Connection failed :' . mysqli_connect_error());

}



function insertPh($data)

{

    global $conn;



    $ph = $data['ph'];

    $tegangan = $data['tegangan'];



    $t = time();

    // echo ($t . "<br>");

    $time = date("Y-m-d H:i:s", $t);



    $query = "INSERT INTO ph VALUES ('','$ph','$tegangan','$time')";



    mysqli_query($conn, $query);



    return mysqli_affected_rows($conn);

    

}