<?php
$hour  = 21;
$theme = ($hour >= 8 && $hour < 20) ? 'day' : 'night';

$pageTitle = $pageTitle ?? 'Шерсть аристократа';
$basePath  = $basePath ?? '';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css">
<?php if ($theme === 'night'): ?>
<link rel="stylesheet" href="<?= $basePath ?>assets/css/style-dark.css">
<?php endif; ?>
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="<?= $basePath ?>index.php">
                <img src="<?= $basePath ?>assets/images/logo.png" alt="Логотип">
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="<?= $basePath ?>index.php">Главная</a></li>
                <li><a href="<?= $basePath ?>pages/works.php">Наши работы</a></li>
                <li><a href="<?= $basePath ?>pages/services.php">Услуги</a></li>
                <li><a href="<?= $basePath ?>pages/about.php">О нас</a></li>
                <li><a href="<?= $basePath ?>pages/reviews.php">Отзывы</a></li>
                <li><a href="<?= $basePath ?>pages/registration.php">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>