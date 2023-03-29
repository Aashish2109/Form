<?php
$servername="localhost:3307";
$username="root";
$password="";
$database_name="form";

//Database Connection
$conn = mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die('Connection Failed : '.$mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $emailid = isset($_POST['emailid']) ? $_POST['emailid'] : '';
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $telephone = $_POST['number'];
    $gender = $_POST['gender'];
    $dateofbirth = $_POST['dateofbirth'];
    $languages = isset($_POST['languages']) ? $_POST['languages'] : '';
    $continent = $_POST['continent'];

    $sql_query="INSERT INTO login (name, emailid, password, confirmpassword, number, gender, dateofbirth, languages, continent)
                VALUES ('$name', '$emailid', '$password', '$confirm_password', '$telephone', '$gender', '$dateofbirth', '$languages', '$continent')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "Registration Successfully...";
    }
    else{
        echo "Error: " . $sql_query . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
