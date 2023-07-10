<?php
if(isset($_POST["submit"]))
{
    $id = $_POST["tid"];
    $a = $_POST["t1"];
    $b = $_POST["t2"];
    $c = $_POST["t3"];
    $d = $_POST["t4"];
    $e = $_POST["t5"];
    
    $con = mysqli_connect("localhost", "root", "", "submit");
    if(!$con)
        die("Connection failed");    
    $query = "INSERT INTO submit (id,company, job, salary, number, location) VALUES ('$id','$a', '$b', '$c', '$d', '$e')";    
    $r = mysqli_query($con, $query);
    if(!$r)
        die("Insertion failed");
    else
        echo '<script>alert("Successfully inserted")</script>';    
    mysqli_close($con);
}
?>
<?php
if(isset($_POST["edit"]))
{
    $id = $_POST["tid"];
    $a = $_POST["t1"];
    $b = $_POST["t2"];
    $c = $_POST["t3"];
    $d = $_POST["t4"];
    $e = $_POST["t5"];
    
    $con = mysqli_connect("localhost", "root", "", "submit");
    if(!$con)
        die("Connection failed");    
    $query = "UPDATE submit SET company='$a', job='$b', salary='$c', number='$d', location='$e' WHERE id='$id'";    
    $r = mysqli_query($con, $query);
    if(!$r)
        die("Update failed");
    else
        echo '<script>alert("Successfully updated")</script>';    
    mysqli_close($con);
}
?>

<?php
if(isset($_POST["delete"]))
{
    $id = $_POST["tid"];    
    $con = mysqli_connect("localhost", "root", "", "submit");
    if(!$con)
        die("Connection failed");    
    $query = "DELETE FROM submit WHERE id='$id'";    
    $r = mysqli_query($con, $query);
    if(!$r)
        die("Deletion failed");
    else
        echo '<script>alert("Successfully deleted")</script>';    
    mysqli_close($con);
}
?>



