<?php
session_start();
?>

<?php
  
    include ('connect.php');
    $id = $_GET['id'];
    $id_member = $_SESSION['id_member'];
    $sql = "SELECT id FROM user WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    if (!$data){
         echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-floppy-remove'></span> Thành viên không tồn tại</div>  ";

      exit();}

    if ($id_member=='1') //1: id của admin
    {   
        $sql = "DELETE FROM user WHERE id = $id";
        $conn->query($sql);
         echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Đã xóa thành công!</div>  ";

    }
      else
      {

           echo "<div class='alert alert-danger'> <span class='glyphicon glyphicon-remove'></span> Bạn không có quyền xóa!</div>  ";

      }
 ?>