


<style>
    .main-comment-div{
        padding:20px;
    }
    .main-comment-div h5{
        margin-bottom: 20px;
        color: #565151;
    }
    .main-comment-div ::placeholder{
       padding-top: 20px;
       margin-left: 10px;
    }
    .main-comment-div #comment{
        width:100%;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    .main-comment-div .comment-send-btn{
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
<div class="main-comment-div">
    <h5>Comments (57)</h5>
    <div class="comment-text-area">
        <textarea name="comment" id="comment" rows="5" placeholder="Type your valuable comment here."></textarea>
        <button class="btn btn-md btn-primary comment-send-btn">post</button>
    </div>
    <div class="comment-display-area">
        <div class="user-details">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user image">
            <p>$row["name"]</p>
        </div>
        <p class="user-comment">
            $row["comment"]
        </p>
        <hr>
    </div>
</div>

<!-- Modal -->
<div id="postCommentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="">Enter Full Name</label>
            <input type="text" name="username" class="form-control" placeholder="e.g Jhon Doe" required>
        </div>
        <div class="form-group">
            <label for="">Enter Email</label>
            <input type="email" name="email" class="form-control" placeholder="e.g abc@gmail.com" required>
        </div>
        
        <p style="font-size:12px;font-weight:500;"> <span style="color:red;">Note:</span> Fullname and Email is required to post a comment.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
    $('.comment-send-btn').on('click', function(){
        $('#postCommentModal').modal('show');
    });
</script>