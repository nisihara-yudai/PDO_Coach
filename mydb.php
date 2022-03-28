<?php
// データベース・テーブルの作成(MAMP/XAMPPのサーバーを立ち上げて、MySQLにログインする)
// CREATE DATABASE mydb; //データベースを作成する
// USE mydb; //データベースを選択する
// CREATE TABLE items(id int,item_name varchar(10),price int, keyword varchar(20)); //テーブルを作成する

// データベースに接続する
$dsn = 'mysql:dbname=mydb;host=localhost;charset=utf8';
$user = 'root';
$password = 'root';

var_dump($dsn);

try{
  $dbh = new PDO($dsn,$user,$password);
  print("接続に成功しました。<br>");
}catch(PDOException $e){
  print('Error:'.$e->getMessage());
}

$dbh = null;
