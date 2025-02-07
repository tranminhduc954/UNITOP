<?php
// Hàm về chuỗi trong PHP
# strlen('string') -> Trả về độ dài của chuỗi -> VD: strlen("hello") = 5;;

# ucfirst('string') -> Viết hoa ký tự đầu chuỗi -> VD: ucfirst('hello world') = 'Hello world';

# ucwords('string') -> Viết hoa mỗi ký tự đầu của chuỗi -> VD: ucwords('hello world') = 'Hello World';

# trim('string') -> Loại bỏ khoảng trắng dư thừa -> VD: trim(' Trần Minh Đức   ') = 'Trần Minh Đức';

# str_repeat('string', num) -> Lặp lại chuỗi với số lần xác định -> VD: str_repeat('--', 2) = '----';

# md5() -> hàm mã hóa chuỗi (hay sử dụng để mã hóa mật khẩu) -> VD: md5('Hb@123456') = 123124801u208d7as08d090;

# join(string, $arr) -> Dùng để nối các phần tử của mảng thành 1 string bởi ký tự nối 'string';
// VD: $myArr = ['a', 'b', 'c', 'd'] -> echo join('-', $myArr) = "a-b-c-d";

# implode() -> giống hệt join();

# explode(string, $arr) -> ngược lại với implode() và join(), nó sẽ tách một chuỗi ra thành 1 mảng với 'string' phân tách
// VD1: $myString = 'Trần Minh Đức'; echo explode(' ', $myString) -> ['Trần', 'Minh', 'Đức'];

# htmlspecialchars(string) -> sử dụng để chuyển đổi các ký tự đặc biệt trong một chuỗi thành các mã HTML tương ứng
// $string = "<script>alert('XSS');</script>";
// $encoded = htmlspecialchars($string);
// echo $encoded; 
// Output: "&lt;script&gt;alert(&#039;XSS&#039;);&lt;/script&gt;"


?>