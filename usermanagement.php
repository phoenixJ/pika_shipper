<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<body id="page-top">

	<?php
	include('nav.php');
	?>
	<section class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" >
					<h2 class="section-heading">QUẢN LÝ SẢN PHẨMCÓ NGƯỜI CẦN MUA</h2>
				</div>
			</div>
			<div class="form-style-6" >
				<table class='table table-bordered table-striped'>
						<thead>
						<tr>
						<th>STT</th>
						<th>ID</th>
						<th>Họ Tên</th>
						<th>Email</th>
						<th>SĐT</th>
						<th>Thao Tác</th>
						</tr>
						</thead>
						<tbody>
					<?php
					include('connect.php');
					$stt = 0;
					$query_data = "SELECT *,id FROM user order by id desc";
					$result_data = mysqli_query($conn,$query_data);
					while($data = mysqli_fetch_array($result_data))
					{
						echo "
						<tr>
						<td>$stt</td>
						<td>{$data['id']}</td>
						<td>{$data['name']}</td>
						<td>{$data['email']}</td>
						<td>{$data['phone']}</td>
						<td><a href='removeuser.php?id={$data['id']}'  class='btn btn-xs btn-link'role='button'><i> <b>Xóa thành viên</b></i></a></small>
						</td>
						</tr>
						
						";
						$stt++;
					}
					?>
					</tbody>
					</table>


			</div>
		</div>
	</section>
	<?php
	include('footer.php');
	?>
</body>
</html>