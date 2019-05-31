<?php
    //メソッドがGETの時はトップページにリダイレクト
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html')  ;      
    }

    //関数の呼び出し,onceは一回だけ呼び出し
    require_once('function.php');

    //スーパーグローバル関数：$_POST
    // htmlspecialchars(string):特殊な文字をテキストに変換
    $nickname = h($_POST['nickname']); 
    $email = h($_POST['email']);
    $content = h($_POST{'content'});
    // echo $nickname;

    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されてないやん。';
    }else{
        $nickname_result = 'Welcome,' .  $nickname ; 
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
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>入力内容確認</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h1>入力内容確認</h1>
            <p class="mt-3"><?php echo $nickname_result; ?></p>
            <p class="mt-3"><?php echo $email_result; ?></p>
            <p class="mt-3"><?php echo $content_result; ?></p>
            <form method="POST" action="thanks.php">
                <input type="hidden" name="nickname" value="<?php echo $nickname?>">
                <input type="hidden" name="email" value="<?php echo $email?>">
                <input type="hidden" name="content" value="<?php echo $content?>">
                <input type="button" value="戻る" class="btn btn-outline-info col-1 mt-3" onclick="history.back()">
                <?php if ($email != '' && $nickname != '' && $content != '') ://コロン構文 ?>
                    <input type="submit" value="OK" class="btn btn-outline-info col-1 mt-3"> <!--処理-->
                <?php endif; ?>
            </form>
    </div>
</body>
</html>
 









