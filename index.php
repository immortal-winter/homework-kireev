<?php
$hour = 21;
$theme = ($hour >= 8 && $hour < 20) ? 'day' : 'night';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шерсть аристократа — Премиальный груминг-салон</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if ($theme === 'night'): ?>
        <link rel="stylesheet" href="assets/css/style-dark.css">
    <?php endif; ?>
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <img src="assets/images/logo.png" alt="Логотип">
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="active">Главная</a></li>
                <li><a href="pages/works.php">Наши работы</a></li>
                <li><a href="pages/services.php">Услуги</a></li>
                <li><a href="pages/about.php">О нас</a></li>
                <li><a href="pages/reviews.php">Отзывы</a></li>
                <li><a href="pages/registration.php">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero-section">
    <div class="hero-overlay">
        <div class="hero-text">
            <h1>Запишитесь онлайн!</h1>
            <p>При записи онлайн<br>скидка 10% до 01.05</p>
            <a href="pages/sale.php" class="btn btn-purple btn-hero">Записаться</a>
        </div>
    </div>
    <div class="hero-pagination">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>

<!-- ===== УСЛУГИ ===== -->
<section class="services-section">
    <div class="container">
        <h2 class="section-title">Наши услуги</h2>
        <div class="services-grid">

            <div class="service-card">
                <div class="card-img">
                    <img src="assets/images/meinkun.jpg" alt="Стрижка Мейн-Кун">
                </div>
                <div class="card-body">
                    <h3>Стрижка Мейн-Кун</h3>
                    <a href="pages/registration.php" class="btn btn-outline-purple">Записаться</a>
                </div>
            </div>

            <div class="service-card">
                <div class="card-img">
                    <img src="assets/images/spa.jpg" alt="SPA процедуры для собак">
                </div>
                <div class="card-body">
                    <h3>SPA процедуры для собак</h3>
                    <a href="pages/registration.php" class="btn btn-outline-purple">Записаться</a>
                </div>
            </div>

            <div class="service-card">
                <div class="card-img">
                    <img src="assets/images/shpich.jpg" alt="Стрижка шпиц">
                </div>
                <div class="card-body">
                    <h3>Стрижка шпиц</h3>
                    <a href="pages/registration.php" class="btn btn-outline-purple">Записаться</a>
                </div>
            </div>

            <div class="service-card">
                <div class="card-img">
                    <img src="assets/images/labar.jpg" alt="Стрижка Лабрадор">
                </div>
                <div class="card-body">
                    <h3>Стрижка Лабрадор</h3>
                    <a href="pages/registration.php" class="btn btn-outline-purple">Записаться</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== О НАС ===== -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">О нас</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Мы создали эту студию, потому что убеждены: груминг — это не просто эстетика, а важный элемент здоровья, комфорта и долгой счастливой жизни вашего питомца.</p>
                <p>Мы работаем исключительно с проверенной профессиональной косметикой, подбирая шампуни, кондиционеры и уходовые средства под тип шерсти, возраст и особенности кожи вашего друга.</p>
                <p>Доверьте заботу профессионалам. Запишитесь на процедуру онлайн — и убедитесь: когда красота и здоровье идут рука об руку, ваш питомец расцветает по-настоящему.</p>
            </div>
            <div class="about-image">
                <img src="assets/images/dogeater.jpg" alt="О нас">
            </div>
        </div>
    </div>
</section>

<!-- ===== НАШИ РАБОТЫ ===== -->
<section class="works-section">
    <div class="container">
        <h2 class="section-title">Наши работы</h2>
        <div class="works-grid">
            <figure class="work-item">
                <img src="assets/images/do.jpg" alt="До">
                <figcaption>До</figcaption>
            </figure>
            <figure class="work-item">
                <img src="assets/images/posle.jpg" alt="После">
                <figcaption>После</figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- ===== КОМАНДА ===== -->
<section class="team-section">
    <div class="container">
        <h2 class="section-title">Наша команда</h2>
        <div class="team-grid">

            <div class="team-card">
                <div class="team-img">
                    <img src="assets/images/dogeater.jpg" alt="Нао Токанава">
                </div>
                <h3>Нао Токанава</h3>
                <span class="team-role">Главный грумер</span>
                <p class="team-desc">Мастер стрижек</p>
                <div class="team-social">
                    <a href="#" class="social-icon">📷</a>
                    <a href="#" class="social-icon">💬</a>
                </div>
            </div>

            <div class="team-card">
                <div class="team-img">
                    <img src="assets/images/dogeater2.jpg" alt="Мэри Дэвис">
                </div>
                <h3>Мэри Дэвис</h3>
                <span class="team-role">Грумер</span>
                <p class="team-desc">Находит подход к самым капризным</p>
                <div class="team-social">
                    <a href="#" class="social-icon">📷</a>
                    <a href="#" class="social-icon">💬</a>
                </div>
            </div>

            <div class="team-card">
                <div class="team-img">
                    <img src="assets/images/dogeater3.jpg" alt="Олег Джонс">
                </div>
                <h3>Олег Джонс</h3>
                <span class="team-role">Грумер</span>
                <p class="team-desc">Чувствует настроение питомца</p>
                <div class="team-social">
                    <a href="#" class="social-icon">📷</a>
                    <a href="#" class="social-icon">💬</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== ОТЗЫВЫ ===== -->
<section class="reviews-section">
    <div class="container">
        <h2 class="section-title">Отзывы</h2>
        <p class="section-subtitle">Что говорят о нас наши клиенты</p>
        <div class="reviews-grid">

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">
                        <img src="assets/images/krytoichel1.jpg" alt="Кирилл Петров">
                    </div>
                    <div class="review-info">
                        <h4 class="review-name">Кирилл Петров</h4>
                        <div class="review-stars">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Привела своего шпица Бублика на стрижку. Мастера — настоящие волшебники! Собака вышла как с обложки журнала. Очень бережное отношение, никаких стрессов для питомца. Теперь только к вам!</p>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">
                        <img src="assets/images/krytoichel2.jpg" alt="Дмитрий Козлов">
                    </div>
                    <div class="review-info">
                        <h4 class="review-name">Дмитрий Козлов</h4>
                        <div class="review-stars">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Наш мейн-кун Барсик всегда боялся грумеров, но здесь к нему нашли подход с первых минут. Шерсть блестит, когти аккуратно подстрижены. Спасибо за профессионализм и терпение!</p>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">
                        <img src="assets/images/krytoichel3.jpg" alt="Саня Смирнов">
                    </div>
                    <div class="review-info">
                        <h4 class="review-name">Саня Смирнов</h4>
                        <div class="review-stars">★★★★☆</div>
                    </div>
                </div>
                <p class="review-text">Хожу в «Шерсть аристократа» уже полгода. Лабрадору делают SPA-процедуры — он в восторге, да и я тоже. Чисто, уютно, мастера всегда приветливые. Рекомендую всем друзьям!</p>
            </div>

        </div>
        <div class="reviews-cta">
            <a href="pages/reviews.php" class="btn-outline-purple">Все отзывы</a>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <p><strong>Тел:</strong> +7 (999) 999 99-99</p>
                <p><strong>Адрес:</strong> г. Магнитогорск, ул. Ленина 32</p>
                <p><strong>Часы:</strong> Пн-Вс с 8:00 по 17:00</p>
            </div>
            <div class="footer-col">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="pages/about.php">О нас</a></li>
                    <li><a href="pages/services.php">Услуги</a></li>
                    <li><a href="pages/works.php">Наши работы</a></li>
                    <li><a href="pages/registration.php">Контакты</a></li>
                    <li><a href="pages/reviews.php">Отзывы</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <ul>
                    <li><a href="#">Telegram</a></li>
                    <li><a href="#">Вконтакте</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>