<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Blog  -Aquifer mapping and its effects on groundwater recharge</title>
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
                  <h4>Aquifer mapping and its effects on groundwater recharge</h4>
                  <!-- <p>Building Energy Efficiency</p> -->
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="../images/aquifer.png" /></li>
                    <!-- <li class="slider-item"><img src="./images/isee2.jpg" /></li> -->
                  </ul>
                  <?php include 'article-rating.php' ?>
<!--                   <div class="individualPortfolioDetails">
                      <h4>CLient : <span>Greentech Knowledge Solutions Pvt. Ltd;</span></h4>
                      <h4>June 2016 to October 2016</h4>
                  </div> -->
                  <div class="individualPortfolioDes">
                    <p><b>Aquifer Mapping and Management and Groundwater Recharge:</b><br><br>
For a hot tropical country like India, monsoons have always been a season of rejoicing and rejuvenation. The beauty of monsoons quenching the scorched lands have been a subject of poetry and romance in Indian literature since time immemorial. So, it is quite surprising, the turn monsoons have taken in recent years. In 2019 alone, as many as thirteen Indian states suffered severe floods resulting in huge loss of lives and property. 
It is ironic that just earlier this year, many parts of the country also faced drought-like situations during the summer. Acute water crisis has had a grave effect on our farmers for decades, so much so that reports of farmer suicide have ceased to have any effect on lawmakers or the public. In 2019, the city of Chennai had a water crisis so severe, that it was helmed as the beginning of the countdown to “Day Zero”. A train containing water was sent from Vellore to save the day. The severity of the situation made the government announce plans of setting up desalination plants along India’s coastline. The question is, if the country did receive a massive amount of rain this year, why has nothing been done to conserve rain water? Why are we resorting to extreme solutions like desalination while half the country is flooded?
In the words of Dr S. Janakarajan, former Professor of the Madras Institute of Development Studies (MIDS), Chennai, “The current drought situation in Tamil Nadu has risen because of a lack of preparedness… We have no control over the monsoons and weather conditions. But we should be prepared to face both these situations. One needs to have an integrated view of droughts and floods. Saving water during floods will save us from droughts.” 
. <br><br>
We already are aware of the various techniques of rainwater harvesting. The more enduring solution however, is to channel rainwater to recharge groundwater. This can be done through a precise mapping of aquifers and a concerted effort to direct rainwater into these aquifers, instead of letting it drain into the sea. Before delving deeper into this, let us briefly understand what an aquifer is. The rocks beneath our top soil often have void spaces that store water. These rocks are of various porosity and permeability, meaning they do not hold or discharge water in the same way. When a water-bearing rock readily transmits water to wells and springs, it is called an aquifer. Thus, wells are usually drilled into aquifers to ensure regular supply of water. In other words, a geological observation of the wells of an area: their water level, quality of water, exposed rocks and other such characteristics, can be a head start to mapping our aquifers. And by knowing the aquifers, one can gauge the quality and quantity of groundwater available in an area. It also helps us in understanding what kind of uses the water can be put to. Moreover, by locating the aquifers, one can also understand their natural recharge and discharge patterns, thereby letting us maintain them better. 
<img src="../images/aquifer2.jpg" />
<br><br>
Heretofore, the Indian government had a lackadaisical approach towards groundwater recharge, despite the fact that India is the largest consumer of groundwater. As groundwater was readily available, it was never considered a priority. Groundwater-related projects were part of programs like Integrated Watershed Management Programme (IWMP), River basin management and such. However, with the drying out of available aquifers, the drawbacks of this casual approach came to the fore. According to Dipankar Saha, Secretary, International Association of Hydrogeologists, India Chapter, and Former Member, CGWB, “The economic and social consequences of groundwater overexploitation has led to mounting economic burden on farmers owing to relentless construction of deeper new wells, increased energy cost to lift water, enhanced water salinity and spread of geogenic contaminants — arsenic, fluoride, salinity — and ingress of seawater in freshwater aquifers in coastal areas. Further, we are yet to fully comprehend its impact on environment and ecology. The likely effects are diminishing flow of non-glacier fed rivers, drying up of wetlands, changes in hydraulic behaviour of aquifers—particularly in the multi-aquifer setup in the Indo-Ganga-Brahmaputra Plains.” 
The National Aquifer Mapping and Management Programme (NAQUIM) was planned to mitigate these issues. It was the first program that concentrated solely on Aquifer mapping and groundwater recharge. The main objectives of the program were as follows:<br><br>
1.	Mapping of aquifers, resource, quality, recharge potential<br>
2.	Groundwater Modeling and Management Plan<br> 
3.	Dissemination of Data/information/plan<br>
4.	Participatory management of the resource <br><br>
The program, started in 2012, aimed to map the aquifers of approximately 25 lakh km2 of mappable area in a systematic manner. It involved the use of advanced technology like heli-borne geophysical surveys and softwares like Sophisticated softwares like RockWorks, ARCGIS, Modflow, MapInfo. According to a 2019 press release from Central Ground Water Board (CGWB), the aquifer map has been created and management plans developed for an area of 890651 km2. The program is now in its second phase, and plans to conclude its objective by 2022.  More information about the NAQUIM programme can be found here.
Though the NAQUIM program is a big step forward, it is hardly adequate, considering the severity of the problem. We need to do better. One of the ways would be to adopt the Sponge City concept of architecture that seems to have worked wonders for Berlin and many other cities. 
We have already witnessed the gravity of the water crisis, and unless we take adequate steps to safeguard our natural groundwater, we might be looking at a world where clean water will be a luxury, and wars will be fought over it.
   <br><br>
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
                      <a class="prev-link" href="iot6.php?id='.($url_data-1).'">
                        <h5><img src="../images/arrow-left.svg" alt=""> Previous Blog</h5>
                        <h4>IOT(Internet of Things)</h4>
                      </a>
                    </div>
                    <div class="portfolionavList">
                      <a class="next-link" href="iot-dsm8.php?id='.($url_data+1).'">
                        <h5>Next Blog <img src="../images/arrow-right.svg" alt=""></h5>
                        <h4>Demand Side Management (DSM) in Residential Buildings</h4>
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

                  // location.reload(true);
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
