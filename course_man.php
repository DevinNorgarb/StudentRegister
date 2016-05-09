<?php include('includes/header.php'); ?>
<?php
if(isset($_POST['submit']))
{
    $course_name = $_POST['course_name'];
    $course_descr= $_POST['course_descr'];
    $course_cost = $_POST['course_cost'];
    $course_duration = $_POST['course_duration'];
    
 $sql = "INSERT INTO course (course_name, course_descr, course_cost, course_duration) ";
 $sql .= "VALUES ('$course_name','$course_descr','$course_cost','$course_duration')";   
     
    $query = mysqli_query($connection, $sql);
    
if(!$query)
{
echo ("Houston we have a problem". mysqli_error($connection)); 
}else
{
echo "Great News, the course has been added";    
}

}

?>





<h3>Add a new course:</h3>
 <form method = "post" action="course_man.php">
        Course Name<br>
        <input type="text" name="course_name">
<br>
<br>
 <textarea rows="4" cols="40" name ="course_descr">

</textarea> 
<br>
<br>
        Course Price<br>
        <input type="text" name="course_cost">
<br>
<br>
        Course Duration<br>
        <input type="text" name="course_duration">
<br>
<br>
<input type = "submit" value="Submit" name="submit">
</form>

<br>
<br>


<table>
  
<thead>    
 <tr>
    <th>Course Name</th>
    <th>Description </th>
    <th>Cost</th>
    <th>Duration</th>
    <th>Options</th>
 </tr>
</thead> 

    
    <tbody>
    
<?php 
$sql = "SELECT * FROM course";

$query = mysqli_query($connection, $sql);
 if(!$query){echo "error". mysqli_error($connection);}


while($row = mysqli_fetch_assoc($query))
{
$course_id = $row['course_id'];
echo "<tr>";
echo "<td>".$row['course_name']."</td>";
echo "<td>".$row['course_descr']."</td>";
echo "<td>".$row['course_cost']."</td>";  
echo "<td>".$row['course_duration']."</td>";
    
    
echo "<td>".
"<a href='delete_course.php?deleteID={$course_id}'>Delete</a>".
"<br><br>".
"<a href='edit_course.php?edit_id={$course_id}'>Edit</a></td>";

    
    

echo "</tr>";

}
?>

    </tbody>


    </table>
    

