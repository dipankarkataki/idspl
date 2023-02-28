<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Blogs</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>

        <style type="text/css">
        .blogShort{ border-bottom:1px solid #eaeaea;}
        .add{background: #333; padding: 10%; height: 300px;}

        .nav-sidebar { 
            width: 100%;
            padding: 8px 0; 
            border-right: 1px solid #ddd;
        }
        .nav-sidebar a {
            color: #333;
            -webkit-transition: all 0.08s linear;
            -moz-transition: all 0.08s linear;
            -o-transition: all 0.08s linear;
            transition: all 0.08s linear;
        }
        .nav-sidebar .active a { 
            cursor: default;
            background-color: #34ca78; 
            color: #fff; 
        }
        .nav-sidebar .active a:hover {
            background-color: #37D980;   
        }
        .nav-sidebar .text-overflow a,
        .nav-sidebar .text-overflow .media-body {
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis; 
        }

        .btn-blog {
            color: #ffffff;
            background-color: #37d980;
            border-color: #37d980;
            border-radius:0;
            margin-bottom:10px
        }
        .btn-blog:hover,
        .btn-blog:focus,
        .btn-blog:active,
        .btn-blog.active,
        .open .dropdown-toggle.btn-blog {
            color: white;
            background-color:#34ca78;
            border-color: #34ca78;
        }
        h2{color:#34ca78;}
        .margin10{margin-bottom:10px; margin-right:10px;}

        .article-ratings{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
        .article-ratings span{
            margin-right:15px;
        }

        .article-ratings span .fa-thumbs-o-up{
            color:blue;
        }

        .article-ratings span .fa-share-square-o{
            color:green;
        }
        
        .article-ratings span i{
            font-size:18px;
        }

        .article-ratings span:hover{
            cursor: pointer;
            transition: 0.3s;
            text-shadow: 0px 0px 15px #2a2a2b57;
        }
        </style>

        <!---- Search Style ----->
      <style>
        .search-outer-div{
          height: 100vh;
          width: 100%;
          background-color: #00000085;
          position: fixed;
          z-index:15;
          display: none;
        }
        .search-inner-div{
          height: 500px;
          width: 90%;
          background-color: #ffffff40;
          position: fixed;
          top: 20%;
          left: 5%;
          z-index:20;
          border-radius:5px;
        }
        .search-inner-div .content-area{
            position:absolute;
            top:30%;
            left:10%;
            padding:30px;
            display:flex;
            flex-direction: row;
        }
        .search-inner-div .content-area input{
          width: 900px;
          height: 70px;
          margin-right: -5px;
        }
        .search-inner-div .content-area #searchBtn{
          height:70px;
          padding-top: 24px;
        }
        #closeSearchBtn{
          font-size: 20px;
          color: black;
          float: right;
          background-color: #ffffff40;
          padding: 20px;
          border-radius: 0px 0px 0px 10px;
        }
        #closeSearchBtn:hover{
          background-color: white;
        }

       

      </style>

      <!---- End Search Style ----->

        <?php $page = 7;include 'header.php';?>

        <?php include '../database-connection/db-connect.php'; ?>

    </head>
    <div class="search-outer-div"> 
            
            <div class="search-inner-div">
            <a href="javascript:void(0);"  id="closeSearchBtn">
            <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <div class="content-area">
                <input type="text" name="searchQuery" id="searchQuery" class="form-control" autocomplete="off" placeholder="Type here..">
                <a id="searchBtn" href="#" class="btn btn-warning">
                <i class="fa fa-search"></i>
                Search</a>
            </div>
            </div>
        </div>
    <section class="breadcrumb-container container">
        
        <div class=" row">
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active"> Blogs</li>
                </ol>
                </nav>
            </div>
            <div class="col-sm-6">
                <div class="teamsocial text-right">
                    <ul class="list-unstyled list-inline">
                        <li><a   href="#" class="pagePrint" ><i class="fa fa-print"></i></a></li>
                        <li><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank" class="team_social_url"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/idspl/about/" target="_blank" class="team_social_url"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/IDSPL3" target="_blank" class="team_social_url"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                                    
                            
                    </div>
            </div>
        </div>
    </section>
    <section class="secondaryHeader">
        <div class="container">
            <div class="secondaryHeaderContent">
                <h4>Blogs</h4>
                <p>We are equipped with industry experts to help on your projects. Get in touch with us to know more</p>
            </div>
        </div>
    </section>

    <section class="portfolioList">
        <div class="container">
            <div class="row">

                <?php
                    $query = "SELECT * FROM `blog` ORDER BY views DESC;";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0){
                        // OUTPUT DATA OF EACH ROW
                        while($row = $result->fetch_assoc()){
                            echo '
                            
                                <div class="col-md-12 blogShort" style="padding-bottom: 15px;">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-4 col-sm-12">
                                            <img src="'.$row["cover_pic"].'" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                                        </div>
                                        <div class="col-md-8 col-sm-12">
                                            <h3 style="margin-bottom:10px;">
                                              <a href="submit_views.php?id='.$row["id"].'" style="text-decoration:none;color:black;">
                                              '.$row["title"].'
                                              </a> 
                                            </h3>
                                            <p><span style="font-weight:500;">Posted :</span> '.date('F jS, Y', strtotime($row["created_at"]) ).'</p>
                                            
                                            <article>
                                                <p>
                                                    '.$row["short_content"].'
                                                    <div class="article-ratings">
                                                        <div>
                                                        <span>
                                                            <img src="../images/view_icon.png" style="height:20px;width:20px;"> : '.$row["views"].'
                                                        </span>
                                                        <span>
                                                            <img src="../images/like_icon.png" style="height:20px;width:20px;"> : '.$row["like_count"].'
                                                        </span>
                                                        <span>
                                                            <img src="../images/comment_icon.png" style="height:20px;width:20px;"> : '.$row["comment_count"].'
                                                        </span>
                                                            
                                                        </div>
                                                        <a class="btn btn-blog" href="submit_views.php?id='.$row["id"].'" style="background-color: #e6a300;color: black;font-weight: 500;">READ MORE &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></a> 
                                                    </div>
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            
                            ';
                            // <span><i class="fa fa-comments-o" aria-hidden="true"></i> : '.$row["comment_count"].'</span>
                            // <span><i class="fa fa-share-square-o" aria-hidden="true"></i> : '.$row["share_count"].'</span>
                        }
                    } 
                    else {
                        echo "
                            <div class='text-center'>
                                <h4>Oops! No Blogs Found 😔</h4>
                            </div>
                        
                        ";
                    }
                
                    $conn->close();
                
                ?>
                
            </div>

        </div>
    </section>

	<?php include 'footer.php'; ?>
    
    <script src="../js/jquery.min.js"></script>
    
    <script src="../js/scripts2.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

      <script>
        $('#navSearchBtn').on('click', function(){
          $('.search-outer-div').addClass('d-block');
        });
      </script>

      <script>
        $('#closeSearchBtn').on('click',function(){
          $('.search-outer-div').addClass('d-none');
          $('.search-outer-div').removeClass('d-block');
        });
      </script>

      <!--  Search Query  -->
      <script>
        $('#searchQuery').typeahead({
          minLength: 4,
          source: function(query, result) {
              $.ajax({
                url:"../search.php",
                method:"GET",
                data:{query:query},
                dataType:"json",
                success:function(data){
                  result($.map(data, function(item){
                    return item.title
                  }));
                }
              })
          },
        })
      </script>
      
      <!--  Search Button  -->
      <script>
        $('#searchBtn').on('click', function(e){
          e.preventDefault();
          let search_value =  $('#searchQuery').val();

          $.ajax({
            url:"../submit_search.php",
            type:"POST",
            data:{search_value:search_value},
            // dataType:"json",
            success:function(data){
              let details = JSON.parse(data);

              if(details.type == 'blog'){
                window.location = `blogs/../submit_views.php?id=${details.id}`;
              }else if(details.type == 'portfolio'){
                window.location = '../'+details.location;
              }
            }
          });
        });
      </script>
  </body>

</html>
