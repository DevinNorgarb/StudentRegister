<?php include('includes/header.php'); 


$sql = "SELECT * FROM student ORDER BY student_id"; 
            $query = mysqli_query($connection, $sql); 

            while($row = mysqli_fetch_assoc($query)){
                
                

$student_id = $row['student_id'];
$student_sname = $row['student_sname'];
$student_initials = $row['student_initials'];
$student_fname = $row['student_fname'];
             
echo "<h3>"; 
                
echo "student_id: ".$student_id."<br>";
echo "student_sname: ".$student_sname."<br>";
echo "student_initials:".$student_initials ."<br>";
echo "student_fname: ".$student_fname."<br>";
                
echo "<a href ='delete.php?student_id={$student_id}'><button name='delete'>Delete</button></a>&nbsp";
                
echo "<a href ='edit_student.php?student_id={$student_id}'><button name='edit'>Edit</button></a>&nbsp";


                
                
echo "</h3>";
echo "<hr>";
                
                
                
}