<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warranty Registration</title>
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
<div id="container">
    <?php include_once "include/header.php";?>
    <div id=content">
        <form action="registerAddHandler.php" method="post"
              enctype="multipart/form-data">
            <table>
                <tr>
                    <th>
                        <label>First Name:</label>
                    </th>
                    <th>
                        <input type="text" name="fName" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Last Name:</label>
                    </th>
                    <th>
                        <input type="text" name="lName" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Email:</label>
                    </th>
                    <th>
                        <input type="text" name="email" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Gender:</label>
                    </th>
                    <th>
                        Male <input type="radio" name="gender" value="Male"/><br/>
                        Female <input type="radio" name="gender" value="Female"/><br/>
                        Other <input type="radio" name="gender" value="Other"/><br/>
                        Ignore <input type="radio" name="gender" value="Ignore"/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Phone Type:</label>
                    </th>
                    <th>
                        <select name="phoneType">
                            <option name="phoneType" value="Home">Home</option>
                            <option name="phoneType" value="Mobile">Mobile</option>
                        </select>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Phone Number:</label>
                    </th>
                    <th>
                        <input type="text" name="number" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Product ID:</label>
                    </th>
                    <th>
                        <input type="text" name="pID" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Comments:</label>
                    </th>
                    <th>
                        <textarea rows="4" cols="50" name="comments"></textarea>

                    </th>
                </tr>
            </table>

            <br/>
            <input type="submit" value="Submit"/>
        </form>
    </div>
    <?php include_once "include/footer.php";?>

</body>
</html>