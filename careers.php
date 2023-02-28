<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>Careers</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>


 <!---- Search Style ----->
 <style>
        .search-outer-div{
          height: 100vh;
          width: 100%;
          background-color: #00000085;
          position: fixed;
          z-index:15;
          display: none;
        }
        .search-inner-div{
          height: 500px;
          width: 90%;
          background-color: #ffffff40;
          position: fixed;
          top: 20%;
          left: 5%;
          z-index:20;
          border-radius:5px;
        }
        .search-inner-div .content-area{
            position:absolute;
            top:30%;
            left:10%;
            padding:30px;
            display:flex;
            flex-direction: row;
        }
        .search-inner-div .content-area input{
          width: 900px;
          height: 70px;
          margin-right: -5px;
        }
        .search-inner-div .content-area #searchBtn{
          height:70px;
          padding-top: 24px;
        }
        #closeSearchBtn{
          font-size: 20px;
          color: black;
          float: right;
          background-color: #ffffff40;
          padding: 20px;
          border-radius: 0px 0px 0px 10px;
        }
        #closeSearchBtn:hover{
          background-color: white;
        }

       

      </style>

      <!---- End Search Style ----->

        <?php $page=6; include 'header.php';?>
        <div class="search-outer-div"> 
        
          <div class="search-inner-div">
          <a href="javascript:void(0);"  id="closeSearchBtn">
            <i class="fa fa-times" aria-hidden="true"></i>
          </a>
            <div class="content-area">
              <input type="text" name="searchQuery" id="searchQuery" class="form-control" autocomplete="off" placeholder="Type here..">
              <a id="searchBtn" href="#" class="btn btn-warning">
                <i class="fa fa-search"></i>
              Search</a>
            </div>
          </div>
      </div>
		<section class="breadcrumb-container container">

    
          <div class=" row">
		   <div class="col-sm-6">
             <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active"> Careers</li>
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
      <section class="secondaryHeader">
          <div class="container">
              <div class="secondaryHeaderContent">
                  <h4>Careers</h4>
                  <p>Explore your passion. We are always on a hunt for talents.</p>
              </div>
          </div>
      </section>


      <section class="careers">
          <div class="container">
              <div class="careersWrap row">
                  <div class="careersForm col-sm-12 col-md-6">
				  <div>
                          <h2 id="header_1" class="form-header" data-component="header"> Apply now & we will get back to you.</h2>
						<form action="career-submit.php" id="careerform" enctype="multipart/form-data" method="post" >
						  <div class="form-group">
							
							<input type="text" class="form-control" id="cname" name="cname" placeholder="Name">
						  </div>
						  <div class="form-group">
							
							<input type="email" class="form-control" id="cemail" name="cemail" placeholder="Email ID">
						  </div>
						  <!--<input id="resume" type="hidden" name="apply" ="apply" />-->
						 <!-- <div class="form-group">
							<select class="form-control custom-select" name="apply" id="apply">
							<option value="">Applying for</option>
								<option value="Designer">Designer</option>
								<option value="Developer">Developer</option>
								<option value="Bussiness Analysit">Bussiness Analysit</option>
							</select>
						  </div>-->
						  <div class="form-group">
							  <label class="btn btn-primary file-attach" for="resume">
								<input id="resume" type="file" style="width:0px;height:0px;" 
								onchange="$('#upload-file-info').html(this.files[0].name)" name="resume">
								<i class="fa fa-paperclip" aria-hidden="true"></i> Attach Resume
							</label>
							<span class='label label-info' id="upload-file-info"></span>
						</div>
						  <div class="form-group">
							 
							<textarea class="form-control" id="about" rows="3" name="about" placeholder="About you"></textarea>
						  </div>
						  <div class="form-group text-center">
						  <button type="submit" class="btn btn-default btn-success btn-block" id="submit">Send Mail</button>
						  </div>
						</form>
                  </div>
				  </div>
                  <div class="careersDes col-sm-12 col-md-6">
                      <h2 style="font-weight:400;">Why Join us?</h2>
                      
                      <div class="careersDesList">
                          <h4>Encourage you to learn and grow</h4>
                          <p>We value our people for their competencies and encourage them to take early responsibilities providing ample opportunities for development & growth.</p>
                      </div>
                       <div class="careersDesList">
                          <h4>Young and Multidisciplinary team</h4>
                          <p>We are a young and multidisciplinary team of architects, planners and engineers. An opportunity to work with people of diverse background within a culture of comradeship and grow the way you desire</p>
                      </div>
                       <div class="careersDesList">
                          <h4>Opportunity to work across functions</h4>
                          <p>Unlike a mundane corporate job, IDSPL provides an opportunity for you to take on new projects and work across functions and will never be bound to a dull, boring routine.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  <?php include 'blogs/footer.php'; ?>
	  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
	  <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
		<script>
	jQuery.validator.addMethod("uploadFile", function (val, element) {

          var size = element.files[0].size;
            console.log(size);

           if (size > 1048576)// checks the file more than 1 MB
           {
               console.log("returning false");
                return false;
           } else {
               console.log("returning true");
               return true;
           }

      }, "Please upload less than 1MB");
	 
		$(document).ready(function () {

$("#careerform").validate({
  rules:{
                'cname':{
                   required: true,
                   },
                'cemail':{
                   required:true,
                   email: true
                   },
                 
				'resume':{
                   required:true,
				   extension: "doc|pdf|docx",
				   uploadFile:true
                   },
				'about':{
                   required:true
                   }
		},
		messages:{
                 'cname':{
                   required: '*Please Enter name',
                      },
                  'cemail':{
                     required: "*Please Enter Email",
                     email: "Enter a valid email !"	
                    },
               
				'resume':{
                    required: "*Please attach your resume",
					extension: "Please enter a value with doc,pdf and docx extension"
                    }, 
				'about':{
                    required: '*Please Enter your Message',
                    }
            },
			errorPlacement: function (error, element) {
            if (element.attr("type") == "file") {
                error.insertAfter($('#upload-file-info'));
            } 
			else{
			error.insertAfter($(element));
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

      <script>
        $('#navSearchBtn').on('click', function(){
          $('.search-outer-div').addClass('d-block');
        });
      </script>

      <script>
        $('#closeSearchBtn').on('click',function(){
          $('.search-outer-div').addClass('d-none');
          $('.search-outer-div').removeClass('d-block');
        });
      </script>

      <!--  Search Query  -->
      <script>
        $('#searchQuery').typeahead({
          minLength: 4,
          source: function(query, result) {
              $.ajax({
                url:"search.php",
                method:"GET",
                data:{query:query},
                dataType:"json",
                success:function(data){
                  result($.map(data, function(item){
                    return item.title
                  }));
                }
              })
          },
        })
      </script>
      
      <!--  Search Button  -->
      <script>
        $('#searchBtn').on('click', function(e){
          e.preventDefault();
          let search_value =  $('#searchQuery').val();

          $.ajax({
            url:"submit_search.php",
            type:"POST",
            data:{search_value:search_value},
            // dataType:"json",
            success:function(data){
              let details = JSON.parse(data);
              if(details.type == 'blog'){
                window.location = `blogs/submit_views.php?id=${details.id}`;
              }else if(details.type == 'portfolio'){
                location.replace(details.location);
              }
            }
          });
        });
      </script>
		<script> $(document).ready(function(){$('a.pagePrint').click(function(){window.print();});});</script>
  </body>

</html>
