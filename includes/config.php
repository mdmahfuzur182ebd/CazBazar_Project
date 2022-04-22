 <?php
    $servername = "127.0.0.1:3308";
    $username = "sajib";
    $password = "1234";
    $dbname = "carbazar";

    // Create connection
    $conn =mysqli_connect($servername, $username, $password, $dbname) or die("Database Conncetion faile");

    // if ($conn->connect_errno) {
    //     printf("Connect failed: %s\n", $conn->connect_error);
    //     exit();
    // }
    // printf("Connected successfully");
?>
