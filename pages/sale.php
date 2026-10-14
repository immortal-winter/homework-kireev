<?php
$pageTitle = 'Акция';
$basePath  = '../';
include __DIR__ . '/../includes/header.php';
?>

<section class="hero-section sale-hero">
    <div class="hero-overlay">
        <div class="hero-text">
            <span class="hero-badge">🕒 Акция</span>
            <h1>Запишитесь онлайн!</h1>
            <p>При записи онлайн<br>скидка 10% до 01.05</p>
            <a href="registration.php" class="btn btn-purple btn-hero">Записаться</a>
        </div>
    </div>
</section>

<section class="sale-about">
    <div class="container">
        <h2 class="section-title">Благородный блеск. Безупречный уход</h2>
        <p class="sale-lead">
            «Шерсть аристократа» — премиальный груминг-салон, где профессиональный уход
            сочетается с индивидуальным подходом и безупречным сервисом. Мы бережно раскрываем
            природное благородство вашего питомца, создавая образ, достойный восхищения.
        </p>
        <a href="registration.php" class="btn btn-outline-purple">Записаться</a>
        <p class="sale-rating"><span class="review-stars">★★★★★</span> 1000+ Отзывов!</p>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>