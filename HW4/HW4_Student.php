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
        成功登入學生頁面</br>
        <a href="HW4_logout.php">logout</a>
    </body>
</HTML>