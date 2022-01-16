<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS); ?>
    <p><?= $message; ?></p>
    <form action="" method="post">
        <label for="message">メッセージをどうぞ</label>
        <input type="text" name="message" id="message">
        <button type="submit">送信する</button>
    </form>
</body>
</html>
