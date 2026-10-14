<?php
$pageTitle = 'Отзывы';
$basePath  = '../';
include __DIR__ . '/../includes/header.php';
?>

<section class="reviews-section">
    <div class="container">
        <h2 class="section-title">Отзывы наших клиентов</h2>
        <div class="reviews-grid">
            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">
                        <img src="<?= $basePath ?>assets/images/krytoichel1.jpg" alt="Кирилл Петров">
                    </div>
                    <div class="review-info">
                        <h4 class="review-name">Кирилл Петров</h4>
                        <span class="review-pet">Шпиц, Бублик</span>
                        <div class="review-stars">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Привела своего шпица на стрижку. Мастера — настоящие волшебники! Собака вышла как с обложки журнала. Очень бережное отношение, никаких стрессов для питомца. Теперь только к вам!</p>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">
                        <img src="<?= $basePath ?>assets/images/krytoichel2.jpg" alt="Дмитрий Козлов">
                    </div>
                    <div class="review-info">
                        <h4 class="review-name">Дмитрий Козлов</h4>
                        <span class="review-pet">Мейн-кун, Барсик</span>
                        <div class="review-stars">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Наш кот всегда боялся грумеров, но здесь к нему нашли подход с первых минут. Шерсть блестит, когти аккуратно подстрижены. Спасибо за профессионализм и терпение!</p>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">
                        <img src="<?= $basePath ?>assets/images/krytoichel3.jpg" alt="Саня Смирнов">
                    </div>
                    <div class="review-info">
                        <h4 class="review-name">Саня Смирнов</h4>
                        <span class="review-pet">Лабрадор, Чарли</span>
                        <div class="review-stars">★★★★☆</div>
                    </div>
                </div>
                <p class="review-text">Хожу в «Шерсть аристократа» уже полгода. Лабрадору делают SPA-процедуры — он в восторге, да и я тоже. Чисто, уютно, мастера всегда приветливые. Рекомендую!</p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>