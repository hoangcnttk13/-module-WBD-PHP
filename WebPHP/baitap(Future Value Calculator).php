<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ứng dụng Future Value Calculator</title>
	<style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
</head>
<h1>Ứng dụng Future Value Calculator</h1>
<body>
   <form method="post">
       <h2> Inventment Amount</h2>
       <input type="text" name="Amount"  placeholder="Lượng tiền đầu tư ban đầu" />
       <h2> Yearly Interest Rate</h2>
       <input type="text" name="Rate"  placeholder="Lãi suất năm" />
       <h2> Number of Years</h2>
       <input type="text" name="Years"  placeholder="Số năm đầu tư" /><br>
       <input type="submit" value="Calculator"/>
   </form>
<?php
	if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $Amount = $_POST["Amount"];
    $Rate = $_POST["Rate"];
    $Years = $_POST["Years"];
    $tinh = $Amount * ((1 + ($Rate)/100)**$Years);

    echo $tinh;
  }
?>
</body>
</html>