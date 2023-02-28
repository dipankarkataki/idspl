<?php
    include './database-connection/db-connect.php';

    $query = $_GET['search_query'];
    return $query;
    // $filterResult = "SELECT name,content_link  FROM  portfolio where('name', 'LIKE', '%' . $query . '%');";
    // if($conn->query($filterResult) === true){
    //     $result = $conn->query($filterResult);
    //     while($row = $result->fetch_assoc()){
    //         return json_encode($row);
    //     }
    // }else{
    //     return json_encode($conn->error);
    // }