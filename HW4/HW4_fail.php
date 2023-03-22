<?php ob_start(); ?>
<?php session_start(); 

if($_SESSION["login"] == "No"){

} else {
    header("Location:HW4_error.php");
}

?>

<HTML>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        登入失敗!</br>
        網頁將在三秒後跳轉至登入頁面</br>
        <a href="HW4_index.php">點選這裡</a>
        <?php
        header("Refresh:3;url=HW4_index.php");
        ?>
    </body>
</HTML>

<?php ob_flush(); ?>