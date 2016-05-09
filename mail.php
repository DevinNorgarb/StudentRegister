<?php include('includes/header.php'); ?>




  <h3>Please select a course to send a mail to:</h3>  


<h4><a href="broadcast.php"> Send A message to all enrolled students</a></h4><br>

<?php $sql = "SELECT * FROM course";

$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($result)){
   $course_name =  $row['course_name'];
   $course_id =  $row['course_id'];
 
echo  "<h4><a href='send_mail.php?course_id={$course_id}'>$course_name</a><h4>"."<br>";


}

    
?>
 