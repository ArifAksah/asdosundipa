<?php
// include database connection file
$conn = mysqli_connect("localhost", "root", "", "asdosundipa");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM terima WHERE id=$id");
$result = mysqli_query($conn, "DELETE FROM user WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=terima");
header("Location:index.php?page=viewasdos");
?>