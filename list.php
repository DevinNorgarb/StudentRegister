<?php include('includes/header.php'); ?>


<h3>Please select a course you would like to see students enrolled in:</h3>    

<?php $sql = "SELECT * FROM course";

$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($result)){
   $course_name =  $row['course_name'];
   $course_id =  $row['course_id'];
 
echo  "<h4><a href='student_course.php?course_id={$course_id}'>$course_name</a><h4>"."<br>";


}

    
?>





    

        
         
     
            
    
        
    
  
    



