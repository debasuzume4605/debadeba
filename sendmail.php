<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 入力されたデータを受け取る
    $nickname = htmlspecialchars($_POST['nickname']);  // あだ名
    $age = htmlspecialchars($_POST['age']);            // 年齢
    $content = htmlspecialchars($_POST['content']);    // お問い合わせ内容

    // メール送信設定
    $to = "kotani1529@gmail.com";  // 宛先のメールアドレス
    $subject = "お問い合わせフォームからのメッセージ"; // メールの件名
    $message = "以下の内容でお問い合わせがありました：\n\n";
    $message .= "あだ名: " . $nickname . "\n";
    $message .= "年齢: " . $age . "\n";
    $message .= "お問い合わせ内容: " . $content . "\n";

    // メールヘッダー（Fromの設定）
    $headers = "From: no-reply@example.com";  // 送信者のメールアドレス

    // メール送信
    if (mail($to, $subject, $message, $headers)) {
        echo "お問い合わせが送信されました。ありがとうございます。";
    } else {
        echo "メールの送信に失敗しました。後ほど再度お試しください。";
    }
} else {
    echo "不正なアクセスです。";
}
?>
