<!DOCTYPE html>
<html>
<head>
   <title> Hiển thị thông báo nếu người dùng nhập số bất hợp lệ </title>
</head>
<body>
   <form method="post">
       <input type="text" name="numberone" placeholder="Nhap so thu nhat">
       <input type="text" name="numbertwo" placeholder="Nhap so thu hai">
       <input type="submit" value="CALC">
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"]=="POST") {
       $numberone = $_POST["numberone"];
       $numbertwo = $_POST["numbertwo"];
       $pattern = "/^\d+$/";
       try{
           if ((!preg_match($pattern,$numberone))||!preg_match($pattern,$numbertwo)) {
           throw new Exception();
           };

               echo "x=" . $numberone . "<br>";
               echo "y=" .$numbertwo ."<br>";
               echo "x+y = " .($numberone+$numbertwo);

       }
       catch (Exception $e){
           echo "nhap sai";

       }

   }
   ?>
</body>
</html>