<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Blog  - IoT and its Uses in Generating and Managing Electricity</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.min.js"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>
        <!—- ShareThis BEGIN -—>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d6e345816b81b0012138f61&product=sticky-share-buttons' async='async'></script>
<!—- ShareThis END -—>

      <?php $page=7; include 'header.php'; ?>
      <?php include '../database-connection/db-connect.php'; ?>

      <style>
        .article-ratings{
            margin-top: 25px;
            margin-bottom: 15px;
            margin-left: 25px;
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
            font-size:20px;
        }

        .article-ratings span:hover{
            cursor: pointer;
            transition: 0.3s;
            text-shadow: 0px 0px 15px #2a2a2b57;
        }
      </style>
      <style>
        h5{
            margin-bottom: 20px;
            color: #565151;
        }
        ::placeholder{
          padding-top: 20px;
          margin-left: 10px;
        }
        #comment{
            width:100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .comment-send-btn{
            padding-left: 50px;
            padding-right: 50px;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 13px;
        }
        .comment-display-area .user-details{
            display:flex;
            flex-direction:row;
            align-items: center;
            justify-content: flex-start;
            margin-top: 30px;
        }
        .comment-display-area .user-details img{
            border-radius: 50%;
            height: 40px;
            width: 40px;
            margin-right:20px;
        }

        #postCommentModal{
            margin-top:100px;
        }
      </style>
      <?php include 'searching_inside_blog_page.php'; ?>
<section class="breadcrumb-container container">
          <div class=" row">
		   <div class="col-sm-6">
             <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="blogs.php">Blog</a></li>
				<!-- <li class="breadcrumb-item active"> Baseline Scenario for Energy Performance of Residential Buildings in the Cold Climatic Zone of India</li> -->
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
              <div class="secondaryHeaderContent portfolioSecondaryHeader">
                 <a href="blogs.php"> <img src="../images/backButton.svg"/></a>
                  <h4>IoT and its Uses in Generating and Managing Electricity</h4>
                  <!-- <p>Building Energy Efficiency</p> -->
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="../images/new-IOT.jpg" /></li>
                    <!-- <li class="slider-item"><img src="./images/isee2.jpg" /></li> -->
                  </ul>
                  <?php include 'article-rating.php' ?>
<!--                   <div class="individualPortfolioDetails">
                      <h4>CLient : <span>Greentech Knowledge Solutions Pvt. Ltd;</span></h4>
                      <h4>June 2016 to October 2016</h4>
                  </div> -->
                  <div class="individualPortfolioDes">
                    <p>
We live in a world where technology is more deeply entrenched in our daily lives than ever before. The technological advancements have been so rapid and their effects so profound, that they have changed the very nature of our existence. The immense effect of technology on the environment is undeniable. In fact, we have moved past the adverse effects of technology and are now in an age where it is evolving to imitate nature and advance our environmental goals. However, in most such discussions, technology is seen as a distant, industrial phenomenon, irrelevant to our daily lives. We forget the trivial ways we can use technology to contribute to ecological stability. This is where Internet of Things comes in. 
. <br><br>
Internet of things (IoT), as the name suggests, are things connected by the Internet that collect data and use it to optimise usage. It is innovation in devices or systems that surround us and are rooted in our every day.  
<br><br>
When we talk of utilities related to our daily lives, electricity is probably the first one that comes to mind. It is the one thing that can often make or break our day. IoT can be put to use in various ways to streamline electricity as a resource. The basic use of IoT in this field is to collect data related to demand and supply of electricity and then use this data to optimise supply. This ensures that wastage is minimised, cost reduced, and resources more equitably distributed. For instance, we already know that LEDs are much more cost-effective and have a longer life than other lighting. Add IoT to it and we have smart LEDs, which monitor usage and sense other light sources. By using this data, smart LEDs can mimic natural light cycles and moderate their brightness based on the availability of natural light. They can further sense when a room is empty and switch off lighting as required. For housing that makes use of solar energy, connecting the solar panels to an IoT systems makes the system more effective. An IoT sensor can make use of weather updates to maximise production. It can also provide maintenance-related notifications to users in real time and facilitate repair. <br><br>
<img src="../images/iot1.jpg" /><br><br>
The most popular use of IoT is the smart meter. Unlike regular meters, smart meters not only record the consumption of electricity, but also send this information back to the supplier using IoT technology. This technology should be ideally used in conjunction with the implementation of the demand-response program. This program collects data on the usage of electricity and identifies the peak hours of usage. By using this information, consumers are incentivised to change their hours of usage. This not only reduces the load off the grid but also reduces cost. Electricity suppliers often offer lower rates off-peak hours. More importantly, as the load is reduced during the peak hours, suppliers don’t need to use expensive generators to keep up the supply. Thus, the overall cost of electricity supply reduces.<br><br>
<img src="../images/iot4.jpg" />
<br><br>
Another effective use of IoT would be in microgrids. A microgrid is a localized group of electricity sources and sinks (loads) that typically operates connected to and synchronous with the centralized grid (macrogrid), but can also disconnect and maintain operation autonomously. Microgrids produce electricity from a combination of sources along with electricity from the main grid. They usually supply electricity locally but can also recharge electricity back to the main grid. With the use of IoT technology, the utility of microgrids increase manifold. IoT enables them to collect data on:<br><br>

1•	Electricity produced from various sources<br>
2•	Demand of electricity<br>
3•	Peak Usage hours<br><br>
 
With this data, IoT-driven grid management systems can help operations perform critical functions, including: <br><br>

    1.  optimizing line voltage to minimize energy losses and line damage;<br>
    2.  locating the source of sags, surges and outages;<br>
    3.  improving load balancing, restoring services faster and making safer override decisions;<br>
    4.  identifying the source of technical and non-technical losses in the system, reducing the costs of service; and<br>
    5.  lowering outage investigation times by isolating fault locations
<br><br>
These are just some of the ways IoT can be incorporated into existing innovations. Technology is advancing everyday and delivering new innovations to our doorstep. IoT is one such leap that enables us to smartify every aspect of our life. It lets us make informed choices and utilise resources optimally. With knowledge comes power, and the data-driven approach that IoT espouses proves that beyond doubt.<br><br>
                    </p>
                  </div>
              </div>
          </div>
      </section>

      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
              <?php
                  $url_data = (int)$_GET['id'];
                  
                  echo ' 
                    <div class="portfolionavList">
                      <a class="prev-link" href="circular-economy5.php?id='.($url_data-1).'">
                        <h5><img src="../images/arrow-left.svg" alt=""> Previous Blog</h5>
                        <h4>Circular Economy</h4>
                      </a>
                    </div>
                    <div class="portfolionavList">
                      <a class="next-link" href="aquifer7.php?id='.($url_data+1).'">
                        <h5>Next Blog <img src="../images/arrow-right.svg" alt=""></h5>
                        <h4>Aquifer Mapping and Management and Groundwater Recharge</h4>
                      </a>
                    </div>';
              ?>
            </div>
          </div>
      </section>

      <script src="../js/jquery.min.js"></script>
      <script src="../js/scripts.js"></script>
      
      <section class="container comment-section">
      <?php
        include '../database-connection/db-connect.php';
        $url_data = (int)$_GET['id'];
        $comment_count_query = "SELECT * FROM `blog` WHERE `id` = $url_data;";
        $result2 = $conn->query($comment_count_query);
        $comment_count = 0;

        while($row2 = $result2->fetch_assoc()){
          $comment_count = $row2['comment_count'];
        }

       echo '<h5>Comments ('. $comment_count.')</h5>';
      ?>
      <div class="comment-text-area">
        <!-- <form action="submit_comment.php" method="POST"> -->
          <input type="hidden" name="blog_id" value="'.$url_data.'">
          <textarea name="comment" id="comment" rows="5" placeholder="Type your valuable comment here." required></textarea>
          <button name="submit" class="btn btn-md btn-primary comment-send-btn" data-toggle="modal" data-target="#postCommentModal">post</button>
        <!-- </form> -->
          
      </div>

      <div id="postCommentModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

              <form id="commentModalForm"> 
                <div class="form-group">
                      <label for="">Enter Full Name</label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="e.g Jhon Doe" required>
                  </div>
                  <div class="form-group">
                      <label for="">Enter Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="e.g abc@gmail.com" required>
                  </div>
                  
                  <p style="font-size:12px;font-weight:500;"> <span style="color:red;">Note:</span> Fullname and Email is required to post a comment.</p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" id="commentModalSaveBtn" >Save</button>
                </div>
              </form>

          </div>
        </div>
      </div>

      <script>
          $('#commentModalSaveBtn').on('click', function(e){
              e.preventDefault();

              $('#commentModalSaveBtn').attr('disabled', true);
              $('#commentModalSaveBtn').text('Please Wait...',);

              let username = $('#username').val();
              let email = $('#email').val();
              let comment = $('#comment').val();

              if(username == ''){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Username is required',
                  })
                  $('#commentModalSaveBtn').attr('disabled', false);
                  $('#commentModalSaveBtn').text('Save',);
              }else if(email == ''){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops!',
                  text: 'Email is required',
                })
                $('#commentModalSaveBtn').attr('disabled', false);
                $('#commentModalSaveBtn').text('Save',);
              }else if(comment == ''){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops!',
                  text: 'Comment is required',
                })
                $('#commentModalSaveBtn').attr('disabled', false);
                $('#commentModalSaveBtn').text('Save',);
              }else{
                $.ajax({
                  url : 'submit_comment.php',
                  type:'POST',
                  data:{
                    username : username,
                    email : email,
                    comment : comment,
                    blog_id : <?php echo (int)$_GET['id'] ?>,

                  },
                  success:function(data){
                    console.log(data)
                    let details = JSON.parse(data);
                    if(details.status === 1){
                      Swal.fire({
                        icon: 'success',
                        title: 'Great!',
                        text: details.message,
                        confirmButtonText: 'Close!'
                      }).then((result) => {
                          if (result.isConfirmed) {
                            location.reload(true);
                          }
                        })
                    }else{
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something Went Wrong. Failed To Post Comment',
                      })
                      $('#commentModalSaveBtn').attr('disabled', false);
                      $('#commentModalSaveBtn').text('Save',);
                    }
                  },
                  error:function(xhr, status, error){
                    console.log(error)
                    $('#commentModalSaveBtn').attr('disabled', false);
                    $('#commentModalSaveBtn').text('Save',);
                  }
                });
              }

              //For Sending Mail

              $.ajax({
                  url : 'send-mail-from-blog.php',
                  type:'POST',
                  data:{
                    username : username,
                    email : email,
                    comment : comment,
                    blog_id : <?php echo (int)$_GET['id'] ?>,

                  },
                  success:function(data){
                    console.log(data)
                    let details = JSON.parse(data);
                    if(details.status === 1){
                      Swal.fire({
                        icon: 'success',
                        title: 'Great!',
                        text: 'Mail Sent',
                        confirmButtonText: 'Close!'
                      })
                    }else{
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something Went Wrong. Failed To Post Comment',
                      })
                    }
                  },
                  error:function(xhr, status, error){
                    console.log(error)
                  }
                });

        })
      </script>
     
      <?php
        include '../database-connection/db-connect.php';
        $url_data = (int)$_GET['id'];

        $query = "SELECT * FROM `blog_comment` WHERE `blog_id` =  $url_data  ORDER BY `created_at` DESC;";
        $result = $conn->query($query);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){
                echo '
                  <div class="main-comment-div">
                    
                    <div class="comment-display-area">
                        <div class="user-details">
                            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user image">
                            <p>'.$row["name"].'</p>
                        </div>
                        <p class="user-comment">
                            '.$row["comment"].'
                        </p>
                        <hr>
                    </div>
                  </div>
                
                ';
              }
        } 
        else {
          echo '
            <div style="text-align:Center; margin-bottom:20px;">
              <h6>Oops! No Comments Found 😔</h6>
            </div>
            
          
          ';
        }
        
        $conn->close();
        
      ?> 
        
    </section>

	<?php include 'footer.php'; ?>
    
    
	  <script> $(document).ready(function(){$('a.pagePrint').click(function(){window.print();});});</script>
  </body>

</html>
