<?php
// データベース・テーブルの作成(MAMP/XAMPPのサーバーを立ち上げて、MySQLにログインする)
// CREATE DATABASE mydb; //データベースを作成する
// USE mydb; //データベースを選択する
// CREATE TABLE items(id int,item_name varchar(10),price int, keyword varchar(20)); //テーブルを作成する

// データベースに接続する
$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'root';
$password = 'root';

// var_dump($dsn);
// var_dump($user);
// var_dump($password);

try{
  $dbh = new PDO($dsn,$user,$password);
  print("接続に成功しました。<br>");
  // $count = $dbh->exec('insert into items(id,item_name,price,keyword) values (1,"peach",210,"缶詰,ピンク,甘い")');
  // var_dump($count);

  // SQL文をセット
  // $stmt = $dbh->prepare('INSERT INTO item (id,item_name,price,keyword) VALUES (1,"peach",210,"缶詰,ピンク,甘い")');
  // var_dump($stmt);
  // // 値をセット
  // $stmt->bindValue(':id',1);
  // $stmt->bindValue(':item_name', 'peach');
  // $stmt->bindValue(':price', 210);
  // $stmt->bindValue(':keyword', "缶詰,ピンク,甘い");

  // // SQLを実行している
  // $stmt->execute();
  // echo "{$stmt}件のデータを挿入しました。";
  }catch(PDOException $e){
    print('Error:'.$e->getMessage());
}

// 追加
// $count = "INSERT INTO items (id,item_name,price,keyword) VALUES(1,'peach',210,'缶詰,ピンク,甘い')";

// $res = $dbh->query($count);

// var_dump($res);

$count = $dbh->exec('insert into items(id,item_name,price,keyword) values (1,"peach",210,"缶詰,ピンク,甘い")');
// var_dump($count);
echo $count . "件のデータを挿入しました。";
// $countId = $dbh->lastInsertId($count);
// echo "{$countId}件のデータを挿入しました。";
// 追加終わり

$dbh = null;
