<?php
session_start();
?>

<?php
  
    include ('connect.php');
    $id = $_GET['id'];
    $id_member = $_SESSION['id_member'];
    $sql = "SELECT id,uid FROM buy WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    if (!$data){
         echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-floppy-remove'></span> Bài viết này không tồn tại hoặc đã bị xóa</div>  ";

      exit();}

    
     
        $id_user = $_SESSION['id_member'];
        $sql = "UPDATE buy SET status=0 where id=$id";
        $conn->query($sql);
         echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Đã xóa thành công@</div>  ";

    
 ?>