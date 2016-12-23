<?php
session_start();
?>

<?php
  
    include ('connect.php');
    $id = $_GET['id'];
    $id_member = $_SESSION['id_member'];
    $sql = "SELECT id,uid FROM buyable WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    if (!$data){
         echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-floppy-remove'></span> Bài viết này không tồn tại hoặc đã bị xóa</div>  ";

      exit();}

    if ($data['uid'] == $id_member||$id_member=='1') //1: id của admin
    {   
        $sql = "DELETE FROM buyable WHERE id = $id";
        $conn->query($sql);
         echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Đã xóa thành công!</div>  ";

    }
      else
      {

           echo "<div class='alert alert-danger'> <span class='glyphicon glyphicon-remove'></span> Bạn không có quyền xóa bài viết này</div>  ";

      }
 ?>