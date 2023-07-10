<?php
if(isset($_POST["register"]))
{
    $cid = $_POST["job"];
    $a = $_POST["name"];
    $b = $_POST["gender"];
    $c = $_POST["qualification"];
    $d = $_POST["dob"];
    $e = $_POST["mobile"];
    $f = $_POST["resume"];
    
    $con = mysqli_connect("localhost", "root", "", "submit");
    if(!$con)
        die("Connection failed");
    
    $query = "INSERT INTO candidate (title, name, job, gender, qualification, dob, mobile, resume) VALUES ('$cid', '$a', '$b', '$c', '$d', '$e', ''$f '')";
    
    $r = mysqli_query($con, $query);
    if(!$r)
        die("Insertion failed");
    else
        echo '<script>alert("Successfully inserted")</script>';
    
    mysqli_close($con);
}
?>
