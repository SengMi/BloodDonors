<?php
include("dbcon.php");
if ($con) {
    echo "Database connected successfully!";
} else {
    echo "Database connection failed!";
}
?>
