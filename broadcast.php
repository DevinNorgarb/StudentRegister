<?php include('includes/header.php');


    
    
        
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

$sql = "SELECT * FROM student";
$query = mysqli_query($connection, $sql);
if(!$query){echo "error". mysqli_error($connection);}

while($row = mysqli_fetch_assoc($query)){
 
    echo $row['student_email'] . " , ";
    
}

?>">
    
    <br><br>

Subject:<br>
<input type="text" name="subject" placeholder="Enter Subject Here"><br><br>
Message:<br>
<textarea name= "message" rows="4" cols="50">
</textarea><br><br>
    
    <button name="submit">Submit</button>
</form>

<?php


$mail = mail($to, "Subject: $subject", $message );
if($mail){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed."; 
}
ini_set('display_errors',1);
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
