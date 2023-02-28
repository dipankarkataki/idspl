<?php
    include '../database-connection/db-connect.php';

    try{
        $url_data = $_GET['id'];
        $query = " SELECT * FROM `blog` WHERE `id` = $url_data;" ;
       
        $result = $conn->query($query);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $_count = $row['like_count'] + 1;
                $sql =  " UPDATE blog SET like_count = $_count WHERE id = $url_data ;";
                if($conn->query($sql) === true){
                    header("Location: " .$_SERVER['HTTP_REFERER'] );
                } else{
                    echo "Oops! Something Went Wrong.";
                }
            }
        }
        
    }catch(\Exception $e){
        echo 'Oops! Something Went Wrong.';
    }