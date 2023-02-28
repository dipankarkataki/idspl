<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Portfolio - Informatics Station for Energy Efficiency (iSEE)</title>
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
				<!--<li class="breadcrumb-item active"> Informatics Station for Energy Efficiency (iSEE)</li>-->
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
                  <h4>Informatics Station for Energy Efficiency (iSEE)</h4>
                  <p>Innovative and Inspired Living (I<sup>2</sup>L)</p>
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="./images/isee1.jpg" /></li>
                    <li class="slider-item"><img src="./images/isee2.jpg" /></li>
                    <li class="slider-item"><img src="./images/isee3.jpg" /></li>
                  </ul>
                  <div class="individualPortfolioDetails">
                      <h4>Client : <span>Self-initiative;</span></h4>
                      <h4>January 2019 onwards</h4>
                  </div>
                  <div class="individualPortfolioDes">
                    <p>ISEE is conceptualised as a single platform that can cater to Energy Simulation, Energy and Environment data Monitoring and Asset Management modules.ISEE will cater the Government organizations in developing Data Driven policy development for the built-environment sector. It will also act as a tool for the public and private customers in optimization of the energy use and in maintaining a healthy indoor environment in the built environment. The asset management module will support the facility managers in managing energy infrastructure with their historical records, performance data and future overhaul information.</p>
                  </div>
              </div>
          </div>
      </section>

      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
                <div class="portfolionavList">
                  <a class="prev-link" href="energyplus-tools.php">
                    <h5><img src="./images/arrow-left.svg" alt=""> Previous Work</h5>
                    <h4>EnergyPlus pre and post-processing tools


</h4>
                  </a>
                </div>
                <div class="portfolionavList">
                  <a class="next-link" href="coolr-comfort-ids.php">
                    <h5>Next Work <img src="./images/arrow-right.svg" alt=""></h5>
                    <h4>CoolR and Comfort-IDS

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
