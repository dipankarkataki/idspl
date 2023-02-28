<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="IDSPL's multi-disciplinary team deploys state-of-the-art tools and techniques for making informed decisions. Our Team of Dynamic architects and engineers in IDSPL works in the domain of building energy efficiency, renewable energy integration in buildings, and green buildings.">
  <meta name="keywords" content="Building Energy Efficiency, Energy Efficiency team, Renewable Energy integration team">
  <title>Integrative Design Solutions (IDSPL) | Team</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
  <script src="js/jquery.min.js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-144725705-1');
  </script>

  <!---- Search Style ----->
  <style>
    .search-outer-div {
      height: 100vh;
      width: 100%;
      background-color: #00000085;
      position: fixed;
      z-index: 15;
      display: none;
    }

    .search-inner-div {
      height: 500px;
      width: 90%;
      background-color: #ffffff40;
      position: fixed;
      top: 20%;
      left: 5%;
      z-index: 20;
      border-radius: 5px;
    }

    .search-inner-div .content-area {
      position: absolute;
      top: 30%;
      left: 10%;
      padding: 30px;
      display: flex;
      flex-direction: row;
    }

    .search-inner-div .content-area input {
      width: 900px;
      height: 70px;
      margin-right: -5px;
    }

    .search-inner-div .content-area #searchBtn {
      height: 70px;
      padding-top: 24px;
    }

    #closeSearchBtn {
      font-size: 20px;
      color: black;
      float: right;
      background-color: #ffffff40;
      padding: 20px;
      border-radius: 0px 0px 0px 10px;
    }

    #closeSearchBtn:hover {
      background-color: white;
    }
  </style>

  <!---- End Search Style ----->

  <?php
  $page = 3;
  include_once 'header.php';
  ?>
  <!-- <div class="search-outer-div"> 
      <div class="search-inner-div">
        <a href="javascript:void(0);"  id="closeSearchBtn">
          <i class="fa fa-times" aria-hidden="true"></i>
        </a>
          <div class="content-area">
            <input type="text" name="searchQuery" id="searchQuery" class="form-control" autocomplete="off" placeholder="Type here..">
            <a id="searchBtn" href="#" class="btn btn-warning">
              <i class="fa fa-search"></i>
            Search</a>
          </div>
      </div>
    </div> -->
  <section class="breadcrumb-container container">

    <div class=" row">
      <div class="col-sm-6">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active"> Team </li>
          </ol>
        </nav>
      </div>
      <div class="col-sm-6">
        <div class="teamsocial text-right">
          <ul class="list-unstyled list-inline">
            <li><a href="#" class="pagePrint"><i class="fa fa-print"></i></a></li>
            <li><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank" class="team_social_url"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://www.linkedin.com/company/idspl/about/" target="_blank" class="team_social_url"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://twitter.com/IDSPL3" target="_blank" class="team_social_url"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="team-banner">

    <div class="container-fluid">
      <h3></h3>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/newteampage1.jpg" alt="Team image">
          </div>

          <div class="item">
            <img src="images/newteampage2.jpg" alt="Team image">
          </div>

          <!-- <div class="item">
            <img src="images/newteampage3.jpg" alt="Team image">
          </div> -->
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <section class="teamData">
    <div class="container">
      <div class="teamDataHeader">
        <h3>IDSPL's team deploys <span>state-of-the-art tools and techniques</span> for making informed
          decisions.</h3>
        <p>The quest to develop a sustainable built environment has brought together dynamic architects and
          engineers in IDSPL to work in the domain of building energy efficiency, renewable energy integration
          in buildings, and green buildings. IDSPL’s multi-disciplinary team deploys state-of-the-art tools
          and techniques for making informed decisions.</p>
      </div>
    </div>
  </section>
  <section class="ourTeam">
    <div class="container">
      <div class="ourTeamList ourTeamListExtended">
        <h3>Our Team</h3>
        <hr>
        <section>
          <h3>Founders </h3>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-kanagaraj.php"> <img src="./images/Kanag.jpg" class="dp img-circle" />
                  <div class="">
                    <h4>Kanagaraj Ganesan</h4>
                    <h5>Founder & Director</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-roopa.php"><img class="dp img-circle" src="./images/roopa.png" />
                  <div class="">
                    <h4>Roopa Nair</h4>
                    <h5>Director and Integrator</h5>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section>
          <hr>
          <h3>Expert Advisors</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-kamal-kumar.php"> <img class="dp img-circle" src="./images/kamal.jpg" />
                  <div class="">
                    <h4>Kamal Kumar</h4>
                    <h5>Prinicpal Technical Advisor</h5>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-manvendra.php"> <img class="dp img-circle" src="./images/manu.jpg" />
                  <div class="">
                    <h4>Manvendra Deswal</h4>
                    <h5>Strategic Advisor</h5>
                  </div>
                </a>
              </div>
            </div>
            <!-- <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-annu.php"> <img class="dp img-circle" src="./images/annu.jpeg" />
                  <div class="">
                    <h4>Annu Sarin</h4>
                    <h5>Finance</h5>
                  </div>
                </a>
              </div>
            </div> -->
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-srinivas.php">
                  <img class="dp img-circle" src="./images/Dr.Srinivas.jpg" />
                  <div class="">
                    <h4>Dr. Srinivas NS</h4>
                    <h5>Mentor & Advisor</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-anil.php"> <img class="dp img-circle" src="./images/anil.jpg" />
                  <div class="">
                    <h4 style="text-align:center;">Anil Kumar</h4>
                    <h5>Senior Electrical & Mechanical Auditor</h5>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </section>
        <section>
          <hr>
          <h3>Core Team </h3>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-rajkumar.php"> <img class="dp img-circle" src="./images/raj.jpg" />
                  <div class="">
                    <h4>Rajkumar Balasubramaniyan</h4>
                    <h5>Sustainable Development Strategist</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-ankit.php"><img class="dp img-circle" src="./images/ankit.jpg" />
                  <div class="">
                    <h4>Ankit Anand</h4>
                    <h5>Rural Development Analyst</h5>
                  </div>
                </a>
              </div>
            </div>
            <!-- <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-shruti.php"><img class="dp img-circle" src="./images/shruti.jpeg" />
                  <div class="">
                    <h4>Shruti Gupta</h4>
                    <h5>Sustainability Consultant</h5>
                  </div>
                </a>
              </div>
            </div> -->
            <!-- <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-rajendra.php"><img class="dp img-circle" src="./images/rajendra.jpg" />
                  <div class="">
                    <h4>E Rajendra Bhargava</h4>
                    <h5>Sustainability Consultant</h5>
                  </div>
                </a>
              </div>
            </div> -->
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-vishnu.php"><img class="dp img-circle" src="./images/vishnu2.jfif" />
                  <div class="">
                    <h4>Vishnu</h4>
                    <h5> Product Manager (IOT)</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-tanaya.php"><img class="dp img-circle" src="./images/Tanaya_Paladugu_2.JPG" style="height: 150px;object-fit: cover;object-position: left;" />
                  <div class="">
                    <h4>Tanaya Paladugu</h4>
                    <h5>Sustainability Analyst</h5>
                  </div>
                </a>
              </div>
            </div>

          </div>
          <!-- <div class="row">

            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-rahul.php"> <img class="dp img-circle" src="./images/rahul.jfif" />
                  <div class="">
                    <h4>B. Rahul</h4>
                    <h5>Data Analyst</h5>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-mukul.php"><img class="dp img-circle" src="./images/mukul.jpg" />
                  <div class="">
                    <h4>Mukul Sharma</h4>
                    <h5>Full Stack Developer</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-tanu.php"><img class="dp img-circle" src="./images/tanu.jpg" />
                  <div class="">
                    <h4>Tanu Lodhi</h4>
                    <h5>UI/UX Expert</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-gaurav.php"><img class="dp img-circle" src="./images/gaurav.jpeg" />
                  <div class="">
                    <h4>Gaurav Bhatt</h4>
                    <h5>CFD Engineer</h5>
                  </div>
                </a>
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-brijesh.php"><img class="dp img-circle" src="./images/Brijesh_Jasani.jpg" />
                  <div class="">
                    <h4>Brijesh Jasani </h4>
                    <h5>Energy Perfomance Analyst</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-vidya.php"><img class="dp img-circle" src="./images/Vidya_Ramesh.jpg" />
                  <div class="">
                    <h4>Vidya Ramesh</h4>
                    <h5>Sustainability Analyst</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-ayushree.php"><img class="dp img-circle" src="./images/Ayushree.jpeg" />
                  <div class="">
                    <h4>Ayushree</h4>
                    <h5>Sustainability Analyst</h5>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section>
          <hr>
          <h3>Extended Team</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-ranjith.php">
                  <img class="dp img-circle" src="./images/ranjith.jpg" />
                  <div class="">
                    <h4>Ranjith A R</h4>
                    <h5>Energy Auditor</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-naga.php"><img class="dp img-circle" src="./images/naga2.jpg" />
                  <div class="">
                    <h4>Naga Venkata Sai Kumar Manapragada</h4>
                    <h5>Building Performance Analyst</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-anubha.php"> <img class="dp img-circle" src="./images/anu.jpg" />
                  <div class="">
                    <h4>Anubha Ashtikar</h4>
                    <h5>Sustainability Consultant</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-rohit.php"> <img class="dp img-circle" src="./images/Rohit.jpg" style="height: 150px;object-fit: cover;object-position: center;" />
                  <div class="">
                    <h4>Rohit Jindal</h4>
                    <h5>Data Scientist</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="teamDetails">
                <a href="team-anush.php"> <img class="dp img-circle" src="./images/V Swaminathan.2.jpg" style="height: 150px;object-fit: fit;object-position: top; border:1px solid grey;" />
                  <div class="">
                    <h4>Anush Swaminathan</h4>
                    <h5>Software Development Expert</h5>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <!--  Search Query  -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

    <script>
      $('#navSearchBtn').on('click', function(){
        $('.search-outer-div').addClass('d-block');
      });
    </script>

    <script>
      $('#closeSearchBtn').on('click',function(){
        $('.search-outer-div').addClass('d-none');
        $('.search-outer-div').removeClass('d-block');
      });
    </script>
    <script>
      $('#searchQuery').typeahead({
        minLength: 4,
        source: function(query, result) {
            $.ajax({
              url:"search.php",
              method:"GET",
              data:{query:query},
              dataType:"json",
              success:function(data){
                result($.map(data, function(item){
                  return item.title
                }));
              }
            })
        },
      })
    </script>
    <script>
      $('#searchBtn').on('click', function(e){
        e.preventDefault();
        let search_value =  $('#searchQuery').val();

        $.ajax({
          url:"submit_search.php",
          type:"POST",
          data:{search_value:search_value},
          // dataType:"json",
          success:function(data){
            let details = JSON.parse(data);
            if(details.type == 'blog'){
              window.location = `blogs/submit_views.php?id=${details.id}`;
            }else if(details.type == 'portfolio'){
              location.replace(details.location);
            }
          }
        });
      });
    </script> -->


  <?php require_once 'blogs/footer.php'; ?>
  <script>
    $(document).ready(function() {
      $('a.pagePrint').click(function() {
        window.print();
      });
    });
  </script>
  </body>

</html>