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
        <title><?= $post->name ?>さんの投稿番号<?= $post->id ?>の詳細</title>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Original JavaScript -->
        <script src="js/script.js"></script>
    </head>
    <body style="background: url(images/gray.jpg);">
        <?php include_once 'views/_navbar_view.php'; ?>
        <div class="container p-2">
            <div class="row mt-4 mb-4">
                <h1 class="col-sm-12 text-center text-primary"><?= $post->name ?>さんの投稿番号<?= $post->id ?>の詳細</h1>
            </div>
            <?php include_once 'views/_flush_view.php'; ?>
            <div class="row mt-2">
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
                        <th>投稿番号</th>
                        <th>タイトル</th>
                        <th>内容</th>
                        <th>画像</th>
                        <th>投稿日時</th>
                        <th>更新日時</th>
                    </tr>
                    <tr class="text-center">
                        <td><?= $post->id ?></td>
                        <td><?= $post->title ?></td>
                        <td><?= $post->content ?></td>
                        <td><img src="uploads/posts/<?= $post->image ?>" alt="<?= $post->image ?>" class="post_img"></td>
                        <td><?= $post->created_at ?></td>
                        <td><?= $post->updated_at === '0000-00-00 00:00:00' ? '更新はありません' : $post->updated_at ?></td>
                    </tr>
                </table>
            </div>
            <?php if($login_user->id === $post->user_id): ?>
            <div class="row">
                <a href="posts_edit.php?id=<?= $post->id ?>" class="offset-sm-3 col-sm-6 btn btn-success mt-5">編集</a>
            </div>
            <form action="posts_destroy.php" method="POST">
                <input type="hidden" name="id" value="<?= $post->id ?>"/>
                <input type="hidden" name="_token" value="<?= $token ?>">
                <div class="row mt-4">
                    <button class="offset-sm-3 col-sm-6 btn btn-danger" type="submit" onclick="return confirm('本当に削除しますか?')">削除</button>
                </div>
            </form>
            <?php endif; ?>
        </div>
    </body>
</html> 