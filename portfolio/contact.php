<?php

session_start();

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) { 
  die('お問い合わせの送信に失敗しました');
}

if(empty($_POST['name'])) {
  $_SESSION['flash']['name'] = 'お名前は必須項目です';
}

$_SESSION['original']['name'] = $_POST['name'];

if(empty($_POST['email'])) {
  $_SESSION['flash']['email'] = 'メールアドレスは必須項目です';
}

$_SESSION['original']['email'] = $_POST['email'];
$_SESSION['original']['message'] = $_POST['message'];

if(empty($_POST['name']) || empty($_POST['email'])) {
  header('Location: /index.php');
  exit;
}

mb_language("Japanese");
mb_internal_encoding("UTF-8");
// マルチバイトの文字エンコーディングを日本語&UTF-8にする

if($_POST) {
  $to = 'rinoa349@ymobile.ne.jp';
  $subject = 'お問い合わせがありました';

  $message = "お問い合わせがありました。\n";
  $message .= "\n";
  $message .= "入力された内容は以下の通りです。\n";
  $message .= "---\n";
  $message .= "\n";
  $message .= "お名前：\n";
  $message .= $_POST["name"];
  $message .= "\n";
  $message .= "メールアドレス:\n";
  $message .= $_POST["email"];
  $message .= "\n";
  $message .= "お問い合わせ本文:\n";
  $message .= $_POST["message"];

  if(mb_send_mail($to,$subject,$message)) {
    echo "メールが送信されました";
  } else {
    echo "メールの送信に失敗しました";
  }
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}