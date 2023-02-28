<div class="article-ratings">
    <?php
        $url_data = $_GET['id'];
        $query = "SELECT * FROM `blog` WHERE `id` = $url_data; ";
        $result = $conn->query($query);
        if ($result->num_rows > 0){

        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc()){
            echo '<div style="display:flex; flex-direction:row;flex-wrap:wrap;justify-content:space-between;align-items:center;">
                    <div>
                    <span>
                        <a href="#" style="text-decoration:none;color:black;"><img src="../images/view_icon.png" style="height:20px;width:20px;"> : '.$row["views"].'</a>
                    </span>
                    <span>
                        <a href="submit_like.php?id='.$row["id"].'"><img src="../images/like_icon.png" style="height:20px;width:20px;"> : '.$row["like_count"].'</a>
                    </span>
                    <span>
                        <a href="submit_like.php?id='.$row["id"].'"><img src="../images/comment_icon.png" style="height:20px;width:20px;"> : '.$row["comment_count"].'</a>
                    </span>
                    
                    </div>
                    
                    <h5>
                    <strong>Posted</strong> : '.date('F jS, Y', strtotime($row["created_at"]) ).'
                    </h5>
                </div>';
        }
        }

        $conn->close();
    ?>
</div>