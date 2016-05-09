<?php include('includes/header.php'); ?>


<?php

//catches the student ID out of the URL

        $delete_id = $_GET['deleteID'];

        $sql = "DELETE FROM course WHERE course_id = {$delete_id}";      
       
        $query = mysqli_query($connection, $sql);  


//quick check to make sure things are working

if(!$query)
{
    
 mysqli_error($connection, $query) ;
    
}else
{
    
//take me back!!
   echo "Successfully deleted course" . "<br>";
        
    echo "<a href='course_man.php'>Go back to course manager</a>";   
}