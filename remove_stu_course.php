
<?php include('includes/header.php'); ?>
<?php 

$course_id = $_GET['course_id'];
$student_id = $_GET['student_id'];

 $sql = "DELETE FROM course_student WHERE student_id = {$student_id}";

$query = mysqli_query($connection, $sql);
if(!$query){
    
    echo "error". mysqli_error($connection);
    
}else{
 
    echo "Student {$student_id} has been deleted". "<a href='list.php'>Go back</a>";
    
}




