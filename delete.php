<?php
    // if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //     header('Location: index.html')  ;      
    // }


    //DBと接続
    require_once('dbconnect.php');

    $id = $_POST['id']; 
    $nickname = $_POST['nickname'];

    $stmt = $dbh->prepare('DELETE FROM surveys WHERE  id = ?');
    $stmt->execute([$id]); 

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>削除画面</title>
</head>
<body>
    <div class="split-box left-box"><!--右側画面--></div>
    
    <div class="split-box right-box container">
        <h1 class="mt-5"><?php echo "{$nickname}の情報を削除しました。" ?></h1>
        <div class="row justify-content-center">
        <form class="col-3">
             <input type="button" value="Back" class="btn btn-outline-info  mt-5" onclick="location.href='search.php' ">
        </form>
        </div>
    </div>

</body>
</html>
