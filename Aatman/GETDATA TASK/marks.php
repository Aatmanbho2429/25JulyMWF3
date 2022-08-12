<?php
if (isset($_REQUEST['sub_1'])||isset($_REQUEST['sub_2'])||isset($_REQUEST['sub_3'])||isset($_REQUEST['sub_4'])) {
    if ($_REQUEST['sub_1'] != "" && $_REQUEST['sub_2'] != "" && $_REQUEST['sub_3'] != "" && $_REQUEST['sub_4'] != ""  ) {


        $a=$_POST['sub_1'];
        $b=$_POST['sub_2'];
        $c=$_POST['sub_3'];
        $d=$_POST['sub_4'];

        $result=$a+$b+$c+$d;

        $avg=$result/4;

        if ($avg>50) {
            echo "you passed";
        }else{
            echo "you failed";
        }
        
    }else{
        echo "enter the marks";
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        ENTER SUB-1:<input type="text" name="sub_1"><br>
        ENTER SUB-2:<input type="text" name="sub_2"><br>
        ENTER SUB-3:<input type="text" name="sub_3"><br>
        ENTER SUB-4:<input type="text" name="sub_4"><br>
        <input type="submit" value="submit">
    </form>



    
</body>
</html>