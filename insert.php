<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>DATA OF EMPLOYEES</h1>

    <form action="" method="post">
        ID: <input type="number" name="id" id="id" placeholder="Enter a ID ">
        Name: <input type="text" name="name" id="name" placeholder="Enter a Name ">
        Email: <input type="email" name="email" id="email" placeholder="Enter a Email ">
        Number: <input type="text" name="number" id="number" placeholder="Enter a Number ">
        <button>Sumbit</button>
    </form>
    
</body>
</html>

<?php
    include("./connection.php");
    if (isset($_POST["id"])){
    $emp_id = $_POST["id"];
    $emp_name = $_POST["name"];
    $emp_email = $_POST["email"];
    $emp_number = $_POST["number"];

    $sql = "insert into scurd (emp_id ,emp_name ,emp_email ,emp_number ) values('$emp_id','$emp_name','$emp_email','$emp_number')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo"data is inserted";
    }
    else{   
        echo"data is not insert";
    }
}
?>

