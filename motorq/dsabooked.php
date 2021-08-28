
<?php

require("includes/db.php");


$regnumber=$_GET['regnumber'];

$sql = "UPDATE students SET DSA='1' WHERE regno= '$regnumber' ";
    $result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM avail WHERE Subject='DSA'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $dsa= $row['availability'];

$dsa=$dsa-1;


$sql = "UPDATE avail SET availability='$dsa' WHERE Subject= 'DSA' ";
$result = mysqli_query($conn, $sql);


header("location: registration.php?regnumber=$regnumber");

?>