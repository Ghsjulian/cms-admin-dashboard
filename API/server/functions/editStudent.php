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
  $student_name = $_POST['student_name'];
  $group = $_POST['group'];
  $id = $_POST['id'];
  $roll = $_POST['roll_number'];
  $optional_sub = $_POST['optional_sub'];
  $religion = $_POST['religion'];
  $registration = $_POST['reg_number'];
  $password = $_POST['password'];
  $enc_password = sha1($password);
  /*
  *
  * MAKING SQL QUERY
  *
  */
  /* $sql = "INSERT INTO `students`(`student_name`, `rool`, `registration`, `password`,`group`) VALUES ('$student_name','$roll','$registration','$enc_password','$group')";*/
  $sql = "UPDATE `students` SET `student_name`='$student_name',`rool`='$roll',`registration`='$registration',`password`='$enc_password',`group`='$group',`optional_subject`='$optional_sub',`religion`='$religion'WHERE student_id='$id'";
  //echo $sql; exit();
  $query = $__DB__->__INSERT__($sql);
  if ($query) {
    echo json_encode(array(
      "status" => true,
      "message" => "Student Updated !"
    ));
  }
}


?>