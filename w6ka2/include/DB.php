<?php
//get a connection to the database

function connect(){
    return @new PDO(
        "mysql:host=localhost;dbname=HR_Interviews",
        "root",
        "",
        array(PDO::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
            PDO::ATTR_EMULATE_PREPARES=>false )
    );
}

//Execute the query and return the first row
function queryOne($query, $params=array())
{
    $result=connect()->prepare($query);
    $result->execute($params);
    return $result->fetch();
}

//Execute the query and return all rows
function queryAll($query,$params=array())
{
    $result= connect()->prepare(($query));
    $result->execute($params);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

//Execute the SQL Query and return the number of rows impacted

function query($query,$params=array())
{
    try {
        $result=connect()->prepare($query);
        $result->execute($params);
        return $result->rowCount();
    }
    catch (Exception $ex)
    {
        throw new Exception($ex);
    }

}