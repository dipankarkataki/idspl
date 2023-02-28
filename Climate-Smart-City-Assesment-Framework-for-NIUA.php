<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Portfolio - Climate Smart City Assesment Framework for the NIUA</title>
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
				<!--<li class="breadcrumb-item active"> Implementation of ECBC in Indian States and Union Territories</li>-->
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
                  <h4>Climate Smart City Assesment Framework for the NIUA</h4>
                  <p>Policy Development</p>
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                  <ul class="slider-ul project-img-list">
                    <li class="slider-item"><img src="./images/Cities Readiness Report-9_Page1.jpg" /></li>
                  </ul>
                  <div class="individualPortfolioDetails">
                      <h4> <i class="fa fa-map-marker"></i> : <span>India</span></h4>
                  </div>
                  <div class="individualPortfolioDetails">
                      <h4>Client : <span>National Institute of Urban Affairs ;</span></h4>
                      <h4>Ended 2022</h4>
                  </div>
                  <div class="peopleInvolved">
                      <p>People Involved</p>
                      <ul>
                        <li title="Kanagaraj Ganesan"><img src="./images/Kanag.jpg" alt="image" class="img-circle"/></li>
                        <li title="Rajkumar Balasubramaniyan"><img src="./images/raj.jpg" alt="" class="img-circle" /></li>
                        <!-- <li title="Rajendra Bhargava"><img src="./images/rajendra.jpg" alt="" class="img-circle" /></li>
                        <li title="Naga Venkata Sai Kumar Manapragada"><img src="./images/naga2.jpg" alt="" class="img-circle" /></li> -->
                      </ul>
                  </div>
                  <div class="hashtags">
                    <p>Technical development</p>
                    <p>NIUA</p>
                    <p>Green building</p>
                  </div>
                  <div class="individualPortfolioDes">
                    <p>
                        NIUA aimed to develop ClimateSmart Cities Assessment Framework (CSCAF) a self-assessment framework on climate relevant parameters with an intent to provide a roadmap for Indian cities towards mainstreaming climate actions within current and future policies, programs and projects. A total of 126 cities including 100 Smart Cities and cities with over 500,000 population undertook the assessment in 2020 under five themes (i) Energy and Green Buildings; (ii) Urban Planning, Biodiversity and Green Cover; (iii) Mobility and Air Quality; (vi) Water Management and (v) Waste Management.
                        IDSPL provided technical inputs for developing key performance indicators for “Energy and Green Building” thematic area with the capacity building of the stakeholders. IDSPL also reviewed the data submitted by the cities and evaluate their performance in the thematic area.
                        The CSCAF 2.0 was published in the year 2021.
                    </p>
                    <div style="margin-top:30px;margin-bottom: 30px;">
                        <h5 style="margin-bottom:10px;font-weight:600;">Relevant Links</h5>
                        <ul style="margin-left: 30px; padding:4px;">
                            <li><a href="https://niua.in"  target="_blank">NIUA</a></li>
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
                    <a class="prev-link" href="knowledge-dissemination.php">

                      <h5><img src="./images/arrow-left.svg" alt=""> Previous Work</h5>
                      <h4>Knowledge Dissemination</h4>
                    </a>
                  </div>
                                      
                  <div class="portfolionavList">


                      <h5>Next Work <img src="./images/arrow-right.svg" alt=""></h5>
                      <a class="next-link" href="energy-conservation.php">
                      <h4>Development of Energy Conservation Building Code - Residential (ECBC - R), India</h4>
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
