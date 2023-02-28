<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
        <title>Team - Ranjith</title>
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
				<li class="breadcrumb-item active" aria-current="page">Ranjith</li>
			  </ol>
			 </nav>
			</div>
			<div class="col-sm-6">
				<div class="teamsocial text-right">
					<ul class="list-unstyled list-inline">
						<li><a   href="#" class="pagePrint" ><i class="fa fa-print"></i></a></li>
						<!-- <li><a href="https://www.facebook.com/people/Integrative-Design-Solutions-Private-Limited/100083386219120/" target="_blank" class="team_social_url"><i class="fa fa-facebook-f"></i></a></li> -->
						<li><a href="https://www.linkedin.com/in/ranjithramla/" target="_blank" class="team_social_url" style="background-color:#0077b5;"> <i class="fa fa-linkedin"></i></a></li>
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
								<img src="./images/ranjith.jpg" alt="" class="img-rounded" />
								<h4 style="text-align:center;">Ranjith A R</h4>
								<h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Energy Auditor</h5>
								<h5 style="margin-top:10px;"><i class="fa fa-map-marker" aria-hidden="true"></i> No Data </h5>
								<p style="text-align: inherit;">
									<span style="color:blue;font-weight:500;font-size:12px;">#Energy_Performance_Analysis</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Energy_Audit</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Green_Audit</span>
									<span style="color:blue;font-weight:500;font-size:12px;">#Safety_Audit</span>
								</p>
							</div>
							<div class="capability">
								<h3>Capabilities</h3>
								<ul class="list-unstyled">
									<li>Energy Performance Analysis</li>
									<li>Energy Audits</li>
								</ul>
							</div>
							<!--<div class="cv">-->
							<!--	<a href="cv/CV Rajkumar.pdf" download><i class="fa fa-download"></i> CV Download</a><br/><br/>-->
							<!--	<a href="cv/Rajkumar_Publications.pdf" download><i class="fa fa-download"></i> Publication</a>-->
							<!--</div>-->
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 d-print-table-cell">
						<div class="m_project_details">
							<div class="member_desc">
								<p>Ranjith, is an energy efficiency expert having ample experience in energy audits and implementation of flagship programs of Bureau of Energy Efficiency. Basically, he is a mechanical engineer having post-graduation in Energy Engineering from Anna University. Currently he is working for the Bureau of Energy Efficiency as a Consultant and is operating from the Kerala State Electricity Board Limited, Trivandrum, Kerala.  <span id="dots">...</span></p>
								<div id="more">
								<p>He is a certified Energy Auditor from the Bureau of Energy Efficiency and have experience in auditing industries, commercial establishments, municipal pumping, street lighting etc. He also holds hands on experience in Power Quality Audits, Electrical Safety Audits, Green Audits etc. </p>
								<p>He has worked with different state governments and Union Territories in the implementation of Energy Conservation Building Code in the States of Tripura, Sikkim, Andaman & Nicobar Islands. </p>
								<p>Apart from this, Mr. Ranjith has a strong hand in training and skill development. He is a certified trainer of National Skill Development Corporation (NSDC) and Additional Skill Acquisition Program (ASAP) Government of Kerala. He is also the resource person for Energy Management Centre, Kerala.</p>
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

