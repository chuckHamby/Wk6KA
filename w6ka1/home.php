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
        <form action="registerAddHandler.php" method="post"
              enctype="multipart/form-data">
            <table>
                <tr>
                    <th>
                        <label>Interviewer First Name:</label>
                    </th>
                    <th>
                        <input type="text" name="IfName" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Interviewer Last Name:</label>
                    </th>
                    <th>
                        <input type="text" name="IlName" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Position:</label>
                    </th>
                    <th>
                        <input type="text" name="position" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Date of Interview:</label>
                    </th>
                    <th>
                        <input type="date" name="date" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Candidate First Name:</label>
                    </th>
                    <th>
                        <input type="text" name="CfName" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Candidate Last Name:</label>
                    </th>
                    <th>
                        <input type="text" name="ClName" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Communication Abilities:</label>
                    </th>
                    <th>
                        <textarea rows="4" cols="50" name="abilities"></textarea>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Professional Appearance:</label>
                    </th>
                    <th>
                        <input type="text" name="appearance" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Computer Skills:</label>
                    </th>
                    <th>
                        <input type="text" name="skills" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Business Knowledge</label>
                    <th>
                        <input type="text" name="knowledge" value=""/><br/>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Interviewers Comments:</label>
                    </th>
                    <th>
                        <textarea rows="4" cols="50" name="comments"></textarea>
                    </th>
                </tr>
            </table>

            <br/>
            <input type="submit" value="save"/>
        </form>
    </div>
    <?php include_once "include/footer.php";?>

</body>
</html>