
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #222222">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="index.php#page-top">PikaShipper</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden">
          <a href="#page-top"></a>
        </li>
        <li>
          <?php
          if (isset($_SESSION['id_member']))
          {
            echo "<a class='page-scroll' href='buyer.php'>Cần Mua</a>";
          }
          ?>
        </li>
        <li>
          <?php
          if (isset($_SESSION['id_member']))
          {
            echo "<a class='page-scroll' href='buyable.php'>Mua Hộ</a>";
          }
          ?>
        </li>
        <li>
          <a href="listnews.php">Mặt Hàng</a>
        </li>
        <li>
          <a class="page-scroll" href="index.php#hiw">Cách Hoạt Động</a>
        </li>
        <li>
          <a href="blog.php">Blog</a>
        </li>
        <li>
          <a href="aboutus.php">About Us</a>
        </li>
        <li>

          <?php
          if (!isset($_SESSION['id_member']))
          {
            echo "<a data-toggle='modal' data-target='#login-modal' href='#'>Login</a>";

          }
          else
          {

            include('connect.php');
            $id_member=$_SESSION['id_member'];
            $sql = "SELECT *, id FROM user WHERE id='$id_member'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($result);
            echo " <li class='dropdown'><button style='margin-top: 6px'class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>{$data['name']}
            <span class='caret'></span></button><ul style='background:rgba(0,0,0,0.6)' class='dropdown-menu'>";
            echo"<li><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Thông tin tài khoản</a></li>";
            echo"<li><a href='ownpost.php'><span class='glyphicon glyphicon-flag'></span> Hoạt động</a></li>";

            /// nếu là admin
            if (($_SESSION['id_member'])==1)
            {
              echo"<li><a href='postmanagement.php'><span class='glyphicon glyphicon-bookmark'></span> Quản lý bài đăng</a></li>";
              echo"<li><a href='usermanagement.php'><span class='glyphicon glyphicon-signal'></span> Quản lý thành viên</a></li>";
            }
            echo"<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Đăng Xuất</a>
            </li>";
            echo"</ul></li>";
          }
          ?>


        </li>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>


<!-- Begin LOGIN Form-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
 <div class="modal-dialog" style="margin-top:100px">
  <div >

    <div id="div-forms">

      <div class="login-form">
        <h1>Sign In</h1>
        <h2><a href="signup.php">Create Account</a></h2>
        <form id="login-form">
          <li>
            <input id="login_email"type="text" class="text" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" ><a href="#" class=" icon user"></a>
          </li>
          <li>
            <input id="login_password"type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
          </li>
        </li>
        <div id="login_error" style="color:red"> </div>
      </li>

      <div class ="forgot">
        <h3><a href="#">Forgot Password?</a></h3>
        <input type="submit" onclick="loginsubmit.php" value="Sign In" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>

      </div>

    </form>
  </div>
                    
                   </div>
                 </div>

               </div>
             </div>
             <!-- END LOGIN Form-->
             <script language="javascript">
             $('#div-forms').submit(function ()
             {
            // Xóa trắng thẻ div show lỗi
            $('#login_error').html('');

            var email = $('#login_email').val();
            var password = $('#login_password').val();
            // Kiểm tra dữ liệu có null hay không

            
            // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
            if ($.trim(email) == ''||$.trim(password) == '')
            {
              $('#login_error').html('');
              $('#login_error').html('Vui lòng nhập đầy đủ thông tin');
              return false;
            }
            // ở đây tôi làm chú yêu chỉ cách dùng ajax nên sẽ ko đề cập tới,
            // vì sợ bài dài sẽ rối

            $.ajax({
              url : 'loginsubmit.php',
              type : 'post',
              dataType : 'json',
              data : {
                email : email,
                password : password
              },
              success : function (result)
              {
                    // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
                    // Đây là kết quả trả về từ file do_validate.php
                    
                    var html = '';
                    
                    // Lấy thông tin lỗi email
                    if ($.trim(result.email) != ''){
                      html += result.email;
                    }

                    // Cuối cùng kiểm tra xem có lỗi không
                    // Nếu có thì xuất hiện lỗi
                    if (html != ''){
                     $('#login_error').html('Email hoặc mật khẩu không chính xác');
                   }
                   else {
                    window.location.href = 'index.php';
                    window.alert("Login Succesfully!");
                  }
                }
              });

return false;
});

</script> 
