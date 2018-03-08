<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
<div id="container">
    <?php include_once "include/header.php";?>
    <div id=content">
        <form action="display.php" method="post"
              enctype="multipart/form-data">

            <label>Please Enter the Candidate's Name:</label>
            <br/></br></br></br>
            <label>First Name: </label>
            <input type="text" name="fname">
            </br></br>
            <label>Last Name: </label>
            <input type="text" name="lname">
            </br></br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php include_once "include/footer.php";?>

</body>
</html>