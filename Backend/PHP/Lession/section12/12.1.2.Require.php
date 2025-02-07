<?php
// Giới thiệu về Require trong PHP
// Require trong PHP là một cách để kết hợp nhiều file PHP vào một file PHP khác.
// Require trong PHP có thể được sử dụng để bao gồm một file PHP vào một file khác.
// Sự khác biệt giữa Include và Require trong PHP
// Include và Require trong PHP đều được sử dụng để bao gồm một file PHP vào một file khác.
// Sự khác biệt giữa Include và Require trong PHP là:
// Include trong PHP: Nếu file không tồn tại thì sẽ hiển thị một cảnh báo nhưng chương trình vẫn tiếp tục chạy.
// Require trong PHP: Nếu file không tồn tại thì sẽ hiển thị một lỗi và chương trình sẽ dừng lại.
// Ví dụ về Require trong PHP
// Ví dụ sau sẽ bao gồm một file PHP vào một file khác bằng cách sử dụng Require trong PHP:
// File: header.php
// <?php
// echo "Đây là header";
// 
// php
// File: footer.php
// <?php
// echo "Đây là footer";
//
// File: index.php
// <?php
// require 'header.php';
// require 'footer.php';
// 
// Kết quả sẽ là:
// Đây là header
// Đây là footer
//
// Nếu file header.php không tồn tại thì sẽ hiển thị một lỗi và chương trình sẽ dừng lại.




?>