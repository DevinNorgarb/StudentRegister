<?php include('includes/header.php'); ?>



<br>
<br>

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
    
     $course_name = mysqli_real_escape_string($connection,$course_name);
     $surname = mysqli_real_escape_string($connection,$surname);
     $initials = mysqli_real_escape_string($connection,$initials);
     $firstname = mysqli_real_escape_string($connection,$firstname);
     $title = mysqli_real_escape_string($connection,$title);
     $dob = mysqli_real_escape_string($connection,$dob);
     $gender = mysqli_real_escape_string($connection,$gender);
     $language = mysqli_real_escape_string($connection,$language);
     $students_id = mysqli_real_escape_string($connection,$students_id);
     $language = mysqli_real_escape_string($connection,$language);
     $home_tel = mysqli_real_escape_string($connection,$home_tel);
     $work_tel = mysqli_real_escape_string($connection,$work_tel);
     $email    = mysqli_real_escape_string($connection,$email);
     $postal_addr = mysqli_real_escape_string($connection,$postal_addr);
    
    
  


$sql = "INSERT INTO student (student_sname, student_initials, student_fname, student_title, student_dob, student_gender, student_lang, student_id_no, student_telh, student_telw, student_cell, student_email, student_address ) ";  
$sql .="VALUES('$surname','$initials','$firstname','$title','$dob','$gender','$language',$students_id,'$home_tel','$work_tel','$cell_no','$email','$postal_addr') "; 
  
    
$query = mysqli_query($connection, $sql);   
$max_id = mysqli_insert_id($connection);
$year = date('Y');   

    
$sql  ="INSERT INTO course_student (student_id, course_id, year_start, year_end, final_mark) ";
$sql .="VALUES('$max_id', '$course_name', '17 Jan $year','28 November $year', '')";
    
$query = mysqli_query($connection, $sql);
    if(!$query)
    {echo "damn" . mysqli_error($connection);
    }else{
     
        header('Location: register_success.php');
    }

}
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
        <input type="text" name="surname">
<br>
<br>
        Initials<br>
        <input type="text" name="initials">
<br>
<br>
        Full First Name<br>
        <input type="text" name="firstname">
<br>
<br>
      <radio name="title">
     Please Select your Gender:<br>
  <input type="radio" name="title" value="Mr"> Mr<br>
  <input type="radio" name="title" value="Mrs"> Mrs<br>
  <input type="radio" name="title" value="Ms"> Ms<br>
  <input type="radio" name="title" value="Dr."> Dr<br>
</radio>
<br>
<br>
        Date of Birth: Format DD/MM/YYYY<br>
        <input type="text" name="dob">
<br>
<br>
  <?php if( empty($_POST['gender'])){
    echo "Please enter a gender...";
      
    ?>    
 <radio name="gender">
     Please Select your Gender:<br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</radio>
      <?php } ?>
      
<br>
<br> 
      
    Please Select your Language: <br>
<select name="language">  
<option>Language of Correspondance</option>
<option>English</option>
<option>Afrikaans</option>
<option>Xhosa</option>
<option>Zulu</option>
</select>

<br>
<br>
        ID of Student<br>
 <input type="text" name="id">


<br>
<br>
        Home Telephone Number + Code<br>
        <input type="text" name="home_tel">
<br>
<br>
        Work Telephone Number + Code<br>
        <input type="text" name="work_tel">
<br>
<br>
        Cell Number<br>
        <input type="text" name="cell">
<br>
<br>
        Email<br>
        <input type="text" name="email">
<br>
<br>
        Postal Address<br>
        <input type="text" name="postal_addr">
<br>
<br>
     

  <button name="submit">Register Student</button>

