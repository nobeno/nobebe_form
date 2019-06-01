<?php 
    
    require_once('function.php');
    require_once('dbconnect.php');

    $nickname = '';
    if (isset($_GET['nickname'])) {
        $nickname = $_GET['nickname'];
    }

    $stmt = $dbh->prepare('SELECT * FROM surveys WHERE nickname like ?');
    $stmt->execute(["%$nickname%"]);
    $results = $stmt->fetchAll();




 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
     <meta charset="utf-8">
     <title>Document</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
 </head>
 <body>
    <form action="search.php" method="GET">
        <input type="text" name="nickname">
        <input type="submit" value="検索" class="btn btn-info">
    </form>
    <div class="">
    <?php foreach ($results as $result): ?>
        <p><?php echo 'ニックネーム：' . h($result['nickname']); ?></p>
        <p><?php echo 'メールアドレス：' . h($result['email']); ?></p>
        <p><?php echo 'テキスト：' . h($result['content']); ?></p>

        <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info" data-sample="<?php echo $result['nickname'] ?>" data-toggle="modal" data-target="#exampleModal">
              削除
            </button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">確認</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
        
                  </div>
                  <div class="modal-footer">
                    <form action="delete.php" method="POST">
                    <!-- <input type="submit" value="削除" class="btn btn-outline-danger"> -->
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                    <input type="hidden" name="nickname" value="">
                    </form>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">戻る</button>
                  </div>
                </div>
              </div>
            </div>
    <?php endforeach ; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="bootstrap.js"></script>
    <script src="app.js"></script>

 </body>
 </html>