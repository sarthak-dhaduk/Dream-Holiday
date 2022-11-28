<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"Dream_Holiday");
    // $q="create database Dream_Holiday";
    // // $q="CREATE TABLE `dream_holiday`.`register` ( `username` VARCHAR(30) NOT NULL , `email` VARCHAR(40) NOT NULL , `password` VARCHAR(12) NOT NULL , `user` VARCHAR(35) NOT NULL , `gender` VARCHAR(20) NOT NULL , PRIMARY KEY (`username`(30)), UNIQUE `email` (`email`(40))) ENGINE = InnoDB";
    // if(mysqli_query($con,$q))
    // {    
    //     echo "database st_master created successfully";
    // }
    // else
    // {
    //     echo "database st_master not created successfully";
    // }
?>