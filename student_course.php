<?php include('includes/header.php'); ?>

<?php
      
    
       
$course_id = $_GET['course_id'];

$sql = "SELECT * FROM course_student WHERE course_id = {$course_id}";
$query = mysqli_query($connection, $sql);
if(!$query){echo "error". mysqli_error($connection);}




$ids = array();
while ($row = mysqli_fetch_assoc($query)) {
$ids[] = $row['student_id'];
}
if (!$ids) {
   
    echo "<h2>".'Sorry no students have currently signed up for this course... Please improve your advertising'."</h2>";
    
}else{
    
$sql = 'SELECT * FROM student WHERE student_id IN (' . join(', ', $ids) . ')';


$query = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($query)){

    

echo $row['student_fname']. "<br>";
echo $row['student_id']. "<br>";
echo $row['student_dob']. "<br>";
echo "<a href='remove_stu_course.php?student_id={$row['student_id']}&course_id={$course_id}'><button>Remove</button></a>";  
echo "<hr>";
}

}































//while($row = mysqli_fetch_assoc($query)){
//
//$id = $row['student_id'];
//
//}
// 
//
//
//
//
//    $sql = "SELECT * FROM student WHERE student_id IN ('$id')";
//    
//    $query = mysqli_query($connection, $sql);
// 
//        if(!$query){echo "error". mysqli_error($connection);}
//      
//        while($row = mysqli_fetch_assoc($query)){
//            
//        echo $row['student_fname']. "<br>";
//        
               
            
        
    
    
    
//}
         
////echo $ids;
//var_dump($ids);
//var_dump($sql)  ;   
////
////





        

                    
            
        