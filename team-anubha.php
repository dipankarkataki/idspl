<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Anubha Ashtikara</title>
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
				<li class="breadcrumb-item active" aria-current="page">Anubha Ashtikar</li>
			  </ol>
			 </nav>
			</div>
			<div class="col-sm-6">
				<div class="teamsocial text-right">
					<ul class="list-unstyled list-inline">
						<li><a   href="#" class="pagePrint" ><i class="fa fa-print"></i></a></li>
						<!-- <li><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank" class="team_social_url"><i class="fa fa-facebook-f"></i></a></li> -->
						<li><a href="https://www.linkedin.com/in/anubha-ashtikar-37382b171/" target="_blank" class="team_social_url" style="background-color:#0077b5;"><i class="fa fa-linkedin"></i></a></li>
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
								<img src="./images/anu.jpg" alt="" class="img-rounded" />
								<h4 style="text-align:center;">Anubha Ashtikar</h4>
								<h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Sustainability Consultant</h5>
								<!-- <h5 style="margin-top:10px;"><i class="fa fa-map-marker" aria-hidden="true"></i> Raipur</h5> -->
								<p style="text-align: inherit;">
									<span style="color:blue;font-weight:500;font-size:12px;">#Architect</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Energy_Analysis</span>
								</p>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
									<li> Energy performance analysis</li>
									<li>Architectural design</li>
									<li>Green Buildings</li>
									<li>EE Policy Implementation</li>
									<li>Strategic Project Planning </li>
									<li>Sustainable Urban & Rural Development</li>
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
								<p>Ar. Anubha Ashtikar is an Architect with more than 9 years of professional experience in the field of Architectural Design and Construction, Building Energy Efficiency and Sustainability. She has completed her B. Arch from NIT, Raipur and her post-graduation in Sustainable Architecture from CEPT, Ahmedabad.<span id="dots">...</span></p>
								<div id="more">
								<p>She is currently working with IDSPL as 'Sr. Sustainability Expert'.
Prior Work Experience: she was working with AIILSG in Implementation of ECBC in 15 states and UTs across India as a Project Lead. Working experience in the building and development sector as an architect – working with LEA associates as Project Support Consultant for Raipur Development Authority, developing Sustainable Village Development proposals under “Adarsh Gram Yojana”, and other architectural projects.</p>
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
							<div class="allProjectDiv min-height">
								<div class="work_projects">
									<h3>Chapter on "Sustainable Cooling for All" in "Global Status Report 2021 for Building and Construction"</h3>
									<a href="Chapter-on-sustainable-cooling.php">Details </a>
								</div>
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

