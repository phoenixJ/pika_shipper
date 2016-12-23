
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<body>

  <?php
  include('nav.php');
  ?>
<?php
include ('connect.php');
$keyword = $_GET['keyword'];
$country = $_GET['country'];
$sql = "SELECT * FROM buy where item_name like '%$keyword%' order by id desc";
$result = mysqli_query($conn, $sql);




$kq=0;

echo "<div class='container' style='margin-top: 150px'> <div class='form-style-6'><ul class='list-group'>";
echo "<div style='color:#fda200' id='count'></div>";

if ($country=='default')

  while($data = mysqli_fetch_array($result))
  {  
    if($data['status'] == NULL || $data['status'] == 0)
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

            <a href='getorder.php?id_post={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Nhận đơn »</b></i></a></small>
            </div>
            </div>

            </li>";
    $kq++;
  }

  }
  else
    while($data = mysqli_fetch_array($result))
    {  
      if($data['country']==$country)
      {
        if($data['status'] == NULL || $data['status'] == 0)
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

            <a href='getorder.php?id_post={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Nhận đơn »</b></i></a></small>
            </div>
            </div>

            </li>";
        $kq++;
      }
      }
    }
  echo "</ul></div></div>";
    echo "<script language='javascript'>$('#count').html('*Đã tìm thấy $kq kết quả');</script>";
    ?>
  </ul>
  <?php
  include('footer.php');
  ?>
</body>
</html>