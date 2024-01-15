<?php
    include 'config.php';

    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        echo("Connection failed");
    } 
    $sql = "SELECT * FROM `birthday-guests`";
    $result = $conn->query($sql);
    $count = 0;
    $row_cnt = $result->num_rows;

    
    if ($row_cnt > 0) {
        while($row = $result->fetch_assoc()) {
            $count += $row["nombre"];
        }
    }
    printf("%d.\n", $count);
?>