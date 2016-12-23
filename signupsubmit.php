<?php
// Lấy thông tin username và email
    $email              = isset($_POST['email']) ? $_POST['email'] : false;
    $name               = isset($_POST['name']) ? $_POST['name'] : false;
    $phone              = isset($_POST['phone']) ? $_POST['phone'] : false;
    $password           = isset($_POST['password']) ? $_POST['password'] : false;
// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$email){
    die ('{error:"bad_request"}');
}

// Kết nối database

$conn = mysqli_connect('localhost', 'root', '', 'pika_shipper') or die ('{error:"bad_request"}');
mysqli_query($conn,"SET NAMES 'UTF8'");
// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
    'email' => ''
);
$check = 0;

if ($email)
{
    $query = mysqli_query($conn, "select count(*) as count from user where email = '$email'");

    if ($query){
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ((int)$row['count'] > 0){
            $error['email'] = 'Email đã tồn tại';
            $check = 1;
        }
    }
    else{
        die ('{error:"bad_request"}');
    }
}



if ($check == 0) {
    $password=md5($password);
$sql = "INSERT INTO user(name,email,phone,password)
    VALUES ('$name','$email','$phone','$password')";
$conn->query($sql);
}

die (json_encode($error));
?>