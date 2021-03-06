<?php 
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html')  ;      
    }

    require_once('function.php');


    $nickname = h($_POST['nickname']); 
    $email = h($_POST['email']);
    $content = h($_POST{'content'});

    //DBと接続
    require_once('dbconnect.php');

    $stmt = $dbh->prepare('INSERT INTO surveys (nickname,email,content) VALUES(?,?,?)');
    $stmt->execute([$nickname,$email,$content]); 


 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>送信完了</title>
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
                    <h1>Thank you for contacting us!</h1>
                    <h3 class="mt-4"><?php echo $nickname; ?></h3>
                    <h3 class="mt-3"><?php echo $email; ?></h3>
                    <h3 class="mt-3"><?php echo $content; ?></h3>
                </div>

            </div><!--split-right__inner-->
        </div><!--split-item split-right-->

    </div><!--split-->
</body>
</html>