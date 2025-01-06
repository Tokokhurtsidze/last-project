<?php
include ('components.php');
include ('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel</title>
    <link rel="stylesheet" href="style.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php
secondfooter($navbar22 ,$navbar1);
?>
<?php
sectionlast($contacts);
?>
<?php
forms($labels,$forms);
?>
<?php
modals();
?>
<?php
footer($footerslink1,$navbar1,$fotlink2)
?>
<div class="j">
<input type="text" id="name" placeholder="Enter your name">
<span id="error" style="color: red; font-size: 12px;"></span>
<button id="sub" disabled>Submit</button>
</div>

         <script src="./main.js"></script>
</body>
</html>