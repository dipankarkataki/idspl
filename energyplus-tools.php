<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Portfolio - EnergyPlus pre and post-processing tools</title>
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
				<!--<li class="breadcrumb-item active"> EnergyPlus pre and post-processing tools</li>-->
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
                  <h4>EnergyPlus pre and post-processing tools </h4>
                  <p>Innovative and Inspired Living (I<sup>2</sup>L)</p>
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="project-img-list">
                    <li class="slider-item"><img src="./images/energyplus-tools1.jpg" /></li>
                  </ul>
                  <div class="individualPortfolioDetails">
                      <h4>CLient : <span>Self-initiative;</span></h4>
                      <h4>March 2017 onwards</h4>
                  </div>
                  <div class="individualPortfolioDes">
                    <p>The IDF2XL tool reads the tree format based on IDF and translates into a matrix in Excel (XL) file. The tool can ease the work of simulation experts to review the inputs provided in the project.</p>
                    <p>Providing input related to activities, construction, lighting and HVAC is a time-consuming activity in EnergyPlus engine-based simulation software.  The XL2IDF tool is being developed to append the input discussed above from an Excel file to Input Data File comprising of geometry modelled in EnergyPlus based simulation software. The tool will have features of parametric analysis and optimisation for identifying resourceful strategies.</p>
                  </div>
              </div>
          </div>
      </section>

      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
                <div class="portfolionavList">
                  <a class="prev-link" href="sustainable-rural-development-odisha.php">
                    <h5><img src="./images/arrow-left.svg" alt=""> Previous Work</h5>
                    <h4>Sustainability assessment of technologies for sustainable rural development in Gajapati, Odisha


</h4>
                  </a>
                </div>
                <div class="portfolionavList">
                  <a class="next-link" href="isee.php">
                    <h5>Next Work <img src="./images/arrow-right.svg" alt=""></h5>
                    <h4>Informatics Station for Energy Efficiency (iSEE)

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
