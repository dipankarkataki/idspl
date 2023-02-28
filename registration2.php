<?php 

// echo $_POST["title"];
// echo "<br>";
// echo $_POST["fname"]; 
// echo "<br>";
// echo $_POST["femail"]; 
// echo "<br>";
// echo $_POST["fphone"];
// echo "<br>";
// echo $_POST["category"];
// echo "<br>";
// echo $_POST["thesis"];
// echo "<br>";
// echo $_POST["company"];
// echo "<br>";
// echo $_POST["designation"];
// echo "<br>";

 $title = $_POST["title"];
$name = $_POST["fname"]; 
$email = $_POST["femail"]; 
$phone = $_POST["fphone"];
$category = $_POST["category"];
$thesis = $_POST["thesis"];
$company = $_POST["company"];
$designation = $_POST["designation"];

$servername = "localhost";
$username = "idspldev";
$password = "idspldev1";
$dbname = "idspldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (title, name, email, phone, category , thesis, company, designation)
VALUES ('$title','$name', '$email', '$phone', '$category', '$thesis', '$company', '$designation')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

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

      <section class="contactUs">
          <div class="container-fluid">
		  <div class="row">
		  <!--<div class="col-xs-12 col-sm-12">-->
			 <!--<img src="./images/flyer.png">-->
    <!--          </div>-->
			  
              
			   </div>
          </div>
      </section>
	<div class="container form_container">
		<h1 style="color:green" > Thank you for registration, we will contact you soon.</h1>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
                    },
				'fsubject':{
                   required:true
                   },
				'fmsg':{
                   required:true
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
                    },
				'fsubject':{
                    required: "*Please select your subject"
                    }, 
				'fmsg':{
                    required: '*Please Enter your Message',
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
