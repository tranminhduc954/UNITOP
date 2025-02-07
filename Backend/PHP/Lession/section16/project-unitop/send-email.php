<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendEmail($send_to, $cc, $file, $subject, $body)
{
    try {
        require './PHPMailer/src/Exception.php';
        require './PHPMailer/src/PHPMailer.php';
        require './PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'minhductran.meow@gmail.com';                     //SMTP username
        $mail->Password   = 'pcpo wtqa aalu vkfr';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom('minhductran.meow@gmail.com', 'PHPMailer');
        $mail->addAddress($send_to);     //=====> $send_to;
        
        if (!empty($cc)) {
            $mail->addCC($cc);
        }

        //Attachments
        if (!empty($file)) {
            $mail->addAttachment($file);
        }

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject; //=======> $subject;
        $mail->Body    = $body; //=======> $body;

        $mail->send();
        return true;  // Return true if mail sent successfully
    } catch (Exception $e) {
        return false; // Return false if mail fails
    }
}

$send_success = false;  // Khai báo biến send_success trước khi sử dụng trong HTML

if (isset($_POST['send-email'])) {
    if (!empty($_POST['send_to'])) {
        $send_to = $_POST['send_to'];
        $cc = $_POST['cc'];
        $file = $_POST['file'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        $send_success = sendEmail($send_to, $cc, $file, $subject, $body);
    } else {
        echo "Không để trống địa chỉ nhận Email";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form send email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        #wrapper {
            width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 6px;
            display: inline-block;
        }

        input[type="email"],
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="email"]:focus,
        input[type="text"]:focus {
            border-color: #5b9bd5;
            outline: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-field {
            margin-bottom: 20px;
        }

        ::placeholder {
            color: #bbb;
            opacity: 1;
        }
    </style>
</head>

<body>
    <form action="#" method="POST">
        <div id="wrapper">
            <h1>Form gửi email</h1>
            <label for="send_to">Gửi đến</label><br>
            <input type="email" name="send_to" id="send_to" placeholder="Địa chỉ nhận Email (*)"><br>
            <label for="cc">C/c:</label><br>
            <input type="email" name="cc" id="cc" placeholder="Nếu không C/c thì để trống"><br>
            <label for="file">Đường dẫn file</label><br>
            <input type="text" name="file" id="file" placeholder="Nếu không có file thì để trống"><br>
            <label for="subject">Tiêu đề Email</label><br>
            <input type="text" name="subject" id="subject" placeholder="Nhập tiêu đề Email (*)"><br>
            <label for="body">Nội dung Email</label><br>
            <input type="text" name="body" id="body" placeholder="Nhập nội dung Email (*)"><br><br>
            <input type="submit" name="send-email" value="Gửi mail">
            <p>
                <?php 
                if ($send_success) {
                    echo "Gửi mail thành công";
                } else {
                    echo "Gửi mail thất bại";
                }
                ?>
            </p>
        </div>
    </form>
</body>

</html>