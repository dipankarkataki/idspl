<?php
    include './database-connection/db-connect.php';

    $search_value = $_POST['search_value'];

    $query = " SELECT * FROM `blog` WHERE `title` = '".$search_value."' ; ";
    $result = $conn->query($query);

    $query2 = " SELECT * FROM `portfolio` WHERE `name` = '".$search_value."' ; ";
    $result2 = $conn->query($query2);
       
    if($result->num_rows  > 0){
        while($row = $result->fetch_assoc()){
            echo json_encode(['location' => $row['content_location'], 'id' => $row['id'], 'type' => $row['type']]);
        }
    }else if($result2->num_rows  > 0){
        while($row2 = $result2->fetch_assoc()){
            echo json_encode(['location' => $row2['content_link'], 'id' => $row2['id'], 'type' => $row2['type']]);
        }
    }