<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- ViewPort Setting -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Original CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">
        <title>Facebook Clone</title>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Original JavaScript -->
        <script src="js/script.js"></script>
    </head>
    <body style="background: url(images/gray.jpg);">
        <div class="container p-1">
            <div class="row mt-2">
                <h1 id="title" class="col-sm-12 text-center text-primary mt-3">Let's enjoy facebook clone!</h1>
            </div>
            <?php include_once 'views/_flush_view.php'; ?>
            <div id="mainVisual">
                <img src="images/top_1.jpg" alt="最初に表示されるtop画面" class="mainVisual">
            </div>
            <div class="row mt-5">
                <a href="signup.php" class="offset-sm-5 col-sm-2 btn btn-primary">会員登録</a>
            </div>
            <div class="row mt-3">
                <a href="login.php" class="offset-sm-5 col-sm-2 mt-3 btn btn-danger">ログイン</a>
            </div>
        </div>
    </body>
</html>