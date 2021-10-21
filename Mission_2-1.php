<!DECTYPE html><html lang = ja>
<head>
    <meta charset "UTF-8">
    <title>MIssion_2-1</title>
</head>
<body>
    <form action ="" method = "post">
        <input type = "text" name = "str" value = "コメント">
        <input type = "submit" name = "submit" value = "送信">
        </form>
        <?php
        if(isset($_POST["str"])){
            $str = $_POST['str'];
            echo $str."を受け付けました<br>";
        }
        
        ?>
        
</body>
</html>