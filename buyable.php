<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<body id="page-top" class="index">

	<?php
	include('nav.php');
	?>
	<section id="buyable" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" >
					<h2 class="section-heading">MUA HỘ</h2>
					<h3 class="section-subheading text-muted">♥ Chia sẻ về chuyến đi của bạn để chúng tôi liên hệ khi có người có nhu cầu ♥</h3>
				</div>
			</div>
			<div class="form-style-6" id="buyableform">
				<form id="buyableform" action="#" method="post" style="padding-top: 0px;">
					<fieldset>
						<legend><span class="number">1</span>Thông tin chuyến đi</legend>
						<label for="currentplace">Đi từ*</label>
						<select name="currentplace" id="currentplace" class="medium gfield_select" tabindex="1">
							<option value="Nhật Bản">Nhật Bản</option>
							<option value="Hàn Quốc">Hàn Quốc</option>
							<option value="Pháp">Pháp</option>
							<option value="Mỹ">Mỹ</option>
							<option value="Hồng Kông">Hồng Kông</option>
							<option value="Thái Lan">Thái Lan</option>
							<option value="Úc">Úc</option>
							<option value="Anh">Anh</option>
							<option value="Singapore">Singapore</option>
							<option value="Đức">Đức</option>
							<option value="Ý">Ý</option>
							<option value="Tây Ban Nha">Tây Ban Nha</option>
							<option value="Nga">Nga</option>
							<option value="Canada">Canada</option>
						</select>
						<label>Đi đến*</label>
						<input type="text" name="destination" id="destination" placeholder="Hồ Chí Minh, Hà Nội, Lào cai ..."></textarea>
						<label>Trọng lượng còn dư (kg)*</label>
						<input type="number" name="leweight" id="leweight"/>
						<label>Có thể mua</label>
						<input type="text" name="item" id="item"placeholder="(tự chọn): 100 BlackBerry Passport, iphone 7 ...">
						<div id="post_error" style="color:red"> </div>
						<input type="submit" value="CHIA SẺ CHUYẾN ĐI" />
					</form>
				</div>
			</div>
		</div>
	</div>
	 <div id="post_success"> </div>

	<?php
	include('footer.php');
	?>

</body>

</html>
<script language="javascript">
$('#buyableform').submit(function ()
{
            // Xóa trắng thẻ div show lỗi
            $('#post_error').html('');

            var currentplace = $('#currentplace').val();
            var destination = $('#destination').val();
            var leweight = $('#leweight').val();
            var item = $('#item').val();

            // Kiểm tra dữ liệu có null hay không

            
            // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
            if ($.trim(currentplace) == ''||$.trim(destination) == ''||$.trim(leweight) == '')
            {
            	$('#post_error').html('Vui lòng nhập đầy đủ thông tin');
            	return false;
            }
            $('#buyableform').html('');
            $('#post_success').html(" <center><a href='index.php' class='btn btn-xl'> <span class='glyphicon glyphicon-ok'></span>Đăng bài thành công </br>Click để trở về trang chủ</a></center>");
            $.ajax({
            	url : 'buyablesubmit.php',
            	type : 'post',
            	dataType : 'json',
            	data : {
            		currentplace : currentplace,
            		destination : destination,
            		leweight: leweight,
            		item : item,


            	},

            	success : function (result)
            	{
                        // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
                        // Đây là kết quả trả về từ file do_validate.php
                        $('#post_error').html("thành công");
                        var html = '';
                        
                        // Lấy thông tin lỗi email
                        if ($.trim(result.email) != ''){
                        	html += result.email;
                        }

                        // Cuối cùng kiểm tra xem có lỗi không
                        // Nếu có thì xuất hiện lỗi
                        if (html != ''){
                        	$('#post_error').append(html);
                        }
                        else {
                            // Thành công

                            $('#post_error').html("thành công");
                        }
                    }
                });

return false;
});

</script>

