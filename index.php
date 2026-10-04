<?php
    include 'pure_php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>
    <!-- <h1>Hello World</h1> -->
    <!-- internal php code -->
     <?php //echo "<h1>Hello World</h1>"; ?>
     
    <h3>
        Username: <u id="displayusername"><?php echo $username; ?></u>
        <br>
        UserID: <u id="displayuserId"><?php echo $user_id; ?></u>
        <br>
        Course: <u id="displaycourse"><?php echo $course; ?></u>
        <br>
        Year Level: <u id="displayyear"><?php echo $year; ?></u>
        <br>
        Section: <u id="displaysection"><?php echo $section; ?></u>
    </h3>
        <button type="button" onclick="greetUser()">Greet User</button>

    <script src="external.js">
    </script>

</body>
</html>
