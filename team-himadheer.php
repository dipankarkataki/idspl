<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Himadheer Dadi</title>
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
				<li class="breadcrumb-item active" aria-current="page">Himadheer Dadi</li>
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
								<img src="./images/himadheer.jpg" alt="" class="img-rounded" />
								<h4>Himadheer Dadi</h4>
								<h5>Sustainability Consultant</h5>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
									<li>Sustainable Architectural Design</li>
									<li>Green Buildings</li>
									<li>Policy Implementation</li>
								</ul>
							</div>
							<div class="cv">
								<!--<a href="http://ids-pl.com/demo/team/pdf/test.pdf" download><i class="fa fa-download"></i> Download</a>-->
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 d-print-table-cell">
						<div class="m_project_details">
							<div class="member_desc">
								<p>Himadheer Dadi joined IDSPL in July 2018, initially working for SR associates, Hyderabad as a Project Architect. In IDSPL I have been working as Project Officer – Building Energy Simulations. I am specialized in the field of new and refurbished buildings (and more in general of the built environment) with high performances, high energy efficiency and limited environmental impact. I had an overall experience of three years (two years as an Architect and one year as energy simulations expert). I certify myself as a strongly innovative professional, able to manage the complexity of the very energy-efficient built environment: either because I master the tools and the cultural aspects required to guide a design process integrating different disciplines (multi-disciplinary) at different scales (multi-scalar), which is the only route to cost-effective solutions; or because I acquired the ability and the tools to model in detail the components of buildings from the point of view of structural behavior and building physics.<span id="dots">...</span></p>
								<div id="more">
								<p>Education: <br/>
I completed my Bachelor of Architecture from Acharya Nagarjuna University, Guntur and Master’s degree in Building and Architectural Engineering from Politecnico di Milano in Italy.</p>
								</div>
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

