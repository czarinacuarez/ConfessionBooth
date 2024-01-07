<?php
@include 'config.php';

session_start();

if (!$conn) {
    echo "Connection failed!";
} else {
    echo "Connection successful!";
    // You can also set session variables or perform other actions here.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Confession Site</title>
   <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
   
</body>
</html>