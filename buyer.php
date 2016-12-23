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

  <section id="wanttobuy">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">CẦN MUA HỘ</h2>
          <h3 class="section-subheading text-muted">♥ Chia sẻ món hàng ngoại bạn đang muốn được sở hữu trong tầm tay ♥</h3>
        </div>
      </div>
      <div class="form-style-5" id="buyform">
        <form id="buyform" action="#" method="post" style="padding-top: 0px;">
          <fieldset>
            <legend><span class="number">1</span>Thông tin hàng muốn mua</legend>
            <div class="col-md-6">
              <label>Tên sản phẩm*</label>
              <input type="text" name="item_name" id="item_name" placeholder="VD: Xiaomi Note 3,HP Elitebook 8470w ...">
              <label>Link ảnh mặt hàng*</label>
              <input type="url" name="link" id="link" placeholder="">
              <label for="country">Mua ở quốc gia*</label>
              <select name="country" id="country" class="medium gfield_select" tabindex="1">
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


             <label>Số lượng*</label>
             <input type="number" name="quantity" id="quantity" placeholder="Số lượng muốn mua">

           </div>
           <div class="col-md-6">
            <label>Thành tiền*</label>
            <h6 class="subheading">Nhập tiền ngoại tệ. Vd: Nếu là 20 EUR thì nhập số
             "20". Nếu là 3000 JPY thì nhập số "3000". PickShipper sẽ tự động quy đổi sang VND
             khi có người đồng ý mua hộ bạn. Tiền Hàng PHẢI BAO GỒM thuế tiêu thụ tại quốc gia bán.</h7>
             <input type="number" name="cost" id="cost" placeholder="...">

             <label>Tiền công (VND)*</label>
             <h6 class="subheading">Tiền Công luôn tính bằng tiền Việt (VND). Tiền Công bao gồm phí ship nội địa, 
              công mua và mang về, chi phí khác</h6>
              <input type="number" name="comission" id="comission" placeholder="...">
              <label for="currency">Đơn vị tiền*</label>
              <select name="currency" id="currency" class="medium gfield_select" tabindex="12">
                <option value="VND">VND</option>
                <option value="JPY">JPY</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="CAD">CAD</option>
                <option value="GBP">GBP</option>
                <option value="KRW">KRW</option>
                <option value="RUB">RUB</option>
                <option value="SGD">SGD</option>
                <option value="THB">THB</option>
                <option value="HKD">HKD</option>
                <option value="AUD">AUD</option>
              </select>
            </div>
            <div id="post_error" style="color:red"> </div>
            <input type="submit" value="SUBMIT" />
          </form>
         
        </div>
      </div>
    </div>
  </div>
 <div id="post_success"> </div>
</section>

<?php
include('footer.php');
?>

</body>

</html>
<script language="javascript">
$('#buyform').submit(function ()
{
            // Xóa trắng thẻ div show lỗi
            $('#post_error').html('');

            var item_name = $('#item_name').val();
            var link = $('#link').val();
            var country = $('#country').val();
            var quantity = $('#quantity').val();
            var cost = $('#cost').val();
            var comission = $('#comission').val();
            var currency = $('#currency').val();

            // Kiểm tra dữ liệu có null hay không

            
            // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
            if ($.trim(item_name) == ''||$.trim(link) == ''||$.trim(country) == ''||$.trim(quantity) == ''||$.trim(cost) == ''||$.trim(comission) == ''||$.trim(currency) == '')
            {
              $('#post_error').html('Vui lòng nhập đầy đủ thông tin');
              return false;
            }
              $('#buyform').html('');
              $('#post_success').html(" <center><a href='listnews.php' class='btn btn-xl'> <span class='glyphicon glyphicon-ok'></span>Đăng bài thành công </br>Click để trở về </a></center>");
            $.ajax({
              url : 'buyersubmit.php',
              type : 'post',
              dataType : 'json',
              data : {
                item_name : item_name,
                link : link,
                country: country,
                quantity : quantity,
                cost : cost,
                comission : comission,
                currency : currency,
      
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
