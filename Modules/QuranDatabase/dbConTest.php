<?php

    //replace test.db with your database file (.db) file
    $mypdo = new PDO('sqlite:test.db');

    if($mypdo){
        echo 'connected successfully';
    }
    else{
        echo 'task failed successfully';
    }
?>