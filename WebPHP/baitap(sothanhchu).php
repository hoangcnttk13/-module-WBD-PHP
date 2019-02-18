<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ứng dụng đọc số thành chữ</title>
</head>
<h1>Ứng dụng đọc số thành chữ</h1>
<body>
   <form method="post">
       <h2> Nhập số </h2>
       <input type="text" name="number"  placeholder="Số cần đọc" />
       <input type="submit" value="ĐỌC"/>
   </form>
   <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            $numbers = $_POST["number"];
            if ($numbers>0 && $numbers<10){
              switch ($numbers){
               	case 1:
                   	echo "one";
                   	break;
               	case 2:
                   	echo "two";
                   	break;
               	case 3:
                   	echo "three";
                   	break;
               	case 4:
                   	echo "four";
                   	break;
                case 5:
                   echo "five";
                   break;
                case 6:
                   echo "six";
                   break;
                }
            }if ($numbers >= 10){
            	$numberss = $numbers -10;
            		switch ($numberss) {
            			case 0:
            				echo "ten";
            				break;
            			case 1:
            				echo "eleven";
            				break;
            			case 2:
            				echo "twelve";
            				break;
            		}
            }
        }

   ?>
</body>
</html>