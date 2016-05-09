<?php include('includes/header.php');

$course_id = $_GET['course_id'];

?>




<?php
//var_dump($course_id);

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

    
//
//echo $row['student_fname']. "<br>";
//echo $row['student_email']. "<br>";

}

}
?>

















<?php
if(isset($_POST['submit'])){
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];
}
?>
<form method="post" action="">
To:<br>
<input type="text" name="to" value="<?php
//var_dump($course_id);

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

    
echo $row['student_email']. " , ";

}

}
                                    
                                    
?>"><br><br>

Subject:<br>
<input type="text" name="subject" placeholder="Enter Subject Here"><br><br>
Message:<br>
<textarea name= "message" rows="4" cols="50">
</textarea><br><br>
    
    <button name="submit">Submit</button>
</form>

<?php


//$mail = mail($to, "Subject: $subject", $message );
//if($mail){
//  echo "Thank you for using our mail form";
//}else{
//  echo "Mail sending failed."; 
//}
//ini_set('display_errors',1);
//    
//    
//    
//    
//    
//    
//    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    