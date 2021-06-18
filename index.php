<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM variable";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Index test website</title>
</head>
<body>


    <div class="title">
        <h1>Hello world</h1>
        <!-- Print the variable -->

        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              
              echo "<p>Your name is:  "  . $row["first_name"]. " " . $row["last_name"]. ", you are " . $row["age"]. " years old.</p>";
            }
          } else {
            echo "0 results";
          }


        ?>        
    </div>
    
   <div class="date">
       <h1></h1>
       <ul>
           <li class="link_nav"><a href="index.html">Home</a></li>
           <li class="link_nav"><a href="contact.html">Contact</a></li>
           <li class="link_nav"><a href="about.html">About</a></li>
       </ul>
   </div>
</body>
</html>