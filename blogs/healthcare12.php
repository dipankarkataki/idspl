<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Blog  - Using technology to increase healthcare access</title>
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
                  <h4>Using technology to increase healthcare access</h4>
                  <!-- <p>Building Energy Efficiency</p> -->
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="../images/healtcare1.png" /></li>
                    <!-- <li class="slider-item"><img src="./images/isee2.jpg" /></li> -->
                  </ul>
                  <?php include 'article-rating.php' ?>
<!--                   <div class="individualPortfolioDetails">
                      <h4>CLient : <span>Greentech Knowledge Solutions Pvt. Ltd;</span></h4>
                      <h4>June 2016 to October 2016</h4>
                  </div> -->
                  <div class="individualPortfolioDes">
                    <p>
Providing prompt and reliable healthcare is a challenge of massive proportions for a multitude of reasons, especially in under-developed or rural areas. The problem is a complex one and cannot be easily solved. However, thanks to recent technological advancements and breakthroughs, healthcare can become much more accessible to a greater population.
<br><br>
<strong>Solar steam sterilization</strong><br>
In 2012, researchers at Rice University revealed a new way to convert solar energy directly into steam using light-absorbing nanoparticles. The technology has been operationalised in the form of a solar steam-powered autoclave for sterilizing medical and dental equipment. At the heart of the tech are nanoparticles.

These nanoparticles heat up when submerged in water and exposed to sunlight. The heat generation is so rapid that the surrounding water instantly vaporizes to form steam. The system even works with icy-cold water and boasts an overall energy efficiency of 24% (as opposed to commercial photovoltaic solar panels that typically have an overall energy efficiency of around 15%! The heat and pressure generated by the steam have been found sufficient to kill not just heat-resistant living microbes, but also spores and viruses.<br<br><br><br><strong>Motorcycle ambulances</strong><br>
Motorcycle ambulances are emergency vehicles that either carries a paramedic to a patient; or is used with a trailer or sidecar to transport patients. For obvious reasons, a motorcycle ambulance is able to respond to an emergency much faster than a four-wheeler in heavy traffic, which can drastically increase survival rates.

The concept of motorcycle ambulances is not really a new one. They first came into use during the First World War, and were used by the British, French and Americans. However, with the advancement of technology, many countries across the world started creating fleets of motorcycle ambulances, that either operate as standalone units or complement regular ambulances. 

Bengaluru was the first Indian city to boast of a motorcycle ambulance in 2015. Delhi launched the project this year with 16 ambucycles, as they are often called.<br>

<img src="../images/healtcare1.png" />
<br>
<br><strong>Telemedicine</strong><br>
Telemedicine is medical care provided at a distance. Medical data is sent from patients to doctors in real-time, eliminating the need for either party to travel in person to the other. The technology was first put into practice in the 1950s in the US. Medical staff at two different health centres in Pennsylvania about 24 miles apart transmitted radiologic images via telephone. Around the same time, a Canadian doctor built upon this technology into a Tele radiology system that was used in and around Montreal. In 1959, doctors at the University of Nebraska succeeded in transmitting neurological examinations to medical students across campus using a two-way interactive television. By 1964, the technology had become sufficiently advanced to enable them to provide health services 112 miles away.

Originally, health professionals developed this technology to reach remote patients living in rural areas. However, in recent years, it has seen greater use in the urban context due to the convenience factor. Telemedicine makes up for healthcare shortages for urban populations, while also eliminating the need for a commute.

The unavailability of sufficient numbers of medical professionals has led to the rise of telemedicine companies that offer patients 24/7 access to medical care with an on-call doctor. Others provide a telemedicine platform for physicians, allowing them virtual visits with their own patients. Still others offer hospitals and larger health centres access to extra clinical staff and specialists, enabling them to outsource special cases.

With a wide variety of mobile health apps and new mobile medical devices that are consumer-friendly, patients are starting to use technology to monitor and track their health. Simple home-use medical devices that can take vitals and diagnose infections, monitor blood pressure and sugar levels are making it possible for patients to gather medical information needed for a diagnosis without going to a doctor’s office.

<img src="../images/healthcare2.png" />
<br>
<br><strong>Sensors and wearable technology</strong><br>

Wearable medical devices and sensors are another way of collecting crucial medical data. Devices like the Fitbit have now become commonplace. Along with the basic functions that they perform which can often alert users to crises much before they become unmanageable, it is possible to equip patients with more advanced sensors for the period of recuperation (perhaps after a surgery) that can send an alert to a care provider if the patient falls down or detect skin pH levels to tell if a cut is getting infected.

Technology has brought the world into our homes and at our fingertips in more ways than one. While its most appreciated benefit has been greater convenience, it is undeniable that it can revolutionize lives in much more fundamental ways. In a 4G/5G world, it could be the difference between life and death. At any rate, with new advancements happening almost every other day, the potential uses in the domain of healthcare and healthcare access are far greater than we can imagine at this point. 

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
                      <a class="prev-link" href="paris-accord11.php?id='.($url_data-1).'">
                        <h5><img src="../images/arrow-left.svg" alt=""> Previous Blog</h5>
                        <h4>Paris Accord</h4>
                      </a>
                    </div>
                    <div class="portfolionavList">
                      <a class="next-link" href="energy-efficient13.php?id='.($url_data+1).'">
                        <h5>Next Blog <img src="../images/arrow-right.svg" alt=""></h5>
                        <h4>Energy Efficient Building Materials</h4>
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
