<?php
session_start();
?>
<?php
    $email              = isset($_POST['email']) ? $_POST['email'] : false;
    $password           = isset($_POST['password']) ? $_POST['password'] : false;
    $password           = md5($password);

$conn = mysqli_connect('localhost', 'root', '', 'pika_shipper') or die ('{error:"bad_request"}');
mysqli_query($conn,"SET NAMES 'UTF8'");

$error = array(
    'error' => 'success',
    'email' => ''
);

    $query = mysqli_query($conn, "select email,password,id from user where email = '$email'");
    if ($query){
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ($row['email'] != $email || $row['password'] != $password){
            $error['email'] = 'Thông tin đăng nhập không chính xác';
        }
        else $_SESSION['id_member'] = $row['id'];
    }
    else{
        die ('{error:"bad_request"}');
    }

die (json_encode($error));
?>