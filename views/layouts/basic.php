<?php
/*  @var $content string */
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Yii::$app->name ?></title>
    </head>
    <body>
        <p>Header</p>
        <?= $content ?>
        <p>Footer</p>
    </body>
</html>