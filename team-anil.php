<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Anil Kumar</title>
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
				<li class="breadcrumb-item active" aria-current="page">Anil Kumar</li>
			  </ol>
			 </nav>
			</div>
			<div class="col-sm-6">
				<div class="teamsocial text-right">
					<ul class="list-unstyled list-inline">
						<li><a   href="#" class="pagePrint" ><i class="fa fa-print"></i></a></li>
						<!-- <li><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank" class="team_social_url"><i class="fa fa-facebook-f"></i></a></li> -->
						<li><a href="https://www.linkedin.com/company/idspl/about/" target="_blank" class="team_social_url" style="background-color:#0077b5;"><i class="fa fa-linkedin"></i></a></li>
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
								<img src="./images/anil.jpg" alt="" class="img-rounded" />
								<h4 style="text-align:center;">Anil Kumar</h4>
								<h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Sr. Audit Advisor</h5>
								<h5 style="margin-top:10px;"><i class="fa fa-map-marker" aria-hidden="true"></i> New Delhi </h5>
								<p style="text-align: inherit;">
									<span style="color:blue;font-weight:500;font-size:12px;">#Energy_Audit</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Industries</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Buildings</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#M&V</span>
								</p>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
									<li>Renewable Energy</li>
									<li>Building Energy Audit</li>
									<li>Renewable Energy Audit</li>
									<li>Industrial Energy Audit</li>
									<li>Safety Audit</li>
									<li>Environmental Impact Assessment</li>
									<li>Clean Development Mechanisms</li>
									<li>Biomass Assessment Study</li>
									<li>Energy Audit</li>
									<li>Electrical Safety Audit</li>
									<li>Energy Management</li>
									<li>Monitoring and Verification</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 d-print-table-cell">
						<div class="m_project_details">
							<div class="member_desc">
								<p> Anil Kumar has more than 27 years of experience in the energy sector and holds vast expertise in building, industrial, water 
									and renewable energy audits and safety audits for industries and commercial developments.<span id="dots">...</span></p>
								<div id="more">
								<p>He has completed more than 200 Building &  Industrial Energy Audits and more than 600 Pump Audit for Agriculture and Drinking Water in urban local bodies added with over 300 Safety Audits for Industries and Commercial Buildings and 5 Solar Power plant Audit. He also has conducted 60 environmental Impact Assessments and over 100 Clean Development Mechanisms added with more than 25 Biomass Assessment studies.</p>
								<p> He is an ace Accredited Energy Auditor empaneled with PEDA, PCRA, MPUVN, GEDA, LIC – Northern Zone; BEE and EESL as PAT Consultant for Textile and Paper Sector; IOCL, HPCL and IOT for electrical safety and testing consultant; India SME Technology Services Limited; Asian Paints, Thermax Ltd, Vodafone.</p>
								<p>He is actively involved in the field of Rural and Renewable Energy Development, Appropriate Technology and Sustainable Development for around 17 years. Key areas of Expertise Research & Development of Solar products, Market promotion of Renewable and energy efficient product, Energy efficiency, Technical and Marketing aspect of Environmentally Sound Biomass Energy based technologies for cooking, heating, lighting and electricity generation</p>
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

