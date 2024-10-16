<?php
include_once 'koneksi.php';

// Assuming 'no_pendaftaran' is a variable with the value you want to use in the query
$No_Pendaftaran = $_GET['No_Pendaftaran']; // Adjust this according to your needs

$sql = "DELETE FROM pendaftaran WHERE No_Pendaftaran='$No_Pendaftaran'";

if (mysqli_query($kon, $sql)) {
    // Redirect to read.php after successful deletion
    header("Location: read.php");
    exit(); // Make sure to exit to prevent further script execution
} else {
    echo "Error deleting record: " . mysqli_error($kon);
}

mysqli_close($kon);
?>