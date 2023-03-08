<meta charset="UTF-8">

<?php
    if(isset($_POST["id"])){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $join=$_POST["join"];
        $money=$_POST["money"];
        $eat=$_POST["eat"];
        $phone=$_POST["phone"];
        $comment=$_POST["comment"];

        echo "學號：".$id."</br>";
        echo "姓名：".$name."</br>";
        echo "參加：".$join."</br>";
        echo "繳交系費：".$money."</br>";
        echo "葷食或是素食：";
        if($eat == "meat"){
            echo "葷食</br>";
        }
        if($eat == "vegetable"){
            echo "素食</br>";
        }
        echo "手機號碼：".$phone."</br>";
        echo "備註：".nl2br(strip_tags($comment))."</br>";
    } else {
        echo "fail";
    }
?>