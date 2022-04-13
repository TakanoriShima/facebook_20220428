<?php
    // (C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';
    $token = session_id();
    
     // idというキーワードに紐づいて飛んできた値を取得
    $id = $_GET['id'];
    // GET通信で飛んできたidからPostインスタンスを復元
    $post = Post::find($id);
    
    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = null;
    
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    
    include_once 'views/posts_edit_view.php';