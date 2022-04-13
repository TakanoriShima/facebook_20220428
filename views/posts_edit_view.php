<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $login_user->name ?>さんの投稿番号<?= $post->id ?>の編集</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background: url(images/gray.jpg);">
        <?php include_once 'views/_navbar_view.php'; ?>
        <div class="container">
            <div class="row mt-4 mb-4">
                <h1 class="col-sm-12 text-center text-primary mt-3 mb-3"><?= $login_user->name ?>さんの投稿番号<?= $post->id ?>の編集</h1>
            </div>
            <?php include_once 'views/_errors_view.php';?>
            <div class="row mt-3">
                <form class="col-sm-12" action="posts_update.php" method="POST" enctype="multipart/form-data">
                    <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">タイトル</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="title" value="<?= $post->title ?>">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">内容</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="content" value="<?= $post->content ?>">
                        </div>
                    </div>
                    
                     <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">画像</label>
                        <div class="col-10">
                            <input type="file" class="form-control" name="image" value="<?= $post->image ?>">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="row mt-5">
                        <button type="submit" class="offset-sm-3 col-sm-6 btn btn-primary">更新</button>
                    </div>
                    <input type="hidden" name="id" value="<?= $post->id ?>">
                    <input type="hidden" name="_token" value="<?= $token ?>">
                </form>
            </div>
            <div class="row mt-4">
                    <a href="posts_show.php?id=<?= $post->id ?>" class="offset-sm-3 col-sm-6 btn btn-danger">投稿番号<?= $post->id ?>の詳細へ戻る</a>
            </div>
            
        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>