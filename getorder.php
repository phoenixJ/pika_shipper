<?php
session_start();
?>
<?php
include ('connect.php');

$id_post = $_GET['id_post'];

if (isset($_SESSION['id_member']))
{

	$id_user = $_SESSION['id_member'];
	$sql = "UPDATE buy SET status=$id_user where id=$id_post";
	$conn->query($sql);
	echo "Đã nhận đơn";
}
else
{
	echo "Bạn phải đăng nhập đã man!";
}


?>