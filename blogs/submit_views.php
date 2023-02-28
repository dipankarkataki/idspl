<?php
    include '../database-connection/db-connect.php';

    try{
        $url_data = $_GET['id'];
        $query = " SELECT * FROM `blog` WHERE `id` = $url_data;" ;
       
        $result = $conn->query($query);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $_count = $row['views'] + 1;
                $sql =  " UPDATE blog SET views = $_count WHERE id = $url_data ;";
                if($conn->query($sql) === true){
                    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
                        $url = "https://";   
                    }else{
                        $url = "http://";   
                    }  
                    // Append the host(domain name, ip) to the URL.   
                    $url.= $_SERVER['HTTP_HOST'].'/';   
                    
                    // Append the requested resource location to the URL   
                    $url.= $row['content_location'].'?id='.$row['id'];   
                    header("Location: ".$url );
                } else{
                    echo "Oops! Something Went Wrong.";
                }
            }
        }
        
    }catch(\Exception $e){
        echo 'Oops! Something Went Wrong.';
    }