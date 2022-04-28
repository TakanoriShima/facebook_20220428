<?php
    //(C)
    require_once 'filters/login_filter.php';
    require_once 'filters/csrf_filter.php';
    // require_once 'models/Post.php';
    
    $id = $_POST['id'];
    // モデルを使ってPostインスタンスを取得
    $post = Post::find($id);
    
    if($post === false){
        header('Location: top.php');
        exit;
    }else if($login_user->id !== $post->user_id){
        header('Location: top.php');
        exit;
    }
    
    // そのインスタンスをMySQLから削除
    $flush = $post->delete();
    
    // flushメッセージをセッションに保存
    $_SESSION['flush'] = $flush;
    
    // リダイレクト
    header('Location: top.php');
    exit;
    