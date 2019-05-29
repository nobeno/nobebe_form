<?php

    //スーパーグローバル関数：$_POST
    $nickname = $_POST['nickname']; 
    $email = $_POST['email'];
    $content = $_POST{'content'};
    // echo $nickname;

    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されてないやん。';
    }else{
        $nickname_result = 'Welcome,' . 'Mr.'. $nickname ; 
    }

     if ($email == '') {
        $email_result = 'メールアドレスが入力されてないやん。';
    }else{
        $email_result = 'メールアドレス:' . $email ; 
    }

     if ($content == '') {
        $content_result = 'お問い合わせ内容が入力されてないやん。';
    }else{
        $content_result = 'お問い合わせ内容:' . $content; 
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo $nickname_result ?></p>
    <p><?php echo $email_result ?></p>
    <p><?php echo $content_result ?></p>
</body>
</html>
