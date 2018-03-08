<?php

function load()
{
    try{
        //Read entire rile content into an array
        $lines=file("courses.txt",FILE_SKIP_EMPTY_LINES);
        return $lines;
    }
    catch(Error $e){
        return null;
    }
}