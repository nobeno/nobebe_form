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
        $nickname_result = 'Value is required.Please write your nickname.';
    }else{
        $nickname_result = 'Welcome,' .  $nickname ; 
    }

     if ($email == '') {
        $email_result = 'Value is required.Please write your Email.';
    }else{
        $email_result = 'Email:' . $email ; 
    }

     if ($content == '') {
        $content_result = 'Value is required.Please write content.';
    }else{
        $content_result = 'Message:' . $content; 
    }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>入力内容確認</title>
</head>
<body>

    <div class="split">
        <div class="split-item split-left">
            <div class="split-left__inner">

            </div><!--split-left__inner-->
        </div><!--split-item split-left-->
        
        <div class="split-item split-right">
            <div class="split-right__inner">

                <div class="container text-center mt-5">
                    <h1>Confirm the following:</h1>
                    <p class="mt-5"><?php echo $nickname_result; ?></p>
                    <p class="mt-3"><?php echo $email_result; ?></p>
                    <p class="mt-3"><?php echo $content_result; ?></p>
                    <form method="POST" action="thanks.php">
                        <input type="hidden" name="nickname" value="<?php echo $nickname?>">
                        <input type="hidden" name="email" value="<?php echo $email?>">
                        <input type="hidden" name="content" value="<?php echo $content?>">
                        <input type="button" value="Back" class="btn btn-outline-info col-2 mt-5" onclick="history.back()">
                        <?php if ($email != '' && $nickname != '' && $content != '') ://コロン構文 ?>
                            <input type="submit" value="OK" class="btn btn-outline-info col-2 mt-5"> <!--処理-->
                        <?php endif; ?>
                    </form>
                </div>


            </div><!--split-right__inner-->
        </div><!--split-item split-right-->

    </div><!--split-->

</body>
</html>
 









