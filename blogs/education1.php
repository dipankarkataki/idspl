<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Blog  - Improving the Quality of Education in Rural India</title>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.min.js"></script>

<!-- Latest compiled JavaScript -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144725705-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144725705-1');
        </script>

        <!—- ShareThis BEGIN -—>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d6e345816b81b0012138f61&product=sticky-share-buttons' async='async'></script>
        <!—- ShareThis END -—>

      <?php
      $page = 7; include 'header.php';?>
      <?php include '../database-connection/db-connect.php'; ?>

      <style>
        .article-ratings{
            margin-top: 25px;
            margin-bottom: 15px;
            margin-left: 25px;
        }
        .article-ratings span{
            margin-right:15px;
        }

        .article-ratings span .fa-thumbs-o-up{
            color:blue;
        }

        .article-ratings span .fa-share-square-o{
            color:green;
        }
        
        .article-ratings span i{
            font-size:20px;
        }

        .article-ratings span:hover{
            cursor: pointer;
            transition: 0.3s;
            text-shadow: 0px 0px 15px #2a2a2b57;
        }
      </style>

      <style>
        h5{
            margin-bottom: 20px;
            color: #565151;
        }
        ::placeholder{
          padding-top: 20px;
          margin-left: 10px;
        }
        #comment{
            width:100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .comment-send-btn{
            padding-left: 50px;
            padding-right: 50px;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 13px;
        }
        .comment-display-area .user-details{
            display:flex;
            flex-direction:row;
            align-items: center;
            justify-content: flex-start;
            margin-top: 30px;
        }
        .comment-display-area .user-details img{
            border-radius: 50%;
            height: 40px;
            width: 40px;
            margin-right:20px;
        }

        #postCommentModal{
            margin-top:100px;
        }
      </style>
      
      <?php include 'searching_inside_blog_page.php'; ?>
      <section class="breadcrumb-container container">
          <div class=" row">
            <div class="col-sm-6">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="blogs.php">Blog</a></li>
                  <!-- <li class="breadcrumb-item active"> Baseline Scenario for Energy Performance of Residential Buildings in the Cold Climatic Zone of India</li> -->
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
              <div class="secondaryHeaderContent portfolioSecondaryHeader">
                 <a href="blogs.php"> <img src="../images/backButton.svg"/></a>
                  <h4>Improving the Quality of Education in Rural India</h4>
                  <!-- <p>Building Energy Efficiency</p> -->
              </div>
          </div>
      </section>

      <section class="individualPortfolio">
        <div class="container">
            <div class="individualPortfolioImage">
              <ul class="slider-ul project-img-list">
                <li class="slider-item"><img src="../images/blog1_education.jfif" /></li>
              </ul>
              <?php include 'article-rating.php' ?>
              <div class="individualPortfolioDes">
                <p>
                  The Indian demographic can be broadly divided into two categories,
                  Rural and Urban. This divide is not on the basis of caste, religion
                  or creed but the living standards of the community. Rural India is mostly
                  dependent on agriculture while the urban population relies on technology
                  and commerce for their livelihood. The disparity in the conditions of rural
                  and urban India is a sore thumb in the otherwise fast-developing nation.
                  What makes it worse is that the majority of the country’s population lives
                  in the villages. And yet, the majority of India’s villages lack even the basic amenities.
                  The biggest difference is in the field of education. According to the National Survey Scheme
                  (NSS), 71st Round, 2014, the urban literacy rate is 79.5% while the rural is 69.1%. However,
                  this is only a partial picture. The dropout rate of rural schools have been at a staggering high in higher education. 
                  The government has built a lot of Primary schools but when it comes to High schools, there is just not enough infrastructure or incentive for the students to carry on. Most students, especially girls, drop out of school at a very early age. The ones who continue often have to move to the cities for higher education. The kids of rural India might be literate, but very few actually continue their education long enough to make a difference.
                  <img src="../images/blog1_1.jpg" alt="" >
                  There are many factors causing the drop outs. The first and the most pertinent is poverty. In most households, the children are expected to support their family from a very early age. Boys are sent out to earn while girls help in household chores. The time that they are supposed to dedicate to studies, is put into helping the family. The picture has changed a lot for boys but for girls, it is still the same. While the male literacy rate in rural areas is 72.3%, the female literacy rate is 56.8%.


                  This leads us to another overarching reason: the lack of awareness among the rural population. Though most of them understand the importance of getting their children educated, formal schooling is too expensive an investment for them in terms of time and money. They don’t realise the long-term advantages would outweigh the short-term gains. The lack of job opportunities in the rural areas also add to the apathy. They would rather teach their children agriculture which ensures meagre but definite income.
                  <img src="../images/blog1_1.jpg" alt="" >
                  There have been many government initiatives to improve the quality of education in the backward areas. From building of new schools to improving the teacher-student ratio, the government is trying to fill the gaps. One of the notable programs was the Non-formal education scheme. The NFE was an attempt to decentralise education and make it more accessible. The idea was to set up NFE centres at places where formal schooling was not successful. These centres were meant for school drop-outs and others who could not access formal schooling. The NFE centres would be run by authorised volunteer organisations and the curriculum and mode of teaching would be informal and learner-centred. Another initiative was the mid-day meal scheme. It provided a major incentive for kids to attend school. It not only helped in retaining students but also promoted nutrition and health in children. Then there are Operation Blackboard and Schemes for Infrastructure Development of Private Aided/Unaided Minority Institutes (IDMI) which encourage school staff to make better use of the amenities provided to them and also maintain a basic level of infrastructure like separate toilets for boys and girls, sanitary dispensers for girls, one classroom per class and a minimum of three teachers in primary schools.
                  <br><br>
                  However, there are some factors that lie beyond the control of the government. A lot of our villages are in remote areas. The schools are situated in central locations to attract a bigger strength. In such cases, safe transport becomes a major hurdle. Students often have to travel long distances on their own to reach school. This becomes even more difficult in the scorching summers or monsoons when roads are often flooded. Secondly, though the government has done its best to allocate teachers, these teachers are not always well-trained. Lack of proper guidance and fruitful teaching is often a discouraging factor. There have been numerous reports of teachers being away on long leaves and otherwise, neglecting their duty. Added to this is the case of discrimination based on caste, ability and gender- a major deterrant for children from backward communities. Then there is the issue of language. Most maths and science text books are in English and students have a hard time understanding them. 
                  <br><br>
                  A panacea to all these problems could be the introduction of technology into rural classrooms. It can make learning fun and interactive and most importantly, more comprehensible. It can break down the language barrier with the use of videos to explain concepts. It can make learning a whole new experience, such that, students look forward to attending schools. However, this remains a distant dream with only 9% of villages in India having internet access. In fact, a lot of villages do not even have a stable supply of electricity. Thus, even offline LMS modules cannot be run on a regular basis. Another problem in deploying technology is teacher-readiness. Most teachers in rural areas come from similar backgrounds and lack the training to handle computers efficiently. As such, they are often not interested in using technology in classrooms. 
                  <br><br>
                  The silver lining however, has come in the form of private NGOs and CSR initiatives, which, in association with government bodies are investing in bringing technology into the rural classrooms. From training the teachers to allocating trained resource persons, the intervention from the private sector has been a boon to rural India. These initiatives would gain strength if the government could collaborate with more corporates to direct their CSR and their expertise in technology towards education in the rural areas. This would also lend more legitimacy to these initiatives and attract the educated youth from urban spaces. If more and more of our youth get sensitized and devote even a part of their time and efforts towards the cause of education, the schools in Indian villages will soon be at par with their urban counterparts. 
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="portfolionav">
          <div class="container">
            <div class="portfolionav">
                <div class="portfolionavList">
                  <a class="prev-link" href="#">
                  </a>
                </div>
                <div class="portfolionavList">
                  <?php
                      $url_data = (int)$_GET['id'];
                      
                      echo '<a class="next-link" href="desalination2.php?id='.($url_data+1).'">
                              <h5>Next Blog <img src="../images/arrow-right.svg" alt=""></h5>
                              <h4>Desalination</h4>
                            </a>';
                  ?>
                  
                </div>
            </div>
          </div>
      </section>
      
      
      
      


	    
    <script src="../js/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>

    <section class="container comment-section">
      <?php
        include '../database-connection/db-connect.php';
        $url_data = (int)$_GET['id'];
        $comment_count_query = "SELECT * FROM `blog` WHERE `id` = $url_data;";
        $result2 = $conn->query($comment_count_query);
        $comment_count = 0;

        while($row2 = $result2->fetch_assoc()){
          $comment_count = $row2['comment_count'];
        }

       echo '<h5>Comments ('. $comment_count.')</h5>';
      ?>
      <div class="comment-text-area">
        <!-- <form action="submit_comment.php" method="POST"> -->
          <input type="hidden" name="blog_id" value="'.$url_data.'">
          <textarea name="comment" id="comment" rows="5" placeholder="Type your valuable comment here." required></textarea>
          <button name="submit" class="btn btn-md btn-primary comment-send-btn" data-toggle="modal" data-target="#postCommentModal">post</button>
        <!-- </form> -->
          
      </div>

      <div id="postCommentModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

              <form id="commentModalForm"> 
                <div class="form-group">
                      <label for="">Enter Full Name</label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="e.g Jhon Doe" required>
                  </div>
                  <div class="form-group">
                      <label for="">Enter Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="e.g abc@gmail.com" required>
                  </div>
                  
                  <p style="font-size:12px;font-weight:500;"> <span style="color:red;">Note:</span> Fullname and Email is required to post a comment.</p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" id="commentModalSaveBtn" >Save</button>
                </div>
              </form>

          </div>
        </div>
      </div>

      <script>
          $('#commentModalSaveBtn').on('click', function(e){
              e.preventDefault();

              $('#commentModalSaveBtn').attr('disabled', true);
              $('#commentModalSaveBtn').text('Please Wait...',);

              let username = $('#username').val();
              let email = $('#email').val();
              let comment = $('#comment').val();

              if(username == ''){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Username is required',
                  })
                  $('#commentModalSaveBtn').attr('disabled', false);
                  $('#commentModalSaveBtn').text('Save',);
              }else if(email == ''){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops!',
                  text: 'Email is required',
                })
                $('#commentModalSaveBtn').attr('disabled', false);
                $('#commentModalSaveBtn').text('Save',);
              }else if(comment == ''){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops!',
                  text: 'Comment is required',
                })
                $('#commentModalSaveBtn').attr('disabled', false);
                $('#commentModalSaveBtn').text('Save',);
              }else{
                $.ajax({
                  url : 'submit_comment.php',
                  type:'POST',
                  data:{
                    username : username,
                    email : email,
                    comment : comment,
                    blog_id : <?php echo (int)$_GET['id'] ?>,

                  },
                  success:function(data){
                    let details = JSON.parse(data);
                    if(details.status === 1){
                      Swal.fire({
                        icon: 'success',
                        title: 'Great!',
                        text: details.message,
                        confirmButtonText: 'Close!'
                      }).then((result) => {
                          if (result.isConfirmed) {
                            location.reload(true);
                          }
                        })
                    }else{
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something Went Wrong. Failed To Post Comment',
                      })
                      $('#commentModalSaveBtn').attr('disabled', false);
                      $('#commentModalSaveBtn').text('Save',);
                    }
                  },
                  error:function(xhr, status, error){
                    console.log(error)
                    $('#commentModalSaveBtn').attr('disabled', false);
                    $('#commentModalSaveBtn').text('Save',);
                  }
                });
              }

              //For Sending Mail

              $.ajax({
                  url : 'send-mail-from-blog.php',
                  type:'POST',
                  data:{
                    username : username,
                    email : email,
                    comment : comment,
                    blog_id : <?php echo (int)$_GET['id'] ?>,

                  },
                  success:function(data){
                    console.log(data)
                    let details = JSON.parse(data);
                    if(details.status === 1){
                      Swal.fire({
                        icon: 'success',
                        title: 'Great!',
                        text: 'Mail Sent',
                        confirmButtonText: 'Close!'
                      })

                      
                    }else{
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something Went Wrong. Failed To Post Comment',
                      })
                    }
                  },
                  error:function(xhr, status, error){
                    console.log(error)
                  }
                });

        })
      </script>
     
      <?php
        include '../database-connection/db-connect.php';
        $url_data = (int)$_GET['id'];

        $query = "SELECT * FROM `blog_comment` WHERE `blog_id` =  $url_data  ORDER BY `created_at` DESC;";
        $result = $conn->query($query);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){
                echo '
                  <div class="main-comment-div">
                    
                    <div class="comment-display-area">
                        <div class="user-details">
                            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user image">
                            <p>'.$row["name"].'</p>
                        </div>
                        <p class="user-comment">
                            '.$row["comment"].'
                        </p>
                        <hr>
                    </div>
                  </div>
                
                ';
              }
        } 
        else {
          echo '
            <div style="text-align:Center; margin-bottom:20px;">
              <h6>Oops! No Comments Found 😔</h6>
            </div>
            
          
          ';
        }
        
        $conn->close();
        
      ?> 
        
    </section>

   
    
    <?php include 'footer.php'; ?>
	  <script> $(document).ready(function(){$('a.pagePrint').click(function(){window.print();});});</script>

    
    <!-- <script>
      $('#like_btn').on('click', function(){
          $.ajax({
            url:'submit_like.php',
            type:'POST',
            data: {
              id : 'test'
            },
            success:function(data){
              console.log(data);
            },
            error:function(xhr, status, error){
              console.log(xhr);
            }
          })
      });
    </script> -->
  </body>

</html>
