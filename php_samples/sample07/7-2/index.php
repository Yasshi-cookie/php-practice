<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>現在の時刻は <?= date('H:i:s'); ?> です</p>
    <?= '<h1>見出しです</h1>' ?>
    <?= htmlspecialchars('HTMLの見出しは<h1>と書きます。', ENT_QUOTES | ENT_HTML5); ?>
</body>
</html>
