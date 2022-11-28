
<?php
    include 'conn.php';
    include 'load_data.php';

    $conn = new conn();
    $connect =  $conn->DBConnect(); 

    $process = new process($connect);
?>