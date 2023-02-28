<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Portfolio - Knowledge Dissemination</title>
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
				<!--<li class="breadcrumb-item active"> Knowledge Dissemination</li>-->
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
                  <h4>Knowledge Dissemination</h4>
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="./images/knowledge-dissemination1.jpg" /></li>
                    <li class="slider-item"><img src="./images/knowledge-dissemination2.jpg" /></li>
                    <li class="slider-item"><img src="./images/knowledge-dissemination3.jpg" /></li>
                    <li class="slider-item"><img src="./images/knowledge-dissemination4.jpg" /></li>
                  </ul>

                  <div class="individualPortfolioDes">
                    <p>IDSPL have developed customized presentation modules on Climate responsive architecture, Building physics, Energy efficient HVAC system design and operation, Renewable Energy systems, Energy & Asset Management, Building Energy Simulation and Daylighting, etc. The modules are being used for training building sector stakeholders, working professionals, students, facility managers, etc.</p>
                    <ul>
                      <li> <p>IDSPL has provided support to the State Designated Agencies for conducting a total of 42 training programs on ECBC in the states of Chhattisgarh, Kerala and Karnataka</p></li>
                      <li> <p>Also, we have organized a total of 21 training programs in 13 states and UTs in 2017. Nearly 2,000 professionals were trained in these programs</p></li>
                      <li> <p>A one-week training workshop on DesignBuilder software for performing building energy simulation was conducted for GIZ- Afghanistan and IT Power India, for 25 delegates from Afghanistan</p></li>
                      <li> <p>In 2018-19, we have planned to conduct a total of 65 training programs on ECBC in the 14 states and UTs</p></li>
                    </ul>
                  </div>
              </div>
          </div>
      </section>

      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
                <div class="portfolionavList">
                  <a class="prev-link" href="coolr-comfort-ids.php">
                    <h5><img src="./images/arrow-left.svg" alt=""> Previous Work</h5>
                    <h4>COOLR AND COMFORT-IDS</h4>
                  </a>
                </div>
                <!--<div class="portfolionavList">-->
                <!--  <a class="next-link" href="ecbc-implementation.php">-->
                <!--    <h5>Next Work <img src="./images/arrow-right.svg" alt=""></h5>-->
                <!--    <h4>Energyplus Pre & Post-Processing Tools</h4>-->
                <!--  </a>-->
                <!--</div>-->
            </div>
          </div>
      </section>

	<?php include 'footer.php'; ?>
      <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
	  <script> $(document).ready(function(){$('a.pagePrint').click(function(){window.print();});});</script>
  </body>

</html>
