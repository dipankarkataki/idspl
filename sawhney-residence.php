<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Portfolio - Sawhney Residence</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>

      <?php $page=5; include 'header.php'; ?>
<section class="breadcrumb-container container">
          <div class=" row">
		   <div class="col-sm-6">
             <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
				<!--<li class="breadcrumb-item active"> Sawhney Residence</li>-->
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
                 <a href="./portfolio.php"> <img src="./images/backButton.svg"/></a>
                  <h4>Sawhney Residence</h4>
                  <p>Building Energy Efficiency</p>
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="./images/sawhney-residence1.jpg" /></li>
                    <li class="slider-item"><img src="./images/sawhney-residence2.jpg" /></li>
                    <li class="slider-item"><img src="./images/sawhney-residence3.jpg" /></li>
                    <li class="slider-item"><img src="./images/sawhney-residence4.jpg" /></li>
                    <li class="slider-item"><img src="./images/sawhney-residence5.jpg" /></li>
                    <li class="slider-item"><img src="./images/sawhney-residence6.jpg" /></li>
                  </ul>
                  <div class="individualPortfolioDetails">
                      <h4>Location : <span>New Delhi</span></h4>
                      <h4>Climatic Zone : <span>Warm & Humid</span></h4>
                  </div>
                  <div class="individualPortfolioDes">
                      <p>This project is a residential building in New Delhi. Four main branches stem from a central node, reaching out to respond to the solar orientation. Skylights are cut into the building envelope and allow natural light into the interior.</p>
                      <p>The work done by IDSPL included</p>
                      <ul>
                        <li> <p>evaluation of heat balance of the ground and first floors</p></li>
                        <li> <p>wall recommendations</p></li>
                        <li> <p>junction details and recommendations</p></li>
                        <li> <p>fenestration and skylight design</p></li>
                        <li> <p>heat load calculation.</p></li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>

      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
                <div class="portfolionavList">
                  <a class="prev-link" href="hospital-building-punjab.php">
                    <h5><img src="./images/arrow-left.svg" alt=""> Previous Work</h5>
                    <h4>Fortis Hospital, Ludhiana Punjab

</h4>
                  </a>
                </div>
                <div class="portfolionavList">
                  <a class="next-link" href="energy-efficient-resident-uttarkhand.php">
                    <h5>Next Work <img src="./images/arrow-right.svg" alt=""></h5>
                    <h4>Energy efficient Resident Bungalow, Kausani, Almora, Uttarakhand
</h4>
                  </a>
                </div>
            </div>
          </div>
      </section>
	<?php include 'footer.php'; ?>
      <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
	  <script> $(document).ready(function(){$('a.pagePrint').click(function(){window.print();});});</script>
  </body>

</html>
