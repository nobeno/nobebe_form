<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQL実行
    $stmt = $dbh->prepare('SELECT * FROM surveys');
    $stmt->execute();
    $results = $stmt->fetchAll();

    // var_dump($results);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>一覧表示</title>
</head>
<body>
    <?php foreach ($results as $result): ?>
        <p><?php echo 'ニックネーム：' . h($result['nickname']); ?></p>
        <p><?php echo 'メールアドレス：' . h($result['email']); ?></p>
        <p><?php echo 'テキスト：' . h($result['content']); ?></p>
    <?php endforeach ; ?>
</body>
</html>
