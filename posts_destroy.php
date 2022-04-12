<?php
    //(C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';

    $id = $_POST['id'];
    // モデルを使ってPostインスタンスを取得
    $post = Post::find($id);
    
    // そのインスタンスをMySQLから削除
    $flush = $post->delete();
    
    // flushメッセージをセッションに保存
    $_SESSION['flush'] = $flush;
    
    // リダイレクト
    header('Location: top.php');
    exit;
    