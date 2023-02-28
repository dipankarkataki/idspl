<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Blog  - Circular Economy</title>
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
                  <h4>Circular-economy</h4>
                  <!-- <p>Building Energy Efficiency</p> -->
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="../images/new-circular-Economy.jpg" /></li>
                    <!-- <li class="slider-item"><img src="./images/isee2.jpg" /></li> -->
                  </ul>
                  <?php include 'article-rating.php' ?>
<!--                   <div class="individualPortfolioDetails">
                      <h4>CLient : <span>Greentech Knowledge Solutions Pvt. Ltd;</span></h4>
                      <h4>June 2016 to October 2016</h4>
                  </div> -->
                  <div class="individualPortfolioDes">
                    <p><b>Towards a Circular Economy: Why should India follow the circle to sustainability</b><br><br>
A lot has been said about consumerism and its aftermath in the last couple of decades. But despite the discourse, most developed societies have given in to the trap of the consumerist lifestyle. Whether it is for the allure of class, or the joy of possession, contemporary society is constantly fuelled by materialistic tendencies and thrives on it. <br><br>
From the time-tested systems of reuse and recycle, we moved to the age of use and throw, and while the world was busy looking for the next cool product, we have generated an unprecedented amount of waste. The great Pacific garbage patch is getting bigger every day while nations make feeble attempts to ban single-use plastics.</p><br>
<div style=" width:400px;text-align:center;margin:auto">
<img src="../images/circular2.jpg" />
</div>
<p>
In such a scenario, the concepts of circular economy can turn things around. Circular economy proposes a circular instead linear life cycle of products, where instead of disposing expired goods, their basic components are reused or repurposed. It also looks to minimise waste in production processes by finding utility in by-products and redesigning manufacturing processes to weed out waste. It is similar to the concepts of Biomimicry and Bio-convergence in essence. The core idea is to function like natural processes, where every part has a specific function and every effort leads to a logical outcome. In other words, nothing goes to waste in Nature and it is high time that we started thinking on the same lines. Historically, the reuse of objects and resources was very common, especially in Indian households. Repairing broken devices, repurposing objects and handing down clothes were common across generations. This has changed in the last decade. With globalisation and the influx of foreign brands, the Indian market is now one of the biggest consumer markets in the world. Moving to a circular economy model would take recycling and reuse beyond the average household, to the industrial sector.<br> <br>
The NITI Aayog very recently collaborated with Tomasz Kozlowski, Ambassador, European Union Delegation to India, for a study on the scope of circular economy (CE) and resource efficiency (RE). According to the study, India being a resource-rich country, has great potential to become a circular economy. It spells out 30 recommendations for an easy transformation, including the following:<br><br>
1.	Formulation of a National Policy on RE/CE, <br>
2.	Establishment of a Bureau of Resource Efficiency (BRE), <br>
3.	R&D for scalable technologies for RE & CE.<br><br>
Four papers on resource efficiency in the following sectors have also been released.<br><br>

1•	Steel <br>
2•	Aluminium<br>
3•	Construction and demolition waste<br>
4•	Secondary Materials Management in electrical and electronics<br><br>
 
Kozlowski confirmed that the EU is committed to adopt a more sustainable approach to the economy and assured India of support through the transition towards RE and CE. Kozlowski further noted that the RE and CE policies, if implemented efficiently, would also help with climate change and enable India to meet its commitments to the Paris Agreement. Ratan P. Watal, Principal adviser of the NITI Aayog, also confirmed India’s intentions to move towards a more sustainable approach to counter climate change. <br>
<img src="../images/circular3.jpg"  />
<br><br>
Climate change is closely related to overuse of resources. The more we use up natural resources to manufacture goods, the more we emit greenhouse gases. When these goods are disposed of, and end up in landfills, they become toxic for other living creatures, and degrade the environment. “A circular economy is a regenerative system in which resource input and waste, emissions, and energy leakage are minimized by slowing, closing, and narrowing energy and material loops. This can be achieved through long-lasting design, maintenance, repair, reuse, remanufacturing, refurbishing and recycling.” It is thus, a long-term, holistic solution to climate change. According to the Ellen MacArthur Foundation’s 2016 report, three key focus areas for the transition to circular models in India are–<br><br>

    1.  cities and construction<br>
    2.  food and agriculture<br>
    3.  mobility and vehicle manufacturing
<br><br>
A successful move to circular economy in these areas alone can potentially bring in annual benefits of $624 billion by 2050. <br><br>
  So what does India need to make the leap? The biggest challenge on the path to circular economy is forging an industry-wide collaboration. A circular economy needs a system approach, where any changes made to any part or component of the system must consider its consequence on the bigger picture. This can only be achieved through a large-scale collaboration, similar to the CE100 network. There are a lot of innovative start-ups across the world discovering ways of assimilating CE and RE principles. These can be scaled and integrated into the mainstream industry. The industry must make a concerted effort to encourage and nurture such small-scale innovations. But as a first step, we need a deeper understanding of the concepts of CE and a macro-level plan for optimal implementation, and the sooner we start, the better. To put it in the words of Circle Economy’s CEO, Harald Friedl, “A 15 degree world can only be a circular world.”
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
                      <a class="prev-link" href="gajapati4.php?id='.($url_data-1).'">
                        <h5><img src="../images/arrow-left.svg" alt=""> Previous Blog</h5>
                        <h4>Transformation of Aspirational District Gajapati</h4>
                      </a>
                    </div>
                    <div class="portfolionavList">
                      <a class="next-link" href="iot6.php?id='.($url_data+1).'">
                        <h5>Next Blog <img src="../images/arrow-right.svg" alt=""></h5>
                        <h4>IOT(Internet of Things)</h4>
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
