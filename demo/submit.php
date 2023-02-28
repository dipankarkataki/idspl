<?php session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Kolkata');

include 'config.php';
$conn = new mysqli($servername, $username, $password, $database);


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$sql = "CREATE TABLE IF NOT EXISTS $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(250) NOT NULL,
email VARCHAR(250) NOT NULL,
phone VARCHAR(250) DEFAULT NULL,
subject VARCHAR(250) DEFAULT NULL,
message TEXT DEFAULT NULL,
created DATETIME DEFAULT NULL
)";


//$sql ="DROP TABLE $table";
if ($conn->query($sql) === TRUE) {    	
	if(isset($_POST) && isset($_POST['fname']) && isset($_POST['femail']))
	{
		
		 $name = $_POST['fname'];
		$email = $_POST['femail'];
		$phone = $_POST['fphone'];
		$subject = $_POST['fsubject'];
		$message = $_POST['fmsg'];
		$thank_url = 'thankyou.php';
		$project = "";
		$project_id = '';
		
		 $sqlQuery = "INSERT INTO $table (name, email, phone,  subject, message, created) VALUES ('".mysqli_real_escape_string($conn, $name)."', '".mysqli_real_escape_string($conn, $email)."', '".mysqli_real_escape_string($conn, $phone)."',  '".mysqli_real_escape_string($conn, $subject)."','".mysqli_real_escape_string($conn, $message)."', now());"; 
		mysqli_query($conn, $sqlQuery) or die(mysqli_error()); 
		//$lastID = mysqli_insert_id(); 	 
		
		include 'mail.php';		
		$_SESSION['success'] = "Successfully Saved!"; 
		echo "<script>window.location = '".$thank_url."';</script>";
		exit();
		
	}
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?> 