		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="./bootstrap.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="./style.css">
	   <link rel="stylesheet" href="./print.css" type="text/css" media="print" />
     <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
     
     <script async src="https://cse.google.com/cse.js?cx=008347404309872609837:w0xs1ktkkjq"></script>

     <style>
        .search-box{

        }
     </style>
  </head>
<body data-gr-c-s-loaded="true" class="">

      <header>
        
		  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="navbar-brand" href="./">
                          <img src="./images/logo.png" alt="">
                      </a>
        </div>
    
                              
                           

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
          <ul class="nav navbar-nav navbar-right" style="margin: 0px">
              <li style="padding-top: 5px"><a href="index.php">Home</a></li>
                <li style="padding-top: 5px" <?php if($page==2) {?>class="activeLi"<?php } ?>><a href="about.php">About</a></li>
                <li style="padding-top: 5px" <?php if($page==3) {?>class="activeLi"<?php } ?>><a href="team.php">Team</a></li>
                <li style="padding-top: 5px" <?php if($page==4) {?>class="activeLi"<?php } ?>><a href="services.php">Services</a></li>
                <li style="padding-top: 5px" <?php if($page==5) {?>class="activeLi"<?php } ?>><a href="portfolio.php">Portfolio</a></li>
                <li style="padding-top: 5px" <?php if($page==7) {?>class="activeLi"<?php } ?>><a href="blogs/blogs.php">Blogs</a></li>
                <li style="padding-top: 5px" <?php if($page==6) {?>class="activeLi"<?php } ?>><a href="careers.php">Careers</a></li>
                <li style="padding-top: 5px">
                  <!-- <div class="input-group" style="width:150px;margin-top:10px;">
                    <input type="text" id="search_query"  name="search_query" class="form-control" placeholder="Search" style="height: 30px;border-radius:5px;">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit" style="height: 30px;">
                        <i class="fa fa-search" aria-hidden="true" style="font-size:20px;"></i>
                      </button>
                    </div>
                  </div> -->
                  <a href="javascript:void(0);"  id="navSearchBtn">
                    <i class="fa fa-search" aria-hidden="true" style="font-size:20px;"></i>
                  </a>
                </li>
                <li style="padding-top: 13px;float:right;" class="Signup"><a style="padding: 8px 20px" href="contact-us.php">Contact Us</a></li>
                <li> 
                  <div style="width: 300px;" >
                    <div class="gcse-search"></div>
                  </div> 
                </li>
          </ul>  
          <div>
            <!-- <form method="POST">
              <div class="input-group" style="width:500px;margin-top:10px;margin-bottom:10px;margin-left:40%;">
                <input type="text" id="search_query"  name="search_query" class="form-control" placeholder="Search" style="height: 30px;border-radius:5px;">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="search_submit" style="height: 30px;">
                    Submit
                  </button>
                </div>
              </div>
            </form> -->

          </div>
    </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      </header>

  <!-- Typeahead -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<!-- Loader -->
<script src="js/jquery.min.js"></script>
<script>
    $(window).on("load", function() {
        $(".loader").fadeOut(1000);
    });
</script>
<?php include './searching_outside_blog.php' ?>



<!-- <script type="text/javascript">
    var route = "autocomplete-search.php";
    $('#search_query').typeahead({
        source: function(query, process) {
            return $.get(route, {
                query: query
            }, function(data) {
                return process(data);
            });
        }
    });
</script> -->