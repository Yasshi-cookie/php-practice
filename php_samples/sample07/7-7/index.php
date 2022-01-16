<?php
// setcookie('account', '', time() - 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // アカウントを受け取る
    $account = filter_input(INPUT_POST, 'account');
    setcookie('account', $account, time() + 3600);
    echo $account;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="account">アカウント名</label>
        <input type="text" name="account" id="account" value="<?= filter_input(INPUT_COOKIE, 'account', FILTER_SANITIZE_SPECIAL_CHARS) ?>">
        <button type="submit">ログインする</button>
    </form>
</body>
</html>
