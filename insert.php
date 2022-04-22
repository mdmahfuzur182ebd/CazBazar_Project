<?php

require_once('config.php');

$ad = $_REQUEST['ad'];
$model = $_REQUEST['model'];
$year = $_REQUEST['year'];
$year_used = $_REQUEST['year_used'];
$company = $_REQUEST['company'];
$subbrand = $_REQUEST['subbrand'];
$cc = $_REQUEST['cc'];
$engine = $_REQUEST['engine'];
$tyre = $_REQUEST['tyre'];
$license = $_REQUEST['license'];
$asking_price = $_REQUEST['asking_price'];
$original_price = $_REQUEST['original_price'];
$your_location = $_REQUEST['your_location'];


$sql = "INSERT INTO product  VALUES ('$ad', '$model', '$year','$year_used', '$company', '$subbrand', '$cc', '$engine', '$tyre', '$license','$asking_price', '$original_price', '$your_location')";


if (mysqli_query($conn, $sql)) {
    echo "Data inserted";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
