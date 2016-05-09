<?php include('db.php') ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>UNISA Admin</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">UNISA Admin</a></h1>

        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
<!--          <li class="selected"><a href="index.php">Home</a></li>-->
          <li><a href="course_man.php">Course Manager</a></li>
          <li><a href="student_man.php">View all students</a></li>
          <li><a href="student_reg.php">Student Registration</a></li>
          <li><a href="list.php">Manage Registrations</a></li>
          <li><a href="mail.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        
 
        <h3>Search by Student Name</h3>
        <form method="post" action="search.php" id="search_form">
          <p>
            <input class="search" type="text" name="search_name" placeholder="Enter students name" />
            <button name="submit_name">Submit</button>
          </p>
        </form>
          
          
  
        <h3>Search by Student ID</h3>
        
        <form method="post" action="search.php" id="search_form">
        <p>
        <input class="search" type="text" name="search_id" placeholder="Enter student  number." />
            <button name="submit_id">Submit</button>
        </p>
        </form>
          
          
          
          
      </div>
    
    
