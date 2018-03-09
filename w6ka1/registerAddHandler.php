<?php

include_once "include/appGlobals.php";
include_once "include/DB.php";


function save(&$CfName,&$ClName,&$IFN,&$ILN,&$position,&$date,&$abilities,&$appearance,&$skills,&$knowledge,&$comments)
{
    try{

        $cleanCfName=htmlspecialchars($CfName,ENT_QUOTES);
        $cleanCLName=htmlspecialchars($ClName,ENT_QUOTES);
        $cleanIFN=htmlspecialchars($IFN,ENT_QUOTES);
        $cleanILN=htmlspecialchars($ILN,ENT_QUOTES);
        $cleanPosition=htmlspecialchars($position,ENT_QUOTES);
        $cleanDate=htmlspecialchars($date,ENT_QUOTES);
        $cleanAbilities=htmlspecialchars($abilities,ENT_QUOTES);
        $cleanAppearance=htmlspecialchars($appearance,ENT_QUOTES);
        $cleanSkills=htmlspecialchars($skills,ENT_QUOTES);
        $cleanKnowledge=htmlspecialchars($knowledge,ENT_QUOTES);
        $cleanComments=htmlspecialchars($comments,ENT_QUOTES);

        $sql="insert into HR_Interviews.interview (interviewerFName,interviewerLname,position,date,
              candidateFname,candidateLname,abilities,appearance,skills,comments,Knowledge) 
              values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $count=query($sql,array($cleanIFN,$cleanILN,$cleanPosition,$cleanDate,$cleanCfName,$cleanCLName,$cleanAbilities,
                                $cleanAppearance,$cleanSkills,$cleanComments,$cleanKnowledge));
        return $count=1;
    }
    catch(error $e){
        return false;
    }
}


$CfName=$_POST["CfName"];
$ClName=$_POST["ClName"];
$IFN=$_POST["IfName"];
$ILN=$_POST["IlName"];
$position=$_POST["position"];
$date=$_POST["date"];
$abilities=$_POST["abilities"];
$appearance=$_POST["appearance"];
$skills=$_POST["skills"];
$knowledge=$_POST["knowledge"];
$comments=$_POST["comments"];

$msgs= array();

if(empty($CfName))
{
    array_push($msgs, "Invalid Client First Name");

}
if(empty($ClName))
{
    array_push($msgs, "Invalid Client Last Name");

}
if(empty($IFN))
{
    array_push($msgs, "Invalid Interviewer First Name");

}
if(empty($ILN))
{
    array_push($msgs, "Invalid Interviewer Last Name");

}
if(empty($position))
{
    array_push($msgs, "Invalid Position");

}
if(empty($date))
{
    array_push($msgs, "Invalid Date");

}
if(empty($abilities))
{
    array_push($msgs, "Invalid Ability");

}
if(empty($appearance))
{
    array_push($msgs, "Invalid Appearance");

}
if(empty($skills))
{
    array_push($msgs, "Invalid Skill");

}
if(empty($knowledge))
{
    array_push($msgs, "Invalid Knowledge");

}
if(empty($comments))
{
    array_push($msgs, "No Comments left. Please leave a comment!");

}

$response="";
if(!empty($msgs))
{
    $response.="Invalid Data <br/>";
    foreach($msg as $msg )
    {
        $response.= "{$msg} <br/>";
    }
}
else
{

    $result = save($CfName,$ClName,$IFN,$ILN,$position,$date,$abilities,$appearance,$skills,$knowledge,$comments);

    if($result== false)
    {
        $response .= "Failed to Persist data";
    }
    else
    {
        $response .= "Successfully Added Information!:<br>";

    }
}

?>

<html>
<head>
    <title >Assessment 1 Home</title>
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
