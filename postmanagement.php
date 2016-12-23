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
					<h2 class="section-heading">QUẢN LÝ SẢN PHẨM CÓ NGƯỜI CẦN MUA</h2>
				</div>
			</div>
			<div class="form-style-6" >
				<table class='table table-bordered table-striped'>
						<thead>
						<tr>
						<th>STT</th>
						<th>ID</th>
						<th>UID</th>
						<th>Tên Sản Phẩm</th>
						<th>Quốc Gia</th>
						<th>Số Lượng</th>
						<th>Thành Tiền</th>
						<th>Hoa Hồng</th>
						<th>Đơn Vị Tiền</th>
						<th>Ngày Đăng</th>
						<th>Trạng Thái</th>
						<th>Thao Tác</th>

						</tr>
						</thead>
						<tbody>
					<?php
					include('connect.php');
					$stt = 0;
					$query_data = "SELECT *,id FROM buy order by id desc";
					$result_data = mysqli_query($conn,$query_data);
					while($data = mysqli_fetch_array($result_data))
					{
						echo "
						<tr>
						<td>$stt</td>
						<td>{$data['id']}</td>
						<td>{$data['uid']}</td>
						<td>{$data['item_name']}</td>
						<td>{$data['country']}</td>
						<td>{$data['quantity']}</td>
						<td>{$data['cost']}</td>
						<td>{$data['comission']}</td>
						<td>{$data['currency']}</td>
						<td>{$data['datec']}</td>";
						if($data['status'] == NULL || $data['status'] == 0)
						echo "<td>Chưa nhận</td>";
						else
							echo "<td>Đã nhận</td>";
						echo"<td><a href='removebuy.php?id={$data['id']}'  class='btn btn-xs btn-link'role='button'><i> <b>Xóa bài đăng</b></i></a></small>
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
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" >
					<h2 class="section-heading">QUẢN LÝ CHUYẾN ĐI</h2>
				</div>
			</div>
			<div class="form-style-6" >
				<table class='table table-bordered table-striped'>
						<thead>
						<tr>
						<th>STT</th>
						<th>ID</th>
						<th>UID</th>
						<th>Đi Từ</th>
						<th>Nơi Đến</th>
						<th>Còn trống (kg)</th>
						<th>Có Thể Mua</th>
						<th>Ngày Đăng</th>
						<th>Thao Tác</th>
						</tr>
						</thead>
						<tbody>
					<?php
					include('connect.php');
					$stt = 0;
					$query_data = "SELECT *,id FROM buyable order by id desc";
					$result_data = mysqli_query($conn,$query_data);
					while($data = mysqli_fetch_array($result_data))
					{
						echo "
						<tr>
						<td>$stt</td>
						<td>{$data['id']}</td>
						<td>{$data['uid']}</td>
						<td>{$data['currentplace']}</td>
						<td>{$data['destination']}</td>
						<td>{$data['leweight']}</td>
						<td>{$data['item']}</td>
						<td>{$data['datec']}</td>
						<td><a href='removebuyable.php?id={$data['id']}'  class='btn btn-xs btn-link'role='button'><i> <b>Xóa bài đăng</b></i></a></small>
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