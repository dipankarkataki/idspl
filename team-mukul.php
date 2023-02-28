<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Mukul Sharma</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>

<?php $page=3; include 'header.php'; ?>
      <section class="breadcrumb-container container">
          <div class=" row">
		   <div class="col-sm-6">
             <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="team.php">Team</a></li>
				<li class="breadcrumb-item active" aria-current="page">Mukul Sharma</li>
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

     <!-- <section class="our-capability-section">
        <div class="container">
          <div class="our-capability-container">
            <h3>Our capability</h3>
            <ul class="capability-list">
              <li class="capability-item">Energy performance analysis</li>
              <li class="capability-item">Architectural design</li>
              <li class="capability-item">IOT</li>
              <li class="capability-item">Architectural design</li>
              <li class="capability-item">Blockchain development</li>
              <li class="capability-item">EE product development</li>
              <li class="capability-item">CFD</li>
              <li class="capability-item">Building MEP Design</li>
            </ul>
          </div>
        </div>
      </section>-->

      <section class="team-members">
          <div class="container d-print-table">
				<div class="row d-print-table-row">
					<div class="col-xs-12 col-sm-5 col-md-3 d-print-table-cell">
						<div class="members_info">
							<div class="member">
								<img src="./images/mukul.jpg" alt="" class="img-rounded" />
								<h4>Mukul Sharma</h4>
								<h5>Full Stack Developer</h5>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
									<li>Full Stack Software Development</li>
									<li>IOT</li>
									<li>Android & IOS Application Development</li>
								</ul>
							</div>
							<div class="cv">
								<a href="cv/CV mukul sharma.pdf" download><i class="fa fa-download"></i>CV Download</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 d-print-table-cell">
						<div class="m_project_details">
							<div class="member_desc">
								<p>Mukul Sharma is a graduate in computer science engineering he is experienced Full Stack Developer with a demonstrated history of working in the information technology and services industry. He has developed E-Commerce and Content Management Systems. <!--<span id="dots">...</span>--></p>
								
								<p>He has Passion for building highly polished user experience and scalable products. He has strong knowledge of websites Stacks HTML, CSS, JavaScript, NodeJs, Angular and PHP technology. He is a passionate coder, but when he is not working, he likes to travel and watch movies.</p>
								<!--<div id="more"></div>
								
								<a href="#" class="read-more" onclick="readmore()" id="readmore">Read more </a>
							</div>
							<script>
								function readmore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("readmore");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
							</script>
							<!--<h2>Projects Worked</h2>
							<div class="work_projects">
								<h3>Energy Efficiency Improvements in Commercial Buildings (UNDP-GEF-BEE) IDS Content</h3>
								<h4>Building Energy Efficiency</h4>
								<a href="portfolio.php">All Projects </a>
							</div>-->
	
						</div>
					</div>
				</div>
            </div>
          </div>
      </section>
<?php include 'footer.php'; ?>
	  <script>
	  $(document).ready(function(){
	  
		$('a.pagePrint').click(function(){
//w=window.open();
//w.document.write($('.team-members').html());
window.print();

});
});
	  </script>
  </body>

</html>

