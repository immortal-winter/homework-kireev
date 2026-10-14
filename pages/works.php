<?php
$pageTitle = 'Наши работы';
$basePath  = '../';
include __DIR__ . '/../includes/header.php';
?>

<section class="works-section">
    <div class="container">
        <h2 class="section-title">Наши работы</h2>
        <div class="works-grid">
            <figure class="work-item">
                <img src="<?= $basePath ?>assets/images/do.jpg" alt="До">
                <figcaption>До</figcaption>
            </figure>
            <figure class="work-item">
                <img src="<?= $basePath ?>assets/images/posle.jpg" alt="После">
                <figcaption>После</figcaption>
            </figure>

            <figure class="work-item">
                <img src="<?= $basePath ?>assets/images/do.jpg" alt="До">
                <figcaption>До</figcaption>
            </figure>
            <figure class="work-item">
                <img src="<?= $basePath ?>assets/images/posle.jpg" alt="После">
                <figcaption>После</figcaption>
            </figure>

            <figure class="work-item">
                <img src="<?= $basePath ?>assets/images/do.jpg" alt="До">
                <figcaption>До</figcaption>
            </figure>
            <figure class="work-item">
                <img src="<?= $basePath ?>assets/images/posle.jpg" alt="После">
                <figcaption>После</figcaption>
            </figure>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>