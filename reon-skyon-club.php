<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
       <title>Ireo SkyOn Club </title>
       <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>
        <style>
          .hashtags{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
          }
          .hashtags p{
            background-color: #e6a300;
            color: black;
            font-weight: 600;
            padding: 3px 12px 3px 12px;
            border-radius: 10px;
            margin-right: 10px;
            font-size:12px;
          }
		</style>

      <?php $page=5; include 'header.php'; ?>
<section class="breadcrumb-container container">
          <div class=" row">
		   <div class="col-sm-6">
             <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
				<!--<li class="breadcrumb-item active"> Adaptation of 2000 Watt Smart City concept to Indian Context</li>-->
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
                  <h4>Ireo SkyOn Club </h4>
                  <p>Building Energy Efficiency</p>
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <!-- <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="./images/smartcity-india1.jpg" /></li>
                    <li class="slider-item"><img src="./images/smartcity-india2.jpg" /></li>
                  </ul> -->
                  <div class="individualPortfolioDetails">
                      <h4><i class="fa fa-map-marker"></i> : <span>Gurugram, Haryana;</span></h4>
                  </div>
                  <div class="individualPortfolioDetails">
                      <h4>Client : <span>Matra Architects and Rurban Planners;</span></h4>
                      <h4>Ended 2016</h4>
                  </div>
                  <div class="hashtags">
                    <p>Building Energy Efficiency</p>
                    <p>Climate Analysis</p>
                    <p>Radiation Anlysis</p>
                    <p>Building Envelope</p>=
                  </div>
                  <div class="individualPortfolioDes">
                    <p>
                        Ireo SkyOn is Part of Ireo City spread over 500 Acres. SkyOn Club is being built there. The 
                        project is still in progress. The work done by IDSPL includes climate analysis, sun path & 
                        sun eye analysis, radiation map analysis, building envelope analysis, and space analysis.

                    </p>
                    <div style="margin-top:30px;margin-bottom: 30px;">
                      <h5 style="margin-bottom:10px;font-weight:600;">Relevant Links</h5>
                      <ul style="margin-left: 30px; padding:4px;">
                        <li><a href="https://www.ireoskyon.in/clubhouse"  target="_blank">Ireo Skyon Club House</a></li>
                      </ul>
                    </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
                <div class="portfolionavList">
                  <a class="prev-link" href="assotech-commercial-hotel-complex.php">
                    <h5><img src="./images/arrow-left.svg" alt=""> Previous Work</h5>
                    <h4>Assotech Commercial & Hotel Complex</h4>
                  </a>
                </div>
                <div class="portfolionavList">
                  <a class="next-link" href="reon-skyon-club.php">
                    <h5>Next Work <img src="./images/arrow-right.svg" alt=""></h5>
                    <h4>Assotech Commercial & Hotel Complex</h4>
                  </a>
                </div>
            </div>
          </div>
      </section>



	<?php include 'blogs/footer.php'; ?>
      <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
	  <script> $(document).ready(function(){$('a.pagePrint').click(function(){window.print();});});</script>
  </body>

</html>
