<?php
    // モデルのスーパークラス
    class Model {
    
        // データベースと接続を行うメソッド
        protected static function get_connection(){
            try {
                // オプション設定
                $options = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // 失敗したら例外を投げる
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,   //デフォルトのフェッチモードはクラス
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',   //MySQL サーバーへの接続時に実行するコマンド
                );
                // データベースを扱う万能の神様誕生
                $pdo = new PDO('mysql:host=localhost;dbname=facebook_20220428', 'root', '', $options);
                // $pdo = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_6e93e6768c08aea', 'b66150a69f9e1a', '48fe8fd1', $options);
                return $pdo;
                
            } catch (PDOException $e) {
                return 'PDO exception: ' . $e->getMessage();
            }
        }
        
        // データベースとの切断を行うメソッド
        protected static function close_connection($pdo, $stmt){
            try {
                $pdo = null;
                $stmt = null;
            } catch (PDOException $e) {
                return 'PDO exception: ' . $e->getMessage();
            }
        }
    }