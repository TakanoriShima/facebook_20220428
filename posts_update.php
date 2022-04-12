<?php
    // (C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';
    
    // フォームで入力した値を取得
    $id = $_POST['id'];
    //そのidのユーザーインスタンスを取得
    $post = Post::find($id);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    
    // Postインスタンスの個性を変更
    $post->title = $title;
    $post->content = $content;
    $post->image = $image;
    
    // エラーの検証のメソッド
    $errors = $post->validate();
    if(count($errors) === 0) {
        $flush = $post->save();
        $_SESSION['flush'] = $flush;
        // MyPageへリダイレクト
        header('Location: mypage.php');
        exit;
    } else {
        // 入力のし直し
        $_SESSION['errors'] = $errors;
        header('Location: posts_edit.php?id=' . $post->id);
        exit;
    }
    // if(count($errors) === 0) {
    //     if($post->upload()) {
    //         $flush = $post->save();
    //         if($flush === '') {
    //             $_SESSION['errors'] = array('何らかの理由で投稿に失敗しました。');
    //             $_SESSION['post'] = $post;
    //             header('Location: posts_edit.php');
    //             exit;
    //         } else {
    //             $_SESSION['flush'] = $flush;
    //             header('Location: top.php');
    //             exit;
    //         }
    //     }
    // } else {
    //     $_SESSION['errors'] = $errors;
    //     $_SESSION['post'] = $post;
    //     header('Location: posts_edit.php');
    //     exit;
    // }