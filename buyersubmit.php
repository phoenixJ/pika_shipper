<?php
session_start();
?>

<?php
$item_name = $_POST['item_name'];
$link = $_POST['link'];
$country = $_POST['country'];
$quantity = $_POST['quantity'];
$cost = $_POST['cost'];
$comission = $_POST['comission'];
$currency = $_POST['currency'];
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

$sql = "INSERT INTO buy(uid,item_name,link,country,quantity,cost,comission,currency,datec) 
VALUES ($uid,'$item_name','$link','$country',$quantity,$cost,'$comission','$currency','$datec')";

if ($conn->query($sql) === TRUE) {
	echo "Đăng thành công";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>