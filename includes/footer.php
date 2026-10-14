<?php
$hour = 21;
$theme = ($hour >= 8 && $hour < 20) ? 'day' : 'night';
?>

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
                    <?php foreach ($nav as $key => $label): ?>
                        <li>
                            <a href="<?= $key === 'index' ? $basePath . 'index.php' : $prefix . $key . '.php' ?>"><?= $label ?></a>
                        </li>
                    <?php endforeach; ?>
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