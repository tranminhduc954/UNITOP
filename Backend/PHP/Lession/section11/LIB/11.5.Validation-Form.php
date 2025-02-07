<?php
// Xây dựng fucntion kiểm tra định dạng dữ liệu
function is_username($username)
{
    $partten = '/^[A-Za-z0-9_\.]{6,32}$/';
    if (strlen($username) >= 6 && strlen($username) <= 32) {
        if (preg_match($partten, $username)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function is_password($password)
{
    $partten = '/^[A-Za-z\d@$!%*?&]{8,}$/';
    if (strlen($password) >= 8) {
        if (preg_match($partten, $password)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function is_email($email)
{
    $partten = '/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if (strlen($email) >= 6 && strlen($email) <= 32) {
        if (preg_match($partten, $email)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function is_phone($phone)
{
    $partten = '/^0\d{9}$/';
    if (strlen($phone) < 10 || strlen($phone) > 10) {
        return false;
    } else {
        if (preg_match($partten, $phone)) {
            return true;
        } else {
            return false;
        }
    }
}
function set_value($data)
{
    if (isset($_POST[$data])) {
        return $_POST[$data];
    } else {
        return '';
    }
}
function set_error($error, $data)
{
    if (isset($error[$data])) {
        return $error[$data];
    } else {
        return '';
    }
}
