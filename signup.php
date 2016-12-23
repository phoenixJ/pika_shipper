<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<body id="page-top" class="index">

    <?php
    include('nav.php');
    ?>
    <section id="login" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Đăng Ký</h2>
                    <h3 class="section-subheading text-muted">♥ Đăng ký để quản lý và đăng tin nhé ♥</h3>
                    
                </div>
            </div>


            <div class="form-style-6" id="signup">
              <form id="signup" method="POST" action="#" style="padding-top: 0px;">

                <fieldset>
                    
                    <div class="col-md-6">
                    <legend><span class="number">1</span>Họ & tên*</legend>
                    <input type="text" id="name" name="name" placeholder="Nhập tên">
                    </div>
                    <div class="col-md-6">
                    <legend><span class="number">2</span>Email*</legend>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com*">
                    </div>
                    <div class="col-md-12">
                    <legend><span class="number">3</span>Password*</legend>
                    <input type="password" id="password" name="password" placeholder="******">
                    <legend><span class="number">4</span>Password Confirm*</legend>
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="******	">
                    <legend><span class="number">5</span>Số điện thoại*</legend>
                    <input type="text" id="phone" name="phone" placeholder="0919 991 199">
                    <div id="showerror" style="color:red"></div>
                        <button type="submit" class="btn btn-primary" style="font-size: 20px">ĐĂNG KÝ</button>
                    </div>
                </fieldset>
                
            </form>

        </div>

        <div id="signup_success"></div>


        <script language="javascript">
        $('#signup').submit(function (){
           $('#errorinput').html('');
           return false;
       });	
        $('#signup').submit(function ()
        {
                // Xóa trắng thẻ div show lỗi
                $('#showerror').html('');

                var email = $('#email').val();
                var name = $('#name').val();
                var phone = $('#phone').val();
                var password = $('#password').val();
                var password_confirm = $('#password_confirm').val();

                if ($.trim(name) == ''||$.trim(email) == ''||$.trim(phone) == ''||$.trim(password) == ''||$.trim(password_confirm) == '')
                {

                   $('#showerror').html('Vui lòng nhập đầy đủ');
                   return false;
               }
               if ($.trim(password) != $.trim(password_confirm))
               {

                   $('#showerror').html('Password không giống nhau');
                   return false;
               }
               $('#showerror').html($.trim(email));
               $.ajax({
                url : 'signupsubmit.php',
                type : 'post',
                dataType : 'json',
                data : {
                    email : email,
                    name : name,
                    phone : phone,
                    password : password
                },
                success : function (result)
                {


                    var html = '';

                    if ($.trim(result.email) != ''){
                        html += result.email;
                    }

                    if (html != ''){
                     $('#showerror').html('Email đã tồn tại hãy chọn một email khác');
                 }
                 else {
                            // Thành công
                            $('#signup').html('');
                            $('#signup_success').html(" <center><a href='index.php' class='btn btn-xl'> <span class='glyphicon glyphicon-ok'></span>Đăng kí thành công </br>Click để trở về trang chủ</a></center>");
                        }
                    }
                });

$('#showerror').html('');
return false;
});


</script>

<?php
include('footer.php');
?>

</body>
</html>
