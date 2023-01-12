<?php 
session_start();

include("connections.php");
include("functions.php");

$user_data = check_login($con);

?>
<html>
<doc html>
    
    <nav>
        <ul>
          <li><a href="logout.php">Uitloggen</a></li>
        </ul>
        <form>
          <input type="text" placeholder="Search...">
          <button type="submit">Go</button>
        </form>
      </nav>
      <head>
          <style>
              nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 0 20px;
      }
      
      nav a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
        padding: 20px;
      }
      
      nav form {
        float: left;
      }
      
      nav input[type="text"] {
        border: none;
        background-color: #444;
        color: #fff;
        padding: 10px;
        font-size: 16px;
      }
      
      nav button[type="submit"] {
        border: none;
        background-color: #444;
        color: #fff;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
      }
      
       
      
          </style>
    </head>
<body>
    <div class="column">
      <a href="monitorpagina.html">
        <img src="monitorpagina.htmlmonitor.png" style="width:40%">
        </a>
    </div>
    <div class="column">
      <a href="camerapagina.html">
        <img src="camerapagina.htmlcamera.jpg" style="width:40%">
      </div>
        </a>
    <div class="column">
      <a href="laptoppagina.html">
        <img src="laptoppagina.htmllaptop.jpg" style="width:40%">
        </a>
    <div class="column">
      <a href="laptopoplader.html">
        <img src="laptopoplader.htmllaptopoplader.jpg" style="width:40%">
  </div>
</body>
