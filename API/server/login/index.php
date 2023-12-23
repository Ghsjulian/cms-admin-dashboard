<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
/*===================================*/
require_once '../database/__DB__.php';
require_once '__HandleLogin__.php';
$message = "";
$status = "";
$token = "";
$user_role = "";
$__DB__ = new __database__();
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod === "POST") {
  $name = $_POST['user_email'];
  $password = $_POST['user_password'];
  $checkLogin = __HandleLogin__($name, $password, $__DB__);
  if ($checkLogin) {
    $sql = "SELECT * FROM users WHERE user_email='$name' AND user_role='admin_ghs'";
    $data = $__DB__->__SELECT__($sql);
    $_SESSION['admin'] = $data[0];
    $message = "Login Successfully";
    $status = true;
  } else {
    $message = "Invalid Username Or Password";
    $status = false;
  }
  echo json_encode(array(
    "status" => $status,
    "message" => $message
  ));
}



?>