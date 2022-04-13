<?php
    // (C)
    require_once 'filters/csrf_filter.php';
    require_once 'models/User.php';
    
    // POST,FILE通信で送られてきた値を取得
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];
    
    // 新しいUserインスタンスを作成
    $user = new User($name, $email, $password, $image);
    
    // エラーの検証のメソッド
    $errors = $user->validate();
    if(count($errors) === 0) {
        if($user->upload()) {
            $flush = $user->save();
            if($flush === '') {
                $_SESSION['errors'] = array('そのメールアドレスを持ったユーザーは既に存在します。');
                $user->email = '';
                $_SESSION['user'] = $user;
                header('Location: signup.php');
                exit;
            } else {
                $_SESSION['flush'] = $flush;
                header('Location: index.php');
                exit;
            }
        }
    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['user'] = $user;
        header('Location: signup.php');
        exit;
    }