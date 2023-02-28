<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Ayushree</title>
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
				<li class="breadcrumb-item active" aria-current="page">Ayushree</li>
			  </ol>
			 </nav>
			</div>
			<div class="col-sm-6">
				<div class="teamsocial text-right">
					<ul class="list-unstyled list-inline">
						<li><a   href="#" class="pagePrint" ><i class="fa fa-print"></i></a></li>
						<!-- <li><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank" class="team_social_url"><i class="fa fa-facebook-f"></i></a></li> -->
						<li><a href="https://www.linkedin.com/in/ayushree-khanna-8993621b6/" target="_blank" class="team_social_url" style="background-color:#0077b5;"><i class="fa fa-linkedin"></i></a></li>
						<!-- <li><a href="https://twitter.com/IDSPL3" target="_blank" class="team_social_url"><i class="fa fa-twitter"></i></a></li> -->
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
								<img src="./images/Ayushree.jpeg" alt="" class="img-rounded" />
								<h4 style="text-align:center;">Ayushree</h4>
								<h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Sustainability Analyst</h5>
								<h5 style="margin-top:10px;"><i class="fa fa-map-marker" aria-hidden="true"></i> New Delhi</h5>
								<p style="text-align: inherit;">
									<span style="color:blue;font-weight:500;font-size:12px;">#Architect</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Sustainability_analyst</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Artist</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Sports_person</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Wanderlust</span>
								</p>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
									<li>Architectural design</li>
									<li>Climate assessment </li>
									<li>Sustainability</li>
									<li>Research</li>
								</ul>
							</div>
							<div class="cv">
								<a href="resume/Ayushree_CV.pdf" download><i class="fa fa-download"></i> CV Download</a><br/><br/>
								<!-- <a href="cv/Rajkumar_Publications.pdf" download><i class="fa fa-download"></i> Publication</a> -->
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 d-print-table-cell">
						<div class="m_project_details">
							<div class="member_desc">
								<p>Ayushree has finished her Master’s in Urban Planning from BIT, Mesra, and her Bachelor’s in Architecture from PIADS, Nagpur.<span id="dots">...</span></p>
								<div id="more">
								<p>
                                    She looks at the world through the lens of sustainability and wants to make the planet a better place to live in. She is concerned about climate change and works for the cause.
                                    She strongly believes that architecture and planning have the ability to solve complex societal issues and can bring positive change in the world.
                                    She also believes that we are the first generation to feel the effect of climate change and the last generation who can actually do something about it.
                                    Ayushree supports IDSPL on climate assessment, policy development, and passive cooling sustainable solutions.
                                </p>
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

							<!-- <h2>Projects Worked</h2>
							<div class="allProjectDiv min-height">
								
								<div class="work_projects">
									<h3>Energy and Environmental Audit of UNICEF India Headquarters, New Delhi</h3>
									<a href="audit-of-unicef-india-headquarters.php">Details </a>
								</div>

								<div class="work_projects">
									<h3>Climate-smart Hospitals in India - Assessing the energy footprint and associated GHG emissions of hospitals” </h3>
									<a href="energy-survey-for-climate-smart-hospital-india.php">Details </a>
								</div>
								<div class="work_projects">
									<h3>Climate Responsive Housing Development for Border Road Organisation’s (BRO) Project</h3>
									<a href="climate-responsive-housing-development-for-bro.php">Details </a>
								</div>
								<div class="work_projects">
									<h3>Energy and Environmental Audit of Manipal University - Jaipur Campus</h3>
									<a href="manipal-university.php">Details </a>
								</div>
								<div class="work_projects">
									<h3>LEED Certification of Pacific Mall</h3>
									<a href="leed-certification-of-pacific-mall.php">Details </a>
								</div>
								<div class="work_projects">
									<h3>Develop training sessions, working aids, Training manuals etc.</h3>
									<a href="training-sessions.php">Details </a>
								</div>
								<div class="work_projects">
									<h3>LEED Certification of UN House</h3>
									<a href="leed-certification-of-un-house.php">Details </a>
								</div>
								<div class="work_projects">
									<h3>2000-Watt Smart Cities (2000WSC) India rating of Symbiosis International University</h3>
									<a href="symbiosis-international-university.php">Details </a>
								</div>
								<div class="work_projects">
									<h3>National Hospital Survey</h3>
									<a href="national-hospital-survey.php">Details </a>
								</div>
							</div>
							<div class="read-div">
								<button class="rmore">View All</button>
								<button class="rless d-none">View Less</button>
							</div> -->
							<!-- <div class="work_projects">
								<h3>Assotech Commercial & Hotel Complex</h3>
								<a href="assotech-commercial-hotel-complex.php">Details </a>
							</div>
							<div class="work_projects">
								<h3>Reon SkyOn Club </h3>
								<a href="reon-skyon-club.php">Details </a>
							</div> -->
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

	  <script>
			

			$('.rmore').on('click', function(){
				$('.allProjectDiv').addClass('max-height');
				$('.allProjectDiv').removeClass('min-height');
				$('.rless').addClass('d-block');
				$('.rless').removeClass('d-none');
				$('.rmore').addClass('d-none');
			});	

			$('.rless').on('click', function(){
				$('.allProjectDiv').removeClass('max-height');
				$('.allProjectDiv').addClass('min-height');
				$('.rless').addClass('d-none');
				$('.rless').removeClass('d-block');
				$('.rmore').removeClass('d-none');
			});
			
	  </script>
  </body>

</html>

