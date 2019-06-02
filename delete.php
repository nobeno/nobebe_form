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
    <title>削除画面</title>
</head>
<body>
    <h1><?php echo "{$nickname}の情報を削除しました。" ?></h1>
    <form>
         <input type="button" value="Back" class="btn btn-outline-info col-2 mt-5" onclick="location.href='search.php' ">
    </form>

</body>
</html>
