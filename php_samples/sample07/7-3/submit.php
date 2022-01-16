<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_POST['message'])) : ?>
        <p><?= htmlspecialchars($_POST['message'], ENT_QUOTES | ENT_HTML5); ?></p>
    <?php endif; ?>
</body>
</html>
