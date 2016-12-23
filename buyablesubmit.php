<?php
session_start();
?>

<?php
$currentplace = $_POST['currentplace'];
$destination = $_POST['destination'];
$leweight = $_POST['leweight'];
$item = $_POST['item'];
date_default_timezone_set('Asia/Ho_Chi_Minh');
$datec = date('H:i d-m-Y');
$uid = $_SESSION['id_member'];

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'pika_shipper') or die ('{error:"bad_request"}');
mysqli_query($conn,"SET NAMES 'UTF8'");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO buyable(uid,currentplace,destination,leweight,item,datec) 
VALUES ($uid,'$currentplace','$destination',$leweight,'$item','$datec')";

if ($conn->query($sql) === TRUE) {
	echo "Đăng thành công";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>