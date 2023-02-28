<?php

    include './database-connection/db-connect.php';

    $request = $_GET['query'];

    $search_query = " SELECT * FROM `blog` WHERE `title` LIKE '%".$request."%'; ";
    $result = $conn->query($search_query);

    $search_query2 = " SELECT * FROM `portfolio` WHERE `name` LIKE '%".$request."%'; ";
    $result2 = $conn->query($search_query2);

    $all_details = [];

    if($result->num_rows  > 0){

        while($row = $result->fetch_assoc()){

           $data = [
                'id' => $row['id'],
                'title' => $row['title'],
                'content_location' => $row['content_location'],
           ];
           array_push($all_details, $data);

        }
        echo json_encode($all_details);

    }else if($result2->num_rows  > 0){

        while($row2 = $result2->fetch_assoc()){

            $data = [
                'id' => $row2['id'],
                'title' => $row2['name'],
                'content_location' => $row2['content_link'],
            ];
            array_push($all_details, $data);

        }
        echo json_encode($all_details);
    
    }else{
        $data = [
            'title' => 'Oops! No Results Found.',
        ];
        array_push($all_details, $data);
        echo json_encode($all_details);
    }
    

    
    