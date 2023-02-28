<?php
    include '../database-connection/db-connect.php'; 

    // if (isset($_POST['submit'])) {
        try{

            $email = $_POST['email'];
            $name = $_POST['username'];
            $blog_id = $_POST['blog_id'];
            $comment = $_POST['comment'];

            $query = " SELECT * FROM `blog` WHERE `id` = $blog_id;" ;
            
            $insert_query = "INSERT INTO blog_comment (name, email, blog_id, comment)
                VALUES ('".$name."', '".$email."', '".$blog_id."', '".$comment."')";

            $conn->query($insert_query);
    
            $result = $conn->query($query);
            
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_count = $row['comment_count'] + 1;
                    $sql =  " UPDATE blog SET comment_count = $_count WHERE id = $blog_id ;";
                    $conn->query($sql);
                    if( $conn->query($sql) === true){
                        // header("Location: " .$_SERVER['HTTP_REFERER'] );
                        echo json_encode(['message' => 'Comment Posted Successfully', 'status' => 1]);
                    } else{
                        echo "Oops! Something Went Wrong.";
                    }
                }
            }
            
        }catch(Exception $e){
            echo 'Oops! Something Went Wrong.';
        }
    // }
    