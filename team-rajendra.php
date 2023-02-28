<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Rajendra Bhargava</title>
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
				<li class="breadcrumb-item active" aria-current="page">E Rajendra Bhargava</li>
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
								<img src="./images/rajendra.jpg" alt="" class="img-rounded" />
								<h4>E Rajendra Bhargava</h4>
								<h5>Sustainability Consultant</h5>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
									<li>Renewable Energy, Green Buildings</li>
									<li>Building Energy Efficiency</li>
									<li>HVAC Design</li>
									<li>Building Energy Performance Analysis</li>
								</ul>
							</div>
							<div class="cv">
								<a href="cv/CV-Bhargava.pdf" download><i class="fa fa-download"></i> CV Download</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 d-print-table-cell">
						<div class="m_project_details">
							<div class="member_desc">
								<p>E Rajendra Bhargava holds a Bachelor’s Degree in Mechanical Engineering and Master’s degree in Renewable Energy Engineering & Management from TERI University. He is currently working with IDSPL as Sustainability Consultant.
Prior Work Experience: Worked as Sustainability Consultant at AEON Integrated Building Design Consultants for almost two years. <span id="dots">...</span></p>
								<div id="more">
								<p>His primary responsibility at AEON involved carrying out building and site level simulations & green building facilitation.
He possess knowledge about Renewable energies, building physics, net-zero energy buildings and various green building rating systems including LEED, IGBC and GRIHA. He is capable of carrying out various simulations (including Energy, Daylight, Artificial Lighting and Site Level) of the buildings and campus. He was involved in multiple sustainability and green building projects to achieve high performance and green building rating.</p>

<h4>Member:</h4>
<ul>
<li>ISHRAE – Indian Society of Heating Refrigerating and Air Conditioned Engineers</li>

<li>IBPSA India – International Building Performance Simulation Association (India)</li>

<li>ASHRAE – American Society of Heating Refrigerating and Air Conditioned Engineers</li>
</ul>
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
							<h2>Projects Worked</h2>
							<div class="work_projects">
								<h3>Implementation of ECBC in Indian States and UTs</h3>
								<a href="ecbc-implementation.php">Details </a>
							</div>
							<div class="work_projects">
								<h3>Development of Energy Conservation Building - Residential (ECBC-R)</h3>
								<a href="energy-conservation.php">Details </a>
							</div>
							<div class="work_projects">
								<h3>Implementation of net zero energy retrofitting of United Nations House in Delhi</h3>
								<a href="near-zero-energy.php">Details </a>
							</div>
							<div class="work_projects">
								<h3>Energy plus - pre and post processing tools</h3>
								<a href="energyplus-tools.php">Details </a>
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
  </body>

</html>

