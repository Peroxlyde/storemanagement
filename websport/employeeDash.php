<?php
// adminLogin.php

// Database connection
$conn = new mysqli('localhost', 'root', 'root', 'inventorymanagement');
if($conn->connect_errno){
    echo $conn->connect_errno.":".$conn->connect_error;
}
$q="select * from admin";
if ($result = $conn->query($q)){
    echo '<table border = "1">';
    while($row = $result->fetch_array()){
        echo '<tr>';
        echo '<td>'.$row['adminID'].'</td>';
        echo '<td>'.$row['aUsername'].'</td>';
        echo '<td>'.$row['aPassword'].'</td>';
        echo '<td>'.$row['aName'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
    $result->free();
}else{echo 'retiveal failed:'.$conn->error;}

?>

