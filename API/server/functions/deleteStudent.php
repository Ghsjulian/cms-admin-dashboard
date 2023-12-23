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

if ($_GET['std_id']) {
  $student_id = $_GET['std_id'];
  $sql = "DELETE FROM students WHERE student_id='$student_id'";
  $delete_query = $__DB__->__INSERT__($sql);
  if ($delete_query) {
    header("location:http://localhost:8000/Bd_Result/Admin/");
  }
}


?>