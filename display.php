<?php
include("./connection.php");

$sql = "select * from scurd";
$result = mysqli_query($con,$sql);
if ($result){
    echo "<table border ='1'>";
    echo "<tr>
    <th>ID</th>
    <th>Nmae</th>
    <th>EMAIL</th>
    <th>NUMBER</th>
    <th>ACTION</th>
    </tr>";
   while( $row = mysqli_fetch_row($result)){
    echo "<tr>";
     echo "<td> $row[0] </td>";
     echo "<td> $row[1] </td>";
     echo "<td> $row[2] </td>";
     echo "<td> $row[3] </td>";
     echo "<td> <button>Edit</button>|<a href='delete.php?id=$row[0]'><button>Delete</button></td>";



     echo "</tr>";

   }
   echo "</table>";
   
}
else{
    echo"not diaplay";
}
?>