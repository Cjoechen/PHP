<?php session_start();

$myIDStudent="student";
$myPWDStudent="123";

$myIDTeacher="teacher";
$myPWDTeacher="456";

$myIDPrincipal="principal";
$myPWDPrincipal="789";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($myIDStudent == $id) && ($myPWDStudent == $pwd)){
    $_SESSION["login"]="Yes";
    header("Location:HW4_Student.php");
} else if(($myIDTeacher == $id) && ($myPWDTeacher == $pwd)){
    $_SESSION["login"]="Yes";
    header("Location:HW4_Teacher.php");
} else if(($myIDPrincipal == $id) && ($myPWDPrincipal == $pwd)){
    $_SESSION["login"]="Yes";
    header("Location:HW4_Principal.php");
} else {
    $_SESSION["login"]="No";
    header("Location:HW4_fail.php");
}

?>