<?php

include_once "include/appGlobals.php";
include_once "include/DB.php";


function save(&$fName,&$lName,&$email,&$gender,&$phoneType,&$phoneNumber,&$productID,&$comments)
{
    try{

        $cleanfName=htmlspecialchars($fName,ENT_QUOTES);
        $cleanlName=htmlspecialchars($lName,ENT_QUOTES);
        $cleanEmail=htmlspecialchars($email,ENT_QUOTES);
        $cleanGender=htmlspecialchars($gender,ENT_QUOTES);
        $cleanPhoneType=htmlspecialchars($phoneType,ENT_QUOTES);
        $cleanPhoneNumber=htmlspecialchars($phoneNumber,ENT_QUOTES);
        $cleanProductID=htmlspecialchars($productID,ENT_QUOTES);
        $cleanComments=htmlspecialchars($comments,ENT_QUOTES);
        ;

        $sql="insert into Warranty.warranty (fname,lname,email,gender,phoneType,phoneNumber,productID,comments) 
              values(?, ?, ?, ?, ?, ?, ?, ?)";

        $count=query($sql,array($cleanfName,$cleanlName,$cleanEmail,$cleanGender,
                    $cleanPhoneType,$cleanPhoneNumber,$cleanProductID,$cleanComments));

        return $count=1;
    }
    catch(error $e){
        return false;
    }
}


$fName=$_POST["fName"];
$lName=$_POST["lName"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$phoneType=$_POST["phoneType"];
$phoneNumber=$_POST["number"];
$productID=$_POST["pID"];
$comments=$_POST["comments"];

$msgs= array();

if(empty($fName))
{
    array_push($msgs, "Invalid First Name");

}
if(empty($lName))
{
    array_push($msgs, "Invalid Last Name");

}
if(empty($email))
{
    array_push($msgs, "Invalid email");

}
if(empty($gender))
{
    array_push($msgs, "Invalid Gender selection");

}
if(empty($phoneType))
{
    array_push($msgs, "Invalid Phone type");

}
if(empty($phoneNumber))
{
    array_push($msgs, "Invalid Phone Number");

}
if(empty($productID))
{
    array_push($msgs, "Invalid Product ID");

}
if(empty($comments))
{
    array_push($msgs, "Please leave a comment.");

}


$response="";
if(!empty($msgs))
{
    $response.="Invalid Data<br/>";
    foreach($msgs as $msg )
    {
        $response.= "{$msg} <br/>";
    }
}
else
{

    $result = save($fName,$lName,$email,$gender,$phoneType,$phoneNumber,$productID,$comments);

    if($result== false)
    {
        $response .= "Failed to Persist data";
    }
    else
    {
        $response .= "Successfully Added Information!<br>";

    }
}

?>

<html>
<head>
    <title >Assessment 2 Home</title>
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
<div id="container">
    <?php include_once "include/header.php";?>
    <div id="content">
        <?=$response?>

    </div>
    <?php include_once "include/footer.php";?>
</div>
</body>
</html>
