<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<pre>";
        echo "=========get==========";
        print_r($_GET);
        echo "=========POST==========";
        print_r($_POST);
        echo "=========REQUEST==========";
        print_r($_REQUEST);
        echo "=========FILES==========";
        print_r($_FILES);
        echo "=========GLOBALS==========";
        print_r($GLOBALS);
    ?>
    <form method="get">
        <input type="text" name="getdata" id="">
        <input type="submit" name="send" id="">
    </form>
    <form method="post">
        <input type="text" name="postdata" id="">
        <input type="submit" name="send" id="">
    </form>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="profilepic" id="">
        <input type="submit" name="send" value="SendImg" id="">
    </form>
</body>
</html>