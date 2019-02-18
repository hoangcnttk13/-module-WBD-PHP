<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng ký người dùng</title>
	<style type="text/css">
    .error {
      color: #FF0000;
    }
    table{
      border-collapse: collapse;
      width: 100%;
    }
    td, th{
      border: solid 1px #ccc;
    }
    form{
      width: 450px;
    }
    </style>  
</head>
<body>
  <?php
  $error = null;
  $erroremail = null;
  $loierror = false;
  $nhan = null;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tennguoidung = $_POST ["tennguoidung"];
    $email = $_POST ["email"];
    $sdt = $_POST ["sdt"]; 

    if (empty($tennguoidung)|| empty($email) || empty($sdt)) {
        $error = "Không được để trống";
        $loierror = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erroremail = "Email Không đúng định dạng";
      $loierror = true;
    } else {
      $nhan = "Đăng ký thành công";
    } 
  }
?>
<form method="POST">
  <fieldset>
    <legend>Đăng Ký</legend>
    <p>Tên người dùng </p>
    <input type="text" name="tennguoidung" placeholder="Nhập tên người dùng">
    <p>Email</p>
    <input type="text" name="email" placeholder="Nhập email">
    <p>Số Điện Thoại</p>
    <input type="text" name="sdt" placeholder="Nhập số điện thoại"><br><br>
    <input type="submit" name="" value="Register">
    <p><?php echo $error ?></p>
    <p><?php echo $nhan ?></p>
    <p><?php echo $erroremail ?></p>
  </fieldset>
</form>
<table border="0">
  <caption><h2>Danh sách đăng ký</h2></caption>
    <tr>
      <th>STT</th>
      <th>Tên Người dùng</th>
      <th>Email</th>
      <th>SĐT</th>
    </tr>
</body>
</html>