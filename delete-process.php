<?php
include_once 'database.php';
$sql = "DELETE FROM teacher_login1 WHERE teachername='" . $_GET["teachername"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>