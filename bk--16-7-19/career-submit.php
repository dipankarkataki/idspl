<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
date_default_timezone_set('Asia/Kolkata');

include 'config.php';
$conn = new mysqli($servername, $username, $password, $database);


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$table='idspl_career';
$sql = "CREATE TABLE IF NOT EXISTS $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(250) NOT NULL,
email VARCHAR(50) NOT NULL,
apply VARCHAR(50) DEFAULT NULL,
resume VARCHAR(250) DEFAULT NULL,
about TEXT DEFAULT NULL,
created DATETIME DEFAULT NULL
)";


//$sql ="DROP TABLE $table";
if ($conn->query($sql) === TRUE) {
	if(isset($_POST) && isset($_POST['cname']) && isset($_POST['cemail']))
	{
		if(isset($_FILES['resume'])){
      $errors= array();
      $file_name = $_FILES['resume']['name'];
      $file_size = $_FILES['resume']['size'];
      $file_tmp = $_FILES['resume']['tmp_name'];
      $file_type = $_FILES['resume']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['resume']['name'])));
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"resume/".$file_name); //The folder where you would like your file to be saved
         //echo "Success";
      }
	  else
	  {
         print_r($errors);
      }
		}
		$name = $_POST['cname'];
		$email = $_POST['cemail'];
		$apply = $_POST['apply'];
		$resume = $file_name;
		$about = $_POST['about'];
		$thank_url = 'thankyou.php';
		$project = "";
		$project_id = '';
		
		 $sqlQuery = "INSERT INTO $table (name, email, apply,  resume, about, created) VALUES ('".mysqli_real_escape_string($conn, $name)."', '".mysqli_real_escape_string($conn, $email)."', '".mysqli_real_escape_string($conn, $apply)."',  '".mysqli_real_escape_string($conn, $resume)."','".mysqli_real_escape_string($conn, $about)."', now());"; 
		mysqli_query($conn, $sqlQuery) or die(mysqli_error()); 
		//$lastID = mysqli_insert_id(); 	 

//Load Composer's autoloader
require 'vendor/autoload.php';
$subj_1 =  "Thank You from IDS-PL";
$subj_2 =  "Thank you for your interest";
$today = date("d-m-Y h:i a"); 

$mail_body_1 = "<br>
Name: {$name}<br>
Email: {$email}<br>
Phone: {$apply}<br>
Subject: {$resume}<br>
Message: {$about}<br>
Created: {$today}<br>";
		
$mail_body_2 = "Hello ".$name.", <br>
Thank you for your interest in ".$project.".<br>
One of us will get in touch with you soon.<br><br>

Alternatively, you could call us at (+91) ".$contact_phone." (7am - 10pm IST) <br>
Have a great day!<br><br>

Sincerely,<br>
Team ".$mailer_name;		

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
   //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $mail_host;  					  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $mail_from;             // SMTP username
    $mail->Password = $mail_password;                           // SMTP password
	$mail->addAttachment("resume/".$file_name);
    $mail->SMTPSecure = $tls_ssl;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $mail_port;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($mail_from, $mailer_name);
    //$mail->addAddress($receive_email);     // Add a recipient
	$to_address = explode(",",$to_address);
	foreach($to_address as $val) { $mail->addAddress(trim($val)); }
    //$mail->addBCC($email);               // Name is optional

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subj_1;
    $mail->Body    = $mail_body_1;    
    $mail->send();
	
	$mail->ClearAllRecipients( );
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
		
		$_SESSION['c_success'] = "Successfully Saved!"; 
		//echo "<script>window.location = '".$thank_url."';</script>";
		exit();
		
	}
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 