 <?php
 //Kiểu dữ liệu chuỗi trong PHP
 //-> Dùng để lưu trữ 1 chuỗi các ký tự
 //-> Chuỗi được chứa trong "" hoặc '' -> nên dùng "" để chứa chuỗi cho tiện xử lý

 $fullName = "Trần Minh Đức";
 $age = '30';
 $null_string = '';
 $intro_myseft = "My name: $fullName";

 echo "Tên tôi là: <strong>$fullName</strong>";
 echo "<br>";
 echo "Tuổi của tôi: <strong>$age<strong>";
 echo "<br>";
 //  echo "$intro_myseft".$fullName;
 echo "$intro_myseft";
 
 ?>