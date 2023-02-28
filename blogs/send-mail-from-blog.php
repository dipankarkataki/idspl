<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP; 
    use PHPMailer\PHPMailer\Exception; 

    require '../vendor/phpmailer/phpmailer/src/Exception.php'; 
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php'; 
    require '../vendor/phpmailer/phpmailer/src/SMTP.php'; 

    include '../database-connection/db-connect.php'; 

    // if (isset($_POST['submit'])) {
        try{

            $email = $_POST['email'];
            $name = $_POST['username'];
            $blog_id = $_POST['blog_id'];
            $comment = $_POST['comment'];

           // Create an instance; Pass `true` to enable exceptions 
            // $mail = new PHPMailer; 
            // $mail->isSMTP();                            // Set mailer to use SMTP 
            // $mail->Host = 'sandbox.smtp.mailtrap.io';           // Specify main and backup SMTP servers 
            // $mail->SMTPAuth = true;                     // Enable SMTP authentication 
            // $mail->Username = 'b9a7da7a2fbbaf';       // SMTP username 
            // $mail->Password = 'fb05583a0f1ee9';         // SMTP password 
            // $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted 
            // $mail->Port = 2525; 
            
            $mail = new PHPMailer; 
            $mail->isSMTP();                            // Set mailer to use SMTP 
            $mail->Host = 'mail.ekodusproject.tech';           // Specify main and backup SMTP servers 
            $mail->SMTPAuth = true;                     // Enable SMTP authentication 
            $mail->Username = 'comment@ekodusproject.tech';       // SMTP username 
            $mail->Password = 'Developer@123';         // SMTP password 
            $mail->SMTPSecure = 'TLS';                  // Enable TLS encryption, `ssl` also accepted 
            $mail->Port = 587; 

            // Sender info 
            $mail->setFrom('comment@ekodusproject.tech',$name); 

            // Add a recipient 
            $mail->addAddress('kanagaraj@ids-pl.com'); 

            // Set email format to HTML 
            $mail->isHTML(true); 
            
            $query = " SELECT * FROM `blog` WHERE `id` = $blog_id;" ;
            $result = $conn->query($query);
            $bodyContent = '';
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $blog_title = $row['title'];
                    $bodyContent = '
                        <h3>Hi, There is a new comment from</h3>
                        <p>
                            Name &nbsp;: '.$name.' <br>
                            Email : '.$email.'<br>
                            <hr>
                            Topic : '. $blog_title.' <br>
                            Comment : '. $comment.'
                        </p>'; 
                    
                }
            }
            // Mail body content 
            
            $mail->Body    = $bodyContent; 
            
            // Send email 
            if(!$mail->send()) { 
                echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
            } else { 
                echo 'Message has been sent.'; 
            }
            
        }catch(Exception $e){
            echo 'Oops! Something Went Wrong.';
        }
    // }
    