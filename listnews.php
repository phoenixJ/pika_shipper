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
					<h2 class="section-heading">NHỮNG MẶT HÀNG CÓ NGƯỜI CẦN MUA</h2>
					<div class="container">
						<div class="row">    
							<div class="col-xs-8 col-xs-offset-2">
								<form id="search" action="search.php" method="get" style="padding-top: 0px;padding-bottom: 15px">
									<div class="input-group">

										<span class="input-group-btn">

											<select class="form-control" name="country" id="country" style="width:150px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;">
												<option value="default">Tất cả</option>
												<option value="Ý">Ý</option>
												<option value="Đức">Đức</option>
												<option value="Mỹ">Mỹ</option>
												<option value="Tây Ban Nha">Tây Bán Nhà</option>
											</select>
										</span>

										<input type="text" style="background-color: white; color: #fda200;     border: 1px solid transparent;border-color: rgb(204, 204, 204); " class="form-control" name="keyword" placeholder="Nhập từ khóa...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			

			
			<div class="form-style-6" >


				<ul class="list-group ">
					<?php
					include('connect.php');
					if(isset($_SESSION['id_member']))
					{
					$un = $_SESSION['id_member'];
					}
					$query_data = "SELECT *,id FROM buy order by id desc";
					$result_data = mysqli_query($conn,$query_data);
					while($data = mysqli_fetch_array($result_data))
					{
						if($data['status'] == NULL || $data['status'] == 0)
						{
						echo "
						<li class='list-group-item col-md-6 col-lg-6 col-sm-12 col-xs-12'>

						<div class='row product-box'>
						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<center>
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
						";
						if(isset($_SESSION['id_member']))
						{
						if($un != $data['uid'])

						echo "<a href='getorder.php?id_post={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Nhận đơn »</b></i></a></small>
						
						</div>
						</div>

						</li>";
					}}
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