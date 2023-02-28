<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Blog  - Low Energy Thermal Comfort strategy</title>
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
                  <h4>Low Energy Thermal Comfort strategy</h4>
                  <!-- <p>Building Energy Efficiency</p> -->
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="../images/blog3_thermal_comfort.jpg" /></li>
                    <!-- <li class="slider-item"><img src="./images/isee2.jpg" /></li> -->
                  </ul>
                  <?php include 'article-rating.php' ?>
<!--                   <div class="individualPortfolioDetails">
                      <h4>CLient : <span>Greentech Knowledge Solutions Pvt. Ltd;</span></h4>
                      <h4>June 2016 to October 2016</h4>
                  </div> -->
                  <div class="individualPortfolioDes">
                    <p><b>“Spare a watt. Save a Lot. It takes energy to produce Energy”</b><br>
                    Post industrial revolution, energy is one of the quintessential need for
                    human existence. The demand for energy has risen into many folds to
                    meet the requirement of the present population of 130 billion in the
                    world. Its usage spreads across various sectors like industry,
                    commercial & public service, residential, transport, etc., which are
                    among the top consumers of the generated electricity. As per the latest
                    statistics provided by IEA, the total power generated in the world is
                    approximately 25,500 TWh in which the contribution of fossil fuels is
                    approximately 65% of the total generation while the generation
                    through renewable sources is 30%. With raising population and
                    urbanisation, the demand for energy also increases. This causes
                    alarming rise in global warming challenges and carbon emission into
                    the atmosphere. Increasing construction activities and cooling
                    requirements have led to the development of modern low energy
                    efficient strategies to provide thermal comfort in dwelling units.
                    <br><br>
                    
                    Some
                    technologies like evaporative cooling, solar air conditioning, radiant
                    cooling, ground-source heat pumps, tri-generation systems, adiabatic
                    cooling systems, etc. have proved to reduce energy consumption
                    substantially. In order to reduce adverse effects globally (ozone
                    depletion, increasing carbon emission and climate change issues) due
                    to usage of refrigerants (CFC, HFC, HCFC), Ozone Depleting
                    Substances (ODS), fossil fuels & non-renewable energy, international
                    communities have joined together (attributed as the successful
                    movement) to emphasise (a) power generation through renewable
                    sources (b) phasing out of ozone depletion substances (c) alternative
                    thermal comfort systems (c) green building and low embodied energy
                    materials for construction. Other factors attributed to power
                    transmission, distribution & storage losses have also been minimised
                    substantially in the recent years enhancing the range of application.<br><br>
                    
                    
                    These transformations have potential to meet goals of sustainable

                    development and meet future energy generation and consumption
                    demand. This brings up urban energy transformation.
                    India’s population is approximately 130 crore and is the 3rd largest
                    producer of electricity after China and USA. India mainly relies on
                    thermal power plants for its energy generation. Presently, out of 1,400
                    TWh generated, approximately 78% of the total power generated is
                    from fossil fuels and the contribution of Renewable Energy Sources
                    (RES) is approximately 16%.<br><br>
                    
                    Out of various service sectors,
                    commercial service, public service and residential sector consume the
                    most electricity generated in the country, which is about 35-40% of
                    the total generation. In this sector, the major demand is for providing
                    human thermal comfort (HTC) (40-45%) and visual comfort &
                    lighting (30-35%). It is estimated that by 2050, 60% of the total land
                    will be constructed adding approximately 60 billion square meters of
                    Built Up Area (BUA). This will raise the demand for power by 400%.
                    Until 2022 it is estimated that, the need for energy will raise annually
                    by 7.5% (CAGR). So the need for low energy and passive cooling
                    technique should be prioritised.
                    India has 5 different climatic zones as classified under Indian
                    Meteorological Department (IMD) and these conditions demand
                    different HTC strategies. In India, it is found that, the procurement of
                    AC’s is estimated to be at 8% of the total houses through organized
                    sectors.<br><br>
                    
                    The estimation of sales of coolers (direct evaporative cooler
                    (DEC)) from the organised sector which is about 60% of the total
                    market is approximately the same. The trend in consumption also has
                    been surveyed. The DEC run during peak summer period (April-mid
                    June) and during off summer (mid-June – Aug) AC’s run the most.
                    This trend in usage pattern apart from scientific study (climatology
                    and psychrometrics) about different strategy to provide HTC, also
                    provides an insight and potential for alternative low energy cooling
                    strategy. The most efficient air conditioning units in the markets
                    possess 0.28 kW/kW and low energy comfort systems possess atleast
                    0.23kW/kW. The additional savings in energy can be catered to
                    deficient sectors for improving per capita energy consumption (PEC).<br><br>

                    This growth in PEC will lead to growth in economy and the
                    decreasing trend in energy intensity can be maintained.
                    Refrigerants used in the air-conditioning industry are among the
                    contributors for increase in green-house gases (GHG’s) in the
                    atmosphere and certain refrigerants have also been classified under
                    Ozone Depleting Substances (ODS). Commonly used refrigerant
                    based on the Vapour Compression Refrigeration (VCR) cycle are
                    either of Chloroflouro carbon’s (CFC’s), Hydroflouro carbons’s
                    (HFC’s) or Hydroflourochloro carbon’s (HCFC’s). Montreal protocol,
                    is one such agreement that has brought many countries together to
                    protect ozone layer by phasing out the production of substance, that
                    are responsible for depletion of ozone layer. So in the near future, an
                    alternative refrigerant has to be resourced for running our existing air
                    conditioning systems.And in parallel, the global warming potential of
                    the refrigerant has to be reduced. OR low energy comfort strategy
                    integrated with state of the art electronics & communication and
                    computer coding should be brought in to play a pivotal role in
                    mitigating usage of higher and low cost global warming potential
                    substances.<br><br>
                    
                    
                    At Integrative Design Solutions Pvt Ltd, we engineers and architects
                    work in synergy to bring about the quintessential changes focussing
                    on the requirements for the future. The Low Energy Thermal Comfort
                    strategy (LETs) is one such area, where we provide HTC solution
                    with minimal/nil interference of refrigerant. The heart lies in heat
                    transfer and the intelligent technology integration we have carried out
                    in our systems. It regulates the operations for all climatic conditions
                    throughout the year to provide HTC. We have made representations at
                    national level competitions with our system and have created
                    milestones setting new targets for betterment of the system. Modern
                    technology, design and simulation tools are utilised to analyse the
                    optimal performance of the product which indeed promises to reduce
                    energy consumption and also provide adequate thermal comfort.
                  </p><br>
                  <h2>Contributed By: <a href="http://www.ids-pl.com/team-abhilash.php">Abhilash K Prabhu</a> </h2><br>
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
                    <a class="prev-link" href="desalination2.php?id='.($url_data-1).'">
                      <h5><img src="../images/arrow-left.svg" alt=""> Previous Blog</h5>
                      <h4>Desalination</h4>
                    </a>
                  </div>
                  <div class="portfolionavList">
                    <a class="next-link" href="gajapati4.php?id='.($url_data+1).'">
                      <h5>Next Blog <img src="../images/arrow-right.svg" alt=""></h5>
                      <h4>Transformation of Aspirational District Gajapati</h4>
                    </a>
                  </div>';
            ?>
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
