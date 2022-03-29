<?php
// データベース・テーブルの作成(MAMP/XAMPPのサーバーを立ち上げて、MySQLにログインする)
// CREATE DATABASE mydb; //データベースを作成する
// USE mydb; //データベースを選択する
// CREATE TABLE items(id int,item_name varchar(10),price int, keyword varchar(20)); //テーブルを作成する

// データベースに接続する
$dsn = 'mysql:Dbname=mydb;host=localhost;';
$user = 'root';
$password = 'root';

// var_dump($dsn);
// var_dump($user);
// var_dump($password);

try{
  $dbh = new PDO($dsn,$user,$password);
  print("接続に成功しました。<br>");
}catch(PDOException $e){
  print('Error:'.$e->getMessage());
}

// 追加
// $count = $dbh->exec('INSERT INTO items SET id=1,item_name="peach",price=210,keyword="缶詰,ピンク,甘い"');
// var_dump($count);
// echo $count.'件のデータを挿入しました';
// 追加終わり

$sql = 'INSERT INTO items(id, item_name, price,)'

// $dbh = null;

