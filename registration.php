<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Registration</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>

   <?php $page=4; include 'header.php'; ?>
<section class="breadcrumb-container container">
          <div class=" row">
		   <div class="col-sm-6">
             <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active"> Registration </li>
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
      <!--<section class="secondaryHeader">-->
      <!--    <div class="container">-->
      <!--        <div class="secondaryHeaderContent">-->
      <!--            <h4>Contact Us</h4>-->
      <!--            <p>Get in touch with us to know more.</p>-->
      <!--        </div>-->
      <!--    </div>-->
      <!--</section>-->

      <section >
          <div class="container-fluid">
		  <div class="row">
		  <div class="col-xs-12 col-sm-12">
			 <img src="./images/second.jpg">
              </div>
			  
              
			   </div>
          </div>
      </section>
	<div class="container form_container"  >
		<div style="background-color:#f2f2f2">
			<h2 id="header_1" class="form-header" data-component="header">
				  Course Registration!
				</h2>
				
			<form action="registration2.php" id="contactForm" method="post">
			
			 <div class="form-group">
			<label for="fname">Your Title <span class="require">*</span></label><br>
			<label class="radio-inline">
             <input type="radio" name="title" value="Ar" >Ar.
            </label>
            <label class="radio-inline">
            <input type="radio" name="title" value="Dr" >Dr.
            </label>
            <label class="radio-inline">
            <input type="radio" name="title" value="Mr" >Mr.
            </label>
            <label class="radio-inline">
            <input type="radio" name="title" value="Ms" >Ms.
            </label>
			 </div>
			 
			 
			  <div class="form-group">
				<label for="fname">Name <span class="require">*</span></label>
				<input type="text" class="form-control" id="fname" name="fname">
			  </div>
			  <div class="form-group">
				<label for="femail">Email <span class="require">*</span></label>
				<input type="email" class="form-control" id="femail" name="femail">
			  </div>
			  <div class="form-group">
				<label for="fphone">Phone Number <span class="require">*</span></label>
				<input type="text" class="form-control" id="fphone" name="fphone">
			  </div>
			  
			  <div class="form-group">
			<label for="fname">Category<span class="require">*</span></label>
			<div class="radio">
      <label><input type="radio" name="category" value="Student-Architecture" >Student - UG Level (Architecture)</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="category" value="Student-Engineering">Student - UG Level (Engineering)</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="category" value="PG-Architecture" >Student - PG level (Architecture)</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="category" value="PG-Engineering" >Student - PG Level (Engineering)</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="category" value="PHD" >Student - PHD level</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="category" value="Fresher" >Professional - Early/ Fresher</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="category" value="Professiona-Experienced" >Professional - Experienced</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="category" value="Other" >Other</label>
    </div>
			 </div>
			  <div class="form-group">
				<label for="thesis">Thesis / PHD topic (**for Students) <span class="require">*</span></label>
				<input type="text" class="form-control" id="thesis" name="thesis">
			  </div>
			  <div class="form-group">
				<label for="company">Company Name (**for Professionals)
 <span class="require">*</span></label>
				<input type="text" class="form-control" id="company" name="company">
			  </div>
			  <div class="form-group">
				<label for="designation">Designation (*for Professionals) <span class="require">*</span></label>
				<input type="text" class="form-control" id="designation" name="designation">
			  </div>
			  <div class="form-group">
				<label for="designation">Please Make Payment:<br> <br>
				Before 20th July 8000+18% gst =Rs 9440/-<br>
                After 20th July 10,000+18% gst = Rs 11800/-<span class="require">*</span></label><br><br>
				<img src="./images/gpay.jpeg">
			  </div>
			  <div class="form-group text-center">
			 <div class="g-recaptcha" data-sitekey="6Lf_ObYUAAAAAN-AN9qQ7hoCdcXNHRFGFAlOkt8f" data-callback="enableBtn" ></div>
			  <button type="submit" class="btn btn-default btn-success btn-lg" id="submit">Submit</button>
			  </div>
			</form>
		</div>
	</div>
      
      <!-- <section class="experts">
              <div class="expertsContent">
                  <h4>Conceptualised by <span> Experts. </span></h4>
                  <p>We are equipped with industry experts to help on your projects. Get in touch with us to know more</p>
                  <div class="link">
                      <a href="">Contact</a>
                  </div>
              </div>
          </section> -->
          
          <!-- Script for captcha -->
	<script>
	document.getElementById("submit").disabled = true;
	
	function enableBtn(){
    document.getElementById("submit").disabled = false;
   }
	</script>
          
<?php include 'footer.php'; ?>
	   <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
		<script>
		$(document).ready(function () {

$("#contactForm").validate({
  rules:{
                'fname':{
                   required: true,
                   },
                'femail':{
                   required:true,
                   email: true
                   },
                 'fphone':{
                   required: true,
                   number:true,
				   minlength: 10,
				   maxlength: 12
                    }
		},
		messages:{
                 'fname':{
                   required: '*Please Enter name',
                      },
                  'femail':{
                     required: "*Please Enter Email",
                     email: "Enter a valid email !"	
                    },
                'fphone':{
                    required: "*Please Enter contact No",
                    number: "Enter only Number"
                    }
            },
			submitHandler: function(form) {
				document.getElementById('submit').innerHTML = 'Processing...';
				document.getElementById('submit').disabled = 'disabled';
				$form.submit();
}
		});	
			});
		</script>
		<script> $(document).ready(function(){$('a.pagePrint').click(function(){window.print();});});</script>
  </body>

</html>
