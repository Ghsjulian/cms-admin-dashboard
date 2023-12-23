<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
/*===================================*/
require_once '../database/__DB__.php';
$message = "";
$status = "";
$__DB__ = new __database__();
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "POST") {
  $ein = $_POST['ein'];
  $roll = trim($_POST['roll']);
  $reg = $_POST['regi'];
  $password = trim($_POST['password']);
  $enc_pass = sha1($password);

  $sql = "SELECT rool, password FROM students WHERE rool='$roll' AND password='$enc_pass'";
  if ($__DB__->__LOGIN__($sql)) {
    echo json_encode(array(
      "status"=>true,
      "message"=> "Data Exist"
      ));
  } else {
    echo json_encode(array(
      "status"=>false,
      "message"=> "Data Doesn't Exist"
      ));
  }
}