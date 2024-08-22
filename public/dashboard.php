<?php

include '../config/config.php';
session_start();



//display profile information
$id= $_SESSION['user_id'];
$sql = "SELECT * FROM  profile WHERE $id='id'"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
            <ul class="menu">
                <li class="active">
                    <a href="" >
                        <i class="fa-solid fa-circle-user"></i>
                        <span>Dashboord</span>
                    </a>
                </li>
                <li>
                    <a href="">
                         <span>profile</span>
                   </a>
                </li>
                <li>
                    <a href="">
                        <span>skills</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>projects</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>certications</span>
                    </a>
                </li>
                
                <li>
                    <a href="">
                        <span>settings</span>
                    </a>
                </li>
                
            </ul>
       
    </div>

    <div class="main--content">
        <div class="header--wraper">
            <div class="header--title">
                <h2>Portfolio</h2>

            </div>
            <!-- <div class="user--info">
                <div class="search-box">
                 <i class="fa-  solid fa-search"></i>
                <input type="text" placeholder="search">
                </div>  -->
                   <button type="submit" name="submit" class="log"><a href="">log out</a></button>
             </div>
        </div>
