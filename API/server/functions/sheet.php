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
  $group = $_POST['group'];
  $board = $_POST['board'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $type = $_POST['type'];
  $gpa = $_POST['gpa'];
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $dob = $_POST['birth'];
  $exam_name = $_POST['exam_name'];
  $year = $_POST['year'];
  $institute = $_POST['institute'];
  $result = $_POST['result'];
  /*    SHEET VALUES   */
  $bangla = $_POST['bangla'];
  $english = $_POST['english'];
  $bangladesh_history = $_POST['global_study'];
  $math = $_POST['math'];
  $ict = $_POST['ict'];
  $ID = $_POST['ID'];
  $physics = $_POST['physics'];
  $chemistry = $_POST['chemistry'];
  $biology = $_POST['biology'];
  $agriculture = $_POST['agriculture'];
  $carrier = $_POST['carrier'];
  $hindu = $_POST['hindu'];
  $islam = $_POST['islam'];
  $christian = $_POST['christian'];
  $phisical = $_POST['phisical'];
  $carrier = $_POST['carrier'];
  $finnance = $_POST['finnance'];
  $economic = $_POST['economic'];
  $business = $_POST['business'];
  $geography = $_POST['geography'];
  $geography_world = $_POST['geography_world'];
  $science = $_POST['science'];
  $physical = $_POST['phisical'];
  $accounting = $_POST['accounting'];
  $history = $_POST['history'];
  $ok = "YES";
  /*   PREPARED FOR SENDING INTO THE SERVER*/
  $sql = "INSERT INTO `subjects`(`student_id`, `student_name`, `bangla`, `english`, `math`, `ict`, `global_study`, `biology`, `chemistry`, `physics`, `hindu_edu`, `islam_edu`,
  `christian_edu`, `history`, `agriculture`, `economics`, `geography`, `science`, `accounting`, `finnance`, `geography_world`, `business`, `carrier_edu`,
  `physical_edu`)VALUES('$roll','$name','$bangla','$english','$math','$ict','$bangladesh_history','$biology','$chemistry','$physics','$hindu','$islam','$christian','$history','$agriculture','$economic','$geography','$science','$accounting','$finnance','$geography_world','$business','$carrier','$physical')";
  /*    ADDED THE STUDENTS INFO     */
  $info = "INSERT INTO `marksheet`(`student_name`, `roll`, `group`, `year`, `result`, `birth`, `gpa`, `exam_name`, `institute`, `father`, `mother`, `board`)VALUES('$name','$roll','$group','$year','$result','$dob','$gpa','$exam_name','$institute','$father','$mother','$mother')";
  //  echo $sql."\n\n".$info; exit();
  $query = $__DB__->__INSERT__($sql);
  if ($query) {
    if ($__DB__->__INSERT__($info)) {
      $update = "UPDATE `students` SET `marksheet`='$ok' WHERE `student_id`='$ID'";
      if ($__DB__->__INSERT__($update)) {
        echo "Inserted";
      }
    }
  }
}



/*
*
*
*
*
*
*/










if ($grouptggc == "Commerce") {
  $sql = "INSERT INTO `commerce`(`sub_id`, `student_name`, `sub_code`, `bangla`, `english`, `math`, `general_science`, `finnance`, `business_ent`, `ict`, `islam_edu`, `agriculture`,
    `hindu`, `christian`) VALUES
    ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')";
}

/*
  *
  * MAKING SQL QUERY
  *
  */
if ($_POST['grouphcc4'] == "Humanity") {
  $group = $_POST['group'];
  $board = $_POST['board'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $type = $_POST['type'];
  $gpa = $_POST['gpa'];
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $dob = $_POST['birth'];
  $exam_name = $_POST['exam_name'];
  $year = $_POST['year'];
  $institute = $_POST['institute'];
  $result = $_POST['result'];
  /*    SHEET VALUES   */
  $bangla = $_POST['bangla'];
  $english = $_POST['english'];

  $math = $_POST['math'];
  $ict = $_POST['ict'];



  $sql = "INSERT INTO `humanity`(`student_name`,`roll`,`sub_code`, `bangla`, `english`, `math`, `geography`, `civic_citizen`, `economics`,`general_science`,`ict`,`history`,`agriculture,`physical_education`,`carrier_edu`,`islam`)VALUES('$name','$roll','','$bangla','$english','$math','$geography','','$economic','$science','$ict','$history','$agriculture','$phisical','$carrier','')";
  $info = "INSERT INTO `marksheet`(`student_name`, `roll`, `group`, `year`, `result`, `birth`, `gpa`, `exam_name`, `institute`,
  `father`,`mother`,`board`)VALUES('$name','$roll','$group','$year','$result','$dob','$gpa','$exam_name','$institute','$father','$mother','$mother')";
  // echo $sql."\n\n".$info; exit();
  $query = $__DB__->__INSERT__($sql);
  if ($query) {
    if ($__DB__->__INSERT__($info)) {
      echo "Inserted";
    }
  }
}




if ($_POST['groupt'] == "Commerce") {
  $group = $_POST['group'];
  $board = $_POST['board'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $type = $_POST['type'];
  $gpa = $_POST['gpa'];
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $dob = $_POST['birth'];
  $exam_name = $_POST['exam_name'];
  $year = $_POST['year'];
  $institute = $_POST['institute'];
  $result = $_POST['result'];
  /*    SHEET VALUES   */
  $bangla = $_POST['bangla'];
  $english = $_POST['english'];
  $history = $_POST['bangladesh_history'];
  $hindu = $_POST['hindu'];
  $islam = $_POST['islam'];
  $christian = $_POST['christian'];
  $math = $_POST['math'];
  $ict = $_POST['ict'];
  $economic = $_POST['economic'];
  $geography = $_POST['geography'];
  $science = $_POST['science'];


  $sql = "INSERT INTO `humanity`(`student_name`, `sub_code`, `bangla`, `english`, `math`, `geography`, `civic_citizen`, `economics`, `general_science`, `ict`, `history`,`agriculture`, `hindu`, `christian`, `islam`) VALUES('$name','','$bangla','$english','$math','$geography','','$economic','$science','$ict','$history','$agriculture','[value-13]','[value-14]','[value-15]','[value-16]')";
  echo $sql;

}

?>