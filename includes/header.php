<?php
$hour = 21;
$theme = ($hour >= 8 && $hour < 20) ? 'day' : 'night';

$pageTitle = $pageTitle ?? 'Шерсть аристократа — Премиальный груминг-салон';
$basePath  = $basePath  ?? '';   
$active    = $active    ?? 'index';

$nav = [
    'index'        => 'Главная',
    'works'        => 'Наши работы',
    'services'     => 'Услуги',
    'about'        => 'О нас',
    'reviews'      => 'Отзывы',
    'registration' => 'Контакты',
];
$prefix = ($basePath === '') ? 'pages/' : '';   // из корня — pages/..., из /pages — просто файл
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
                <?php foreach ($nav as $key => $label): ?>
                    <li>
                        <a href="<?= $key === 'index' ? $basePath . 'index.php' : $prefix . $key . '.php' ?>"
                           class="<?= $active === $key ? 'active' : '' ?>"><?= $label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>