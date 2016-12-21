<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/css/my_css.css" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <div class="login-page">
  <div class="form">
    <p>Chúc mừng "<?php echo $this->session->userdata("username"); ?>"" đã đăng nhập thành công!</p>
    <p>Click để vào trang chủ.</p>
    <a href="<?php echo base_url(); ?>landingpage" class="btn btn-primary btn-lg active" role="button">Về trang chủ</a></button>
  </div>
  </div>
</body>
</html>