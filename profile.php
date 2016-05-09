<?php include('includes/header.php') ?>


<table>
  
<thead>    
 <tr>
    <th>Student ID</th>
    <th>Surname</th>
    <th>Initials</th>
    <th>Firstname</th>
    <th>Title</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Language</th>
    <th>Id No.</th>
    <th>Tel-Home</th>
    <th>Tel-Work</th>
    <th>Cell</th>
    <th>Email</th>
    <th>Postal Address</th>

 </tr>
</thead> 

    
    <tbody>
    
<?php


$student_id = $_GET['student_id'];

$sql = "SELECT * FROM student WHERE student_id = {$student_id}";
$query = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($query)){
    
    echo "<tr>";
echo "<td>".$student_id = $row['student_id']. "</td>";
echo "<td>".$student_sname = $row['student_sname']. "</td>";
echo "<td>".$student_initials = $row['student_initials']. "</td>";
echo "<td>".$student_fname = $row['student_fname']. "</td>";
echo "<td>".$student_title= $row['student_title']. "</td>";    
echo "<td>".$student_dob= $row['student_dob']. "</td>";    
echo "<td>".$student_gender = $row['student_gender']. "</td>";    
echo "<td>".$student_lang = $row['student_lang']. "</td>";    
echo "<td>".$student_id_no = $row['student_id_no']. "</td>";    
echo "<td>".$student_telh = $row['student_telh']. "</td>";    
echo "<td>".$student_telw = $row['student_telw']. "</td>";    
echo "<td>".$student_cell = $row['student_cell']. "</td>";    
echo "<td>".$student_email = $row['student_email']. "</td>";    
echo "<td>".$student_address = $row['student_address']. "</td>";   

echo "</tr>";


}

?>

    </tbody>


    </table>