<?php include('includes/header.php'); ?>


<?php

$course_id = $_GET['edit_id'];
$sql = "SELECT * FROM course WHERE course_id = {$course_id}";

$query = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($query))
{

$course_name = $row['course_name'];
$course_descr =  $row['course_descr'];
$course_cost = $row['course_cost']; 
$course_duration = $row['course_duration'];
    
    
}

if(isset($_POST['submit']))
{
    
    
    $course_name = $_POST['course_name'];
    $course_descr= $_POST['course_descr'];
    $course_cost = $_POST['course_cost'];
    $course_duration = $_POST['course_duration'];
    
    
                $sql = "UPDATE course SET ";
                $sql .= "course_name = '{$course_name}', ";
                $sql .= "course_descr = '{$course_descr}', ";
                $sql .= "course_cost = '{$course_cost}', ";
                $sql .= "course_duration = '{$course_duration}' ";
                $sql .= "WHERE course_id = '{$course_id}'";                
                
     
    $query = mysqli_query($connection, $sql);
    
if(!$query)
{
echo ("Houston we have a problem". mysqli_error($connection)); 
}else
{
header('Location: course_man.php');  
}
exit;
}

?>

<h3>Edit course:</h3>
 <form method = "post" action="">
        Course Name<br>
        <input type="text" name="course_name" value="<?php echo $course_name; ?>">
<br>
<br>
 <textarea rows="4" cols="40" name ="course_descr">
<?php echo $course_descr; ?>
</textarea> 
<br>
<br>
        Course Price<br>
        <input type="text" name="course_cost" value="<?php echo $course_cost; ?>">
<br>
<br>
        Course Duration<br>
        <input type="text" name="course_duration" value="<?php echo $course_duration; ?>">
<br>
<br>
<input type="submit" value="Submit" name="submit" >
</form>

<br>
<br>
