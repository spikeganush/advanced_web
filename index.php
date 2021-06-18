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

<?php
//create a variable
$your_name = "Florian Jourdain";
$index = "Home";
?>
    <div class="title">
        <h1>Hello world</h1>
        
        <p>Your name is: <?php echo $your_name;?></p>
    </div>
    
   <div class="date">
       <h1></h1>
       <ul>
           <li class="link_nav"><a href="index.html"><?php echo $index;?></a></li>
           <li class="link_nav"><a href="contact.html">Contact</a></li>
           <li class="link_nav"><a href="about.html">About</a></li>
       </ul>
   </div>
</body>
</html>