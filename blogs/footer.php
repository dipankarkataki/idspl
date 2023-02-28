  <style>
    .main-footer h4{
      color:white;
      border-bottom: 1.5px dashed #d0c5c5;
      padding-bottom: 15px;
    }
    .contact-details .address{
      text-align: inherit;
      font-size: 13px;
      color: white;
      margin-left: 10px;
    }
    .main-footer .email{
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-left:10px;
    }

    .main-footer .email span{
      color:white;
      margin-right:10px;
    }

    .main-footer .email .fa-envelope{
      font-size:17px;
      color:#e6a300;
    }

    .main-footer .social{
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-left:10px;
      margin-top:10px;
    }

    .main-footer .social span{
      margin-right:10px;
    }

    .main-footer .social .fa-linkedin-square{
      color:#0077b5;
      font-size: 25px;
    }

    .main-footer .social .fa-facebook-square{
      color:#4867aa;
      font-size: 25px;
    }
    .main-footer .quick-links{
      margin-top: 9px;
      margin-left:10px;
      
    }
    .main-footer .quick-links li{
      margin-bottom:3px;
    }
    .main-footer .quick-links a{
      color:white;
      font-size: 14px;
    }
    .main-footer .quick-links li:hover{
      transform: scale(1,1.2);
      transition:0.3s;
      text-shadow: 0px 4px 5px white;
    }

    .main-footer .tweets{
      margin-top: 10px !important; 
      margin-bottom: 0px  !important;
      margin-left: 10px  !important;
    }

    .main-footer .fb_iframe_widget iframe{
      border-radius: 10px;
      margin-top: 4px;
    }
    .main-footer .subscribe{
      width: 180px;
      height: 40px;
      border-radius: 6px 0px 0px 6px;
      border:none;
    }

    ::placeholder{
      font-size:12px;
      padding-left:10px;
    }
    

  </style>
  <footer>
    <div class="container-fluid">
      <div class="row main-footer">
        <div class="col-md-3 col-sm-12">
          <h4>Contact Us</h4>
          <div class="contact-details">
            <p class="address">172, Indraprastha Apartments, Pocket 3, Sector 12, Dwarka New Delhi 110075</p>
            <div class="email">
              <span><i class="fa fa-envelope"></i></span>
              <span>kanagaraj@ids-pl.com</span>
            </div>
            <div class="social">
              <span><a href="https://www.linkedin.com/company/idspl/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></span>
              <span><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4>Quick Links</h4>
          <ul class="quick-links">
            <li><a href="../about.php" >About</a></li>
            <li><a href="../team.php">Team</a></li>
            <li><a href="../services.php">Services</a></li>
            <li><a href="../portfolio.php">Portfolio</a></li>
            <li>
            <?php  if (strpos($_SERVER['REQUEST_URI'], "blogs") !== false){
                echo '<a href="blogs.php">Blogs</a>';
              }else{
                echo '<a href="blogs/blogs.php">Blogs</a>';
              }
            ?>  
            
            </li> 
            <li><a href="../careers.php">Careers</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-12">
          <h4 style="margin-bottom:14px;">Our Tweets</h4>
          <a class="twitter-timeline tweets" 
            href="https://twitter.com/IDSPL3" data-width="3800"
            data-height="250" >Loading....</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-md-4 col-sm-12">
          <h4 style="margin-bottom:10px;">Our Facebook Posts</h4>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F100083386219120&tabs=timeline&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="250" style="border:none;overflow:hidden;border-radius:10px;" loading="lazy" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          <!-- <div class="fb-page"  style="border-radius:10px;"
            data-href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" 
            data-tabs="timeline" data-width="380" 
            data-height="250" data-small-header="true" 
            data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" >
            <blockquote cite="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" >Loading..</a>
            </blockquote> 
          </div> -->
        </div>
        <!-- <div class="col-md-1 col-sm-12">
          <h4 style="margin-bottom:10px;">Subscribe</h4>
          <div class="input-group" style="margin-top:15px;">
            <input type="text" name="subscribe" class="subscribe" placeholder="Please Enter Your Email">
            <div class="input-group-btn">
              <button class="btn btn-success" type="submit" style="height: 40px;border:none;">
                <i class="fa fa-paper-plane"></i>
              </button>
            </div>
          </div>
        </div> -->
        <!-- <div class="footerList">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-2 linking">
              <h4>Information</h4>
                <div class="row">
                  <ul class="col-xs-4" >
                    <li><a href="../about.php" style="font-size: 15px" >About</a></li>
                    <li><a href="../team.php" style="font-size: 15px">Team</a></li>
                    <li><a href="../services.php" style="font-size: 15px">Services</a></li>
                    <li><a href="../portfolio.php" style="font-size: 15px">Portfolio</a></li>
                    <li><a href="blogs.php" style="font-size: 15px">Blogs</a></li> 
                    <li><a href="../careers.php" style="font-size: 15px">Careers</a></li>
                  </ul>
                  <ul class="col-xs-4">
                  </ul>
                  <ul class="col-xs-4">
                  </ul>
                </div>
              </div>
              <div class="col-md-2 linking linkingAddress">
                <h4>Contact</h4>
                <ul>
                  <li ><img src="../images/placeholder.svg"> 
                  <h4 style="font-size: 15px">Flat no. 172,<br>Indraprastha Apartments, Pocket 3, Sector 12, Dwarka New Delhi 110075</h4> 
                </li>
                  <li><img src="../images/email.svg"><p style="font-size: 15px; color:#C3C4C5; margin-top: -5px; padding-left:10px"> kanagaraj@ids-pl.com<p> </li>
                  <li><img src="../images/linkedin.svg"><a style="font-size: 15px" href="https://www.linkedin.com/company/idspl/about/" target="_blank"></a> </li>
                </ul>
              </div>
              <div class="col-md-4 linking linkingAddress">
                <a class="twitter-timeline" href="https://twitter.com/IDSPL3" data-width="500"
                  data-height="500" >National Park Tweets - Curated tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

              </div>
              <div class="col-md-4 linking linkingAddress">
                <div class="fb-page" data-href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" data-tabs="timeline" data-width="430" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/">Integrative Design Solutions Private Limited</a></blockquote></div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </footer>
  <div class="secondaryFooter">
    <h4>&copy; <?php echo date('Y'); ?> IDSPL - ALL RIGHTS RESERVED.</h4>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script3.js"></script>

