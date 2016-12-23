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
	<section id="listview" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" >
					<h2 class="section-heading">♥ NHỮNG BÀI BẠN ĐÃ ĐĂNG ♥</h2>
				</div>
			</div>

			<div class="form-style-6" >
				<ul class="list-group ">
					<?php
					include('connect.php');
					$un = $_SESSION['id_member'];
					$query_data = "SELECT *,id FROM buy where uid = $un order by id desc";
					$result_data = mysqli_query($conn,$query_data);
					while($data = mysqli_fetch_array($result_data))
					{
						echo "
						<li class='list-group-item col-md-6 col-lg-6 col-sm-12 col-xs-12'>

						<div class='row product-box'>
						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<center><a href='../details/?id={$data['id']}' >
						<div class='carousel-inner' style='max-height: 150px;''>
						<img class='slide-image' src='{$data['link']}'>
						</div></a>

						</center> 
						</div>
						<div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
						<p><small>


						<span class='label label-success' style='font-size: 12px'>{$data['country']}</span>

						<strong> {$data['item_name']}</strong></small><br/>
						<small>Ngày đăng: {$data['datec']}</small><br/>
						<small>Giá: <strong style='color:#a94442'> {$data['cost']} {$data['currency']}</strong></small>   <br/> 
						<small>Hoa hồng: <strong style='color:#a94442'> {$data['comission']} đ</strong></small>   <br/> ";
						if($data['status'] == NULL || $data['status'] == 0)
						echo "<span class='label label-warning'>Chưa có ai nhận</span>";
						else
							echo "<span class='label label-success'>Đã có người nhận</span>";

						echo "<a href='removebuy.php?id={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xóa bài đăng</b></i></a></small>
						</div>
						</div>

						</li>";
					}
					?>
				</ul>

			</div>
		</div>
	</section>


		<section id="listview" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" >
					<h2 class="section-heading">♥ NHỮNG CHUYẾN ĐI ĐÃ CHIA SẺ ♥</h2>
				</div>
			</div>

			<div class="form-style-6" >
				<ul class="list-group ">
					<?php
					include('connect.php');
					$un = $_SESSION['id_member'];
					$query_data = "SELECT *,id FROM buyable where uid = $un order by id desc";
					$result_data = mysqli_query($conn,$query_data);
					while($data = mysqli_fetch_array($result_data))
					{
						echo "
						<li class='list-group-item col-md-6 col-lg-6 col-sm-12 col-xs-12'>

						<div class='row product-box'>
						
						
						<div class='carousel-inner' style='max-height: 150px;''>
						
						</div></a>

						</center> 
						</div>
						<div>
						<p><small>


						<span class='label label-success' style='font-size: 12px'>Đi từ</span>

						<strong> {$data['currentplace']}</strong></small><br/>
						<span class='label label-warning' style='font-size: 12px'>Đến</span>
						<strong> {$data['destination']}</strong></small><br/>

						<small>Còn trống: {$data['leweight']} kg</small><br/>
						<small>Có thể mua: <strong style='color:#a94442'> {$data['item']} </strong></small>   <br/> 

						<a href='removebuyable.php?id={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xóa bài đăng</b></i></a></small>
						</div>
						</div>

						</li>";
					}
					?>
				</ul>

			</div>
		</div>
	</section>
	<section id="listview" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" >
					<h2 class="section-heading">♥ NHỮNG ĐƠN ĐÃ NHẬN ♥</h2>
				</div>
			</div>

			<div class="form-style-6" >
				<ul class="list-group ">
					<?php
					include('connect.php');
					$un = $_SESSION['id_member'];

					$query_data = "SELECT * FROM buy where status = $un order by id desc";
					$result_data = mysqli_query($conn,$query_data);
					while($data = mysqli_fetch_array($result_data))
					{
						echo "
						<li class='list-group-item col-md-6 col-lg-6 col-sm-12 col-xs-12'>

						<div class='row product-box'>
						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<center><a href='../details/?id={$data['id']}' >
						<div class='carousel-inner' style='max-height: 150px;''>
						<img class='slide-image' src='{$data['link']}'>
						</div></a>

						</center> 
						</div>
						<div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
						<p><small>


						<span class='label label-success' style='font-size: 12px'>{$data['country']}</span>

						<strong> {$data['item_name']}</strong></small><br/>
						<small>Ngày đăng: {$data['datec']}</small><br/>
						<small>Giá: <strong style='color:#a94442'> {$data['cost']} {$data['currency']}</strong></small>   <br/> 
						<small>Hoa hồng: <strong style='color:#a94442'> {$data['comission']} đ</strong></small>   <br/> 

						<a href='removeorder.php?id={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xóa Đơn</b></i></a></small>
						</div>
						</div>

						</li>";
					}
					?>
				</ul>

			</div>
		</div>
	</section>


	<?php
	include('footer.php');
	?>
</body>
</html>