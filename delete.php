<?php include('includes/header.php'); 
//includes database connection ?>

<?php

//catches the student ID out of the URL

        $student_id = $_GET['student_id'];

        $sql = "DELETE FROM student WHERE student_id = {$student_id}";      
       
 $query = mysqli_query($connection, $sql);  

  $sql = "DELETE FROM course_student WHERE student_id = {$student_id}";
    
 $query = mysqli_query($connection, $sql);


//quick check to make sure things are working

if(!$query){
    
 mysqli_error($connection) ;
    
}else{
    
//take me back!!
  echo "Student ID: {$student_id} has successfully been deleted. The page will redirect you back to the student manager in 7 seconds"."<br>";
    
  echo "<a href='student_man.php'><button>Leave Now?</button></a>";    
    
  header("Refresh: 7; url='student_man.php'");  
}

