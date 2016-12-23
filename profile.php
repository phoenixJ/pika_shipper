<?php
session_start();
?>
<?php
include('header.php');
?>
<html>
<body>
	<?php
	include('nav.php');
	?>
	<section id="login" class="bg-light-gray">
		<div class="container">
			<div class="form-style-6" id="signup">
				<form id="signup" method="POST" action="#" style="padding-top: 0px;">
					<?php
					echo "
					<fieldset>
					<div><h1 style='margin-left: 15px'>THÔNG TIN TÀI KHOẢN<h3></div></br>
						<div class='col-md-6'>
							<legend><span class='number'>1</span>Họ & tên</legend>
							<input disabled='disabled' type='text' id='name' name='name' value='{$data['name']}'>
						</div>
						<div class='col-md-6'>
							<legend><span class='number'>2</span>Email</legend>
							<input disabled='disabled' type='email' id='email' name='email' value='{$data['email']}'>
						</div>
						<div class='col-md-12'>
							<legend><span class='number'>3</span>Số điện thoại</legend>
							<input disabled='disabled' type='text' id='phone' name='phone' value='{$data['phone']}'>
							<legend><span class='number'>4</span>Password</legend>
							<input disabled='disabled' type='password' id='password' name='phone' value='*********'>
						</div>
					</fieldset>";
					?>
				</form>

			</div>
			<?php
			include('footer.php');
			?>
		</body>
		</html>