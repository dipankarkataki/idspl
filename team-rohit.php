<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Rohit Jindal</title>
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
				<li class="breadcrumb-item active" aria-current="page">Rohit Jindal</li>
			  </ol>
			 </nav>
			</div>
			<div class="col-sm-6">
				<div class="teamsocial text-right">
					<ul class="list-unstyled list-inline">
						<li><a   href="#" class="pagePrint" ><i class="fa fa-print"></i></a></li>
						<!-- <li><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank" class="team_social_url"><i class="fa fa-facebook-f"></i></a></li> -->
						<li><a href="https://www.linkedin.com/in/rohit0239/" target="_blank" class="team_social_url" style="background-color:#0077b5;"><i class="fa fa-linkedin"></i></a></li>
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
								<img src="./images/Rohit.jpg" alt="" class="img-rounded"/>
								<h4 style="text-align:center;"> Rohit Jindal</h4>
								<h5><i class="fa fa-address-card-o" aria-hidden="true"></i>Data scientist</h5>
								<h5 style="margin-top:10px;"><i class="fa fa-map-marker" aria-hidden="true"></i>New Delhi</h5>
								<p style="text-align: inherit;">
									<span style="color:blue;font-weight:500;font-size:12px;">#Product_design</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Product_analysis</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Data_modelling</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Building_applications</span>
									<!-- <span style="color:blue;font-weight:500;font-size:12px;">#Project Management</span> -->
								</p>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
                                    <!-- <li>No Data</li> -->
									<li>Product design and analysis</li>
									<li>Data modelling</li>
									<li>Building applications</li>
									<!-- <li>Renewable Energy</li>
									<li>Energy Audits</li>
									<li>Smart Cities & SDGs</li>
									<li>Sustainable Cooling</li>
									<li>Project Management</li> -->
								</ul>
							</div>
							<!-- <div class="cv">
								<a href="cv/CV Rajkumar.pdf" download><i class="fa fa-download"></i> CV Download</a><br/><br/>
								<a href="cv/Rajkumar_Publications.pdf" download><i class="fa fa-download"></i> Publication</a>
							</div> -->
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 d-print-table-cell">
						<div class="m_project_details">
							<div class="member_desc">
								 <p>Rohit Jindal's domain expertise are in Air Quality, Energy and Healthcare sector. He has 6+ years of experience in product design and analysis, proficient in data modelling, data pre-processing, building data-intensive applications and dashboards.</p>
								<!--<div id="more">
								<p>He has worked as a Project Officer for the All India Institute of Local Self Government (AIILSG) to facilitate Energy Conservation Building Code (ECBC) implementation in the state of Karnataka. He is working with IDSPL as ‘Senior Energy Analyst’ for integrating the best practices in the field of building energy efficiency.</p>
								</div>
								<a href="#" class="read-more" onclick="readmore()" id="readmore">Read more </a> -->
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

							<h2>Projects Worked</h2>
							<div class="allProjectDiv min-height">
								<div class="work_projects">
									<h3>Development of Eco-Niwas Samhita Part II, India</h3>
									<a href="development-of-Eco-Niwas-Samhita-Part II-India.php">Details </a>
								</div>
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

