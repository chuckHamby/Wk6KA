<?php

include_once "include/DB.php";

function display(array &$data)
{
    ?>

    <table>
            <tr>
                <td><strong>Interviewer First Name:</strong></td>
                <td><strong>Interviewer Last Name:</strong></td>
                <td><strong>Position:</strong></td>
                <td><strong>Date of Interview:</strong></td>
                <td><strong>Interviewers Comments:</strong></td>
            </tr>



        <?php
        foreach($data as $person)
        {
            ?>

            <tr>
                <td><?=$person["interviewerFName"]?></td>
                <td><?=$person["interviewerLname"]?></td>
                <td><?=$person["position"]?></td>
                <td><?=$person["date"]?></td>
                <td><?=$person["comments"]?>
                </td>
            </tr>

            <?php
        }// foreach
        ?>
        <tr>
            <td><strong>Candidate First Name</strong></td>
            <td><strong>Candidate Last Name:</strong></td>
            <td><strong>Communication Abilities:</strong></td>
            <td><strong>Professional Appearance:</strong></td>
            <td><strong>Computer Skills:</strong></td>
            <td><strong>Business Knowledge:</strong></td>
        </tr>
        <?php
        foreach($data as $person)
        {
            ?>

            <td><?=$person["candidateFname"]?></td>
            <td><?=$person["candidateLname"]?></td>
            <td><?=$person["abilities"]?></td>
            <td><?=$person["appearance"]?></td>
            <td><?=$person["skills"]?></td>
            <td><?=$person["Knowledge"]?></td>
            <tr>

            </tr>
            <?php
        }// foreach
        ?>
    </table>
    <?php

}//function display
?>
<html>
<head>
    <title >The Person of interest</title>
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
<div id="container">
    <?php include_once "include/header.php";?>
    <div id="content">
        <?php

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];


        //$data=load();

        $sql=("SELECT * from HR_Interviews.interview WHERE candidateFname=");
        $sql.='"'.$fname.'" ';
        $sql.="AND candidateLname=";
        $sql.='"'.$lname.'"';
        $data= queryAll($sql,array());


        if(empty($data)) {
            ?>
            <label>No Data Exist</label>
            <?php
        }//end if
        else{
            display($data);

        }//end else

        ?>
    </div>
    <?php include_once "include/footer.php";?>
</div>
</body>
</html>
