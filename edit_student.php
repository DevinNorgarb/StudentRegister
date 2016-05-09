<?php include('includes/header.php'); 

$student_id = $_GET['student_id']; ?>



 <?php
            
if(isset($_POST['submit'])){
    
    
$course_name = $_POST['course_name'];    
$surname = $_POST['surname'];    
$initials = $_POST['initials'];    
$firstname = $_POST['firstname'];    
$title = $_POST['title'];    
$dob = $_POST['dob'];    
$gender = $_POST['gender'];    
$language = $_POST['language'];    
$students_id = $_POST['id'];    
$home_tel = $_POST['home_tel'];    
$work_tel = $_POST['work_tel'];    
$cell_no = $_POST['cell'];    
$email = $_POST['email'];    
$postal_addr = $_POST['postal_addr'];  
  


  $sql = "UPDATE student SET ";
                    $sql .= "student_sname = '{$surname}', ";
                    $sql .= "student_initials = '{$initials}', ";
                    $sql .= "student_fname = '{$firstname}', ";
                    $sql .= "student_title = '{$title}', ";
                    $sql .= "student_dob =  '{$dob}', ";
                    $sql .= "student_gender = '{$gender}', ";
                    $sql .= "student_lang = '{$language}', ";
                    $sql .= "student_id_no = '{$students_id}', ";
                    $sql .= "student_telh = '{$home_tel}', ";
                    $sql .= "student_telw = '{$work_tel}', ";
                    $sql .= "student_cell = '{$cell_no}', ";
                    $sql .= "student_email = '{$email}', ";
                    $sql .= "student_address = '{$postal_addr}' ";
                    $sql .= "WHERE student_id = '{$student_id}'"; 
    
$query = mysqli_query($connection, $sql);
     if(!$query)
    {echo "damn" . mysqli_error($connection);
    
    }else{
 
    echo "Students personal particulars updated successfully". "<br>";
}

    
$max_id = mysqli_insert_id($connection);
$date = date('Y');   

      $sql = "UPDATE course_student SET ";
                $sql .= "course_id = '{$course_name}', ";
                $sql .= "year_start = '17 Jan $date', ";
                $sql .= "year_end = '28th November $date' ";
                $sql .= "WHERE student_id = '{$student_id}'"; 

    
$query = mysqli_query($connection, $sql);
    if(!$query)
    {
        echo "damn" . mysqli_error($connection);

    
}else{
     
        
     echo "Students course details updated successfully. The page will redirect you to the student manager in 7 seconds";
        
     header("Refresh: 7; url='student_man.php'");   
}
}
?>

<?php
$sql = "SELECT * FROM student WHERE student_id = {$student_id}";
$query = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($query)){
    
$student_id = $row['student_id'];
$student_sname = $row['student_sname'];
$student_initials = $row['student_initials'];
$student_fname = $row['student_fname'];
$student_title= $row['student_title'];    
$student_dob= $row['student_dob'];    
$student_gender = $row['student_gender'];    
$student_lang = $row['student_lang'];    
$student_id_no = $row['student_id_no'];    
$student_telh = $row['student_telh'];    
$student_telw = $row['student_telw'];    
$student_cell = $row['student_cell'];    
$student_email = $row['student_email'];    
$student_address = $row['student_address'];    
               

?>
<br>
<br>
 
   <form method ="post" action="">     
  <div style="width:1000px; margin:0 auto;"> 


<select name="course_name">
<option>Please Select a course</option>


<?php
$sql = "SELECT * FROM course";
$query = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($query))
{

echo "<option>".$row['course_id'].": " .$row['course_name']."</option>" . "<br>";  
   
}
    
    ?>
 </select>
<br>
<br>
      

        
        Surname<br>
        <input type="text" name="surname" value="<?php echo $student_sname ?>">
<br>
<br>
        Initials<br>
        <input type="text" name="initials" value="<?php echo $student_initials ?>">
<br>
<br>
        Full First Name<br>
        <input type="text" name="firstname" value="<?php echo $student_fname?>">
<br>
<br>
<radio name="title">
     Please Select students title:<br>
  <input type="radio" name="title" value="Mr"> Mr<br>
  <input type="radio" name="title" value="Mrs"> Mrs<br>
  <input type="radio" name="title" value="Ms"> Ms<br>
  <input type="radio" name="title" value="Dr."> Dr<br>
</radio>
<br>
<br>
        Date of Birth: Format DD/MM/YYYY<br>
        <input type="text" name="dob" value="<?php echo $student_dob ?>">
<br>
<br>
      
 <radio name="gender">
     Please Select students Gender:<br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</radio>
      
<br>
<br> 
      
  <?php echo "The current students language is : " .$student_lang ?> <br>
<select name="language"> 
    

<option>English</option>
<option>Afrikaans</option>
<option>Xhosa</option>
<option>Zulu</option>
</select>

<br>
<br>
        ID of Student<br>
 <input type="text" name="id"  value="<?php echo $student_id_no ?>">


<br>
<br>
        Home Telephone Number + Code<br>
        <input type="text" name="home_tel"  value="<?php echo $student_telh ?>">
<br>
<br>
        Work Telephone Number + Code<br>
        <input type="text" name="work_tel"  value="<?php echo $student_telw ?>">
<br>
<br>
        Cell Number<br>
        <input type="text" name="cell"  value="<?php echo $student_cell ?>">
<br>
<br>
        Email<br>
        <input type="text" name="email"  value="<?php echo $student_email ?>">
<br>
<br>
        Postal Address<br>
        <input type="text" name="postal_addr"  value="<?php echo $student_address ?>">
<br>
<br>
     
<?php } ?>
  <button name="submit">Register Student</button>

