<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ログイン</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background: url(images/gray.jpg);">
        <div class="container">
            <div class="row mt-3">
                <h1 class="col-sm-12 text-center text-primary pb-1 mt-3 mb-3">ログイン</h1>
            </div>
            <?php include_once 'views/_errors_view.php';?>
            <div class="row mt-3">
                <form class="col-sm-12" action="login_check.php" method="POST">
                    <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">メールアドレス</label>
                        <div class="col-10">
                            <input type="email" class="form-control" name="email" value="<?= $user->email ?>">
                        </div>
                    </div>
                    <!-- 1行 -->
                    <div class="row">
                        <label class="col-2 col-form-label">パスワード</label>
                        <div class="col-10">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <!-- 1行 -->
                    <div class="row mt-5">
                            <button type="submit" class="offset-sm-3 col-sm-6 btn btn-primary">ログイン</button>
                    </div>
                    <input type="hidden" name="_token" value="<?= $token ?>">
                </form>
            </div>
            
            <div class="row mt-5">
                <a href="index.php" class=" offset-sm-3 col-sm-6 btn btn-danger">トップページに戻る</a>
            </div>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>