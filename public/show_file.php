<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ファイル表示プログラム</title>
</head>
<body>
<?php

//ファイル名を指定
$file = __FILE__;

//ファイルの中身を代入
$content = file_get_contents($file);

//ファイルの中身を表示
echo nl2br(htmlspecialchars($content, ENT_QUOTES, 'UTF-8'), false);

?>
</body>
</html>