<?php
	session_start();
	if (isset($_SESSION["name"]))
	{}
	else
	{
		header("location: index.php");
	}
?>
<?php
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


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </head>
  <body>
  	<!-- <a href="" class="btn btn-primary pull-right" >Log Out</a> -->
  	<div class="alert alert-info clearfix">
    <a href="logout.php" class="btn btn-primary btn-md float-right">Log Out</a> 
    <!-- <button type="button" class="btn btn-primary btn-md float-right">Log Out</button> -->
</div>
  	<!-- <br> -->
  	<h2 style="text-align: center;" >Registered Users</h2>
  	<br>
  	<div class="container-fluid">
  		<table class="table table-striped" border width="100%">
  <thead>
    <tr class="table-primary">
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Category</th>
      <th scope="col">Thesis</th>
      <th scope="col">Company</th>
      <th scope="col">Designation</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT id,title, name, email, phone, category, thesis, company, designation, reg_date FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <th scope='row'>" . $row["id"]. "</th>
    <td>" . $row["title"]. "</td>
    <td>" . $row["name"]. "</td>
    <td>" . $row["email"]. "</td>
    <td>" . $row["phone"]. "</td>
    <td>" . $row["category"]. "</td>
    <td>" . $row["thesis"]. "</td>
    <td>" . $row["company"]. "</td>
    <td>" . $row["designation"]. "</td>
    <td>" . $row["reg_date"]. "</td>
    </tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
     ?>
  </tbody>
</table>
  	</div>
  </body>
</html>