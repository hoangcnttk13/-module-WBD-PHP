<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
<table border="0">
  <caption><h1>Danh sách khách hàng</h1></caption>
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Ảnh</th>
  </tr>

<?php
  $customerlist = array(
    "1" => array("ten" => "Nguyễn Thế Hoàng", "ngaysinh" => "1997/09/22", "diachi" => "Quảng Bình", "anh" => "img/hoang.jpg"),
    "2" => array("ten" => "Trần Văn Lộc", "ngaysinh" => "1997/10/30", "diachi" => "Huế", "anh" => "img/loc.jpg")
  );
  
  foreach($customerlist as $key => $values){
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$values['ten']."</td>";
    echo "<td>".$values['ngaysinh']."</td>";
    echo "<td>".$values['diachi']."</td>";
    echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
    echo "</tr>";
  }
?>
</table>


</body>
</html>