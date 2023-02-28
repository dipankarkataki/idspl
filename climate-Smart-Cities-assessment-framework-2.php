<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
       <title>Climate Smart Cities Assessment Framework 2.0</title>
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
                <h4>Climate Smart Cities Assessment Framework 2.0</h4>
                <p>Policy Development, Advocacy & Implementation</p>
            </div>
        </div>
      </section>

      <section class="individualPortfolio">
          <div class="container">
              <div class="individualPortfolioImage">
                <ul class="slider-ul project-img-list">
                  <li class="slider-item"><img src="./images/climate-2.0.png"/></li>
                </ul>
                  <div class="individualPortfolioDetails">
                      <h4> <i class="fa fa-map-marker"></i> : <span>India</span></h4>
                  </div>
                  <div class="individualPortfolioDetails">
                      <h4>Client : <span>National Institute of Urban Affairs;</span></h4>
                      <h4>Ended May, 2021</h4>
                  </div>
                  <div class="peopleInvolved">
                      <p>People Involved</p>
                      <ul>
                        <li title="Kanagaraj Ganesan"><img src="./images/Kanag.jpg" alt="image" class="img-circle"/></li>
                        <li title="Rajkumar Balasubramaniyan"><img src="./images/raj.jpg" alt="" class="img-circle" /></li>
                      </ul>
                  </div>
                  <div class="hashtags">
                    <p>Smart Cities</p>
                    <p>Policy</p>
                  </div>
                  <div class="individualPortfolioDes">
                    <p>
                        Provided technical inputs for developing key performance indicators for “Energy and Green Building” thematic area, capacity building, review of data submitted by the cities and evaluate their performance in the thematic area.
                        Evaluation of 126 smart cities data for the Energy and Green Building indicators
                    </p>
                      

                    <!-- <div style="margin-top:30px;margin-bottom: 30px;">
                      <h5 style="margin-bottom:10px;font-weight:600;">Relevant Links</h5>
                      <ul style="margin-left: 30px; padding:4px;">
                        <li><a href="https://www.unicef.org/india/"  target="_blank">UNICEF</a></li>
                      </ul>
                    </div>   -->
                  </div>
                  
              </div>
          </div>
          
      </section>
      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
                <div class="portfolionavList">
                  <a class="prev-link" href="baseline-scenario-energy-performance.php">
                    <h5><img src="./images/arrow-left.svg" alt=""> Previous Work</h5>
                    <h4>Baseline Scenario for Energy Performance of Residential Buildings in the Cold Climatic Zone of India</h4>
                  </a>
                </div>
                <div class="portfolionavList">
                  <a class="next-link" href="energy-survey-for-climate-smart-hospital-india.php">
                    <h5>Next Work <img src="./images/arrow-right.svg" alt=""></h5>
                    <h4>Energy Survey for Climate Smart Hospitals in India</h4>
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
