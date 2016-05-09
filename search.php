<?php include('includes/header.php'); ?>

<h3>Users Found:</h3>

<h4><a href="index.php">Return Home</a></h4>

<?php 

if(isset($_POST['submit_name'])){
if(empty($_POST['search_name'])){
echo "sorry no results found";
    
}else{
$search_name = $_POST['search_name'];
$sql = "SELECT * FROM student WHERE student_fname LIKE '%$search_name%' ";
    
$query = mysqli_query($connection, $sql);

    if(!$query){
        
        die("QUERY FAILED" . mysqli_error($connection));
            $count = mysqli_num_rows($query);

            if($count == 0) {

            echo "<h1> NO RESULT</h1>";
            }

    }else{
    
while($row = mysqli_fetch_assoc($query)){
 
echo "<hr>";
$student_id = $row['student_id'];
echo "First Name: ".$row['student_fname']. ".<br>"; 
echo "<a href='profile.php?student_id={$student_id}'>View more</a> info about ". $row['student_fname']. "?";
echo "<hr>";
echo "<br>";
echo "<br>";
}
}
}
}

?>





<?php 

if(isset($_POST['submit_id'])){
    
    if(empty($_POST['search_id'])){
        
echo "sorry no results found";
    
}else{

$search_id = $_POST['search_id'];
$sql = "SELECT * FROM student WHERE student_id LIKE '%$search_id%' ";
    
$query = mysqli_query($connection, $sql);

    if(!$query){
        
        die("QUERY FAILED" . mysqli_error($connection));
            $count = mysqli_num_rows($query);

            if($count == 0) {

            echo "<h1> NO RESULT</h1>";
            }

    }else{
    
while($row = mysqli_fetch_assoc($query)){
 
echo "<hr>";
$student_id = $row['student_id'];
echo "First Name: ".$row['student_fname']. ".<br>"; 
echo "<a href='profile.php?student_id={$student_id}'>View more</a> info about ". $row['student_fname']. "?";
echo "<hr>";
echo "<br>";
echo "<br>";
}
}
}
}
?>

