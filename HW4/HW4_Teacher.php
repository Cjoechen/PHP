<?php session_start(); 

if($_SESSION["login"] == "Yes"){

} else {
    header("Location:HW4_error.php");
}

?>

<HTML>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        成功登入老師頁面</br>
        跳轉至<a href="HW4_TtoStudent.php">學生頁面</a></br>
        <a href="HW4_logout.php">logout</a>
    </body>
</HTML>