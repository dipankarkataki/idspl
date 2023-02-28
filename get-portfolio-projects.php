<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Portfolio</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>

         <!---- Search Style ----->
      <style>
        .search-outer-div{
          height: 100vh;
          width: 100%;
          background-color: #00000085;
          position: fixed;
          z-index:15;
          display: none;
        }
        .search-inner-div{
          height: 500px;
          width: 90%;
          background-color: #ffffff40;
          position: fixed;
          top: 20%;
          left: 5%;
          z-index:20;
          border-radius:5px;
        }
        .search-inner-div .content-area{
            position:absolute;
            top:30%;
            left:10%;
            padding:30px;
            display:flex;
            flex-direction: row;
        }
        .search-inner-div .content-area input{
          width: 900px;
          height: 70px;
          margin-right: -5px;
        }
        .search-inner-div .content-area #searchBtn{
          height:70px;
          padding-top: 24px;
        }
        #closeSearchBtn{
          font-size: 20px;
          color: black;
          float: right;
          background-color: #ffffff40;
          padding: 20px;
          border-radius: 0px 0px 0px 10px;
        }
        #closeSearchBtn:hover{
          background-color: white;
        }

       

      </style>

      <!---- End Search Style ----->

      <?php $page=5; include 'header.php'; ?>
      <?php include './database-connection/db-connect.php'; ?>

    <section class="breadcrumb-container container">

      
          <div class=" row">
		   <div class="col-sm-6">
             <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active"> Portfolio</li>
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
              <div class="secondaryHeaderContent">
                  <h4>Portfolio</h4>
                  <p>We are equipped with industry experts to help on your projects. Get in touch with us to know more</p>
              </div>
          </div>
      </section>

      <section class="portfolioList">
        <div class="filter-year-div">
          <!-- <form action = "get-portfolio-projects.php" method="POST"> -->
            <select name="filterYear" id="filterYear" required>
              <option value="0">--Filter By Year--</option>
              <?php
                  $fetch_projects_year_query = " SELECT DISTINCT `ending_year` FROM `portfolio` WHERE `ending_year` <> 'NULL' ORDER BY `ending_year` DESC;";
                  $project_year_result = $conn->query($fetch_projects_year_query);
                  if ($project_year_result->num_rows > 0){
                      // OUTPUT DATA OF EACH ROW
                      while($result_row = $project_year_result->fetch_assoc()){ 
                        echo '
                          <option value="'.$result_row['ending_year'].'">'.$result_row['ending_year'].'</option>
                        '; 
                        
                      }
                    } 
                    else {
                        echo "
                            <div class='text-center'>
                                <h4>Oops! No Year Found 😔</h4>
                            </div>
                        
                        ";
                    }
                ?>
            </select>
            
            <!-- <button type="submit" name="endingYearSubmitBtn" class="btn btn-primary" id="endingYearSubmitBtn">Submit</button> -->
          <!-- </form> -->
        </div>
          <div class="container">
            <div class="row">
              <div class="tile-view">
                <div class="dropdown">
                  <a class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <i class="fa fa-th"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#" id="smallView" style="font-size:12px;font-weight:500;">
                        Small View
                        <!-- <img title="click for small view" id="smallView" src="images/icons8-circled-menu-100.png" alt="icon"> -->
                      </a>
                    </li>
                    <li>
                      <a href="#" id="mediumView" style="font-size:12px;font-weight:500;">
                        <!-- <img  src="images/icons8-xlarge-icons-100.png" alt="icon">
                        <img  src="images/icons8-xlarge-icons-100.png" alt="icon"> -->
                        Medium View
                      </a>
                    </li>
                    <li>
                      <a href="#" id="largeView" style="font-size:12px;font-weight:500;">
                        <!-- <img title="click for large view" id="largeView" src="images/icons8-xlarge-icons-100.png" alt="icon"> -->
                        Large View
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              
              <div class="tabs-wrapper">
                <a class="portfolio-tab" onclick="window.location.href = 'portfolio.php' " style="cursor:pointer;">Go Back</a>
              </div>
            </div>
            <div class="portfolio-list-items row">
          
                <?php

                    $year = $_GET['filterYear'];

                    $query = "SELECT * FROM `portfolio` WHERE `ending_year` = $year;";

                    $result = $conn->query($query);
                    if ($result->num_rows > 0){
                        // OUTPUT DATA OF EACH ROW
                        while($row = $result->fetch_assoc()){ 
                        echo '
                        
                            <a href="'.$row["content_link"].'" class="col-xs-12 col-sm-6 portfolio-listing-medium-view tab-blocks" data-tab="'.$row["data_tab"].'">
                            <div class="portfolio-brief">
                                <img src="'.$row["image"].'" />
                                <div>
                                <h3>'.$row["name"].'</h3>
                                <h4>'.$row["category"].'</h4>
                                </div>
                            </div>
                            </a>
                        '; 
                        
                        }
                    } 
                    else {
                        echo "
                            <div class='text-center'>
                                <h4>Oops! No Portfolios Found 😔</h4>
                            </div>
                        
                        ";
                    }

                    $conn->close();

                ?>
            </div>
          </div>
      </section>

	<?php include 'blogs/footer.php'; ?>
      <script src="js/jquery.min.js"></script>
    
      <script src="js/scripts2.js"></script>

      <script>
        $('#smallView').on('click', function(){
            $('.tab-blocks').addClass('portfolio-listing-small-view');
            $('.tab-blocks').removeClass('portfolio-listing-medium-view');
            $('.tab-blocks').removeClass('portfolioListing');
        })

        $('#mediumView').on('click', function(){
            $('.tab-blocks').addClass('portfolio-listing-medium-view');
            $('.tab-blocks').removeClass('portfolio-listing-small-view');
            $('.tab-blocks').removeClass('portfolioListing');
        })

        $('#largeView').on('click', function(){
            $('.tab-blocks').addClass(' portfolioListing');
            $('.tab-blocks').removeClass('portfolio-listing-small-view');
            $('.tab-blocks').removeClass('portfolio-listing-medium-view');
        })
      </script>

      <script>
        $('#filterYear').on('change', function(){
            // alert( $('#filterYear').val());
          let year = $('#filterYear').val();
          window.location.href = 'get-portfolio-projects.php?filterYear='+year;
        })
      </script>
  </body>

</html>


