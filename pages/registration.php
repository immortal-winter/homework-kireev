<?php
$pageTitle = 'Контакты';
$basePath  = '../';
include __DIR__ . '/../includes/header.php';
?>

<section class="contact-section">
    <div class="container">
        <h2 class="section-title">Свяжитесь с нами</h2>

        <form class="contact-form" method="post" action="">
            <label>Имя
                <input type="text" name="name" required>
            </label>
            <label>Телефон
                <input type="tel" name="phone" placeholder="+7 (___) ___-__-__" required>
            </label>
            <label>Питомец
                <input type="text" name="pet" placeholder="Порода, кличка">
            </label>
            <label>Услуга
                <select name="service">
                    <option>Стрижка Мейн-Кун</option>
                    <option>SPA процедуры для собак</option>
                    <option>Стрижка шпиц</option>
                    <option>Стрижка Лабрадор</option>
                </select>
            </label>
            <button type="submit" class="btn btn-purple">Отправить</button>
        </form>

        <div class="contact-info">
            <h3>Контакты</h3>
            <p><strong>Улица:</strong> г. Магнитогорск, ул. Ленина 123</p>
            <p><strong>Телефон:</strong> +7 (999) 999-99-99</p>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>