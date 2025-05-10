<?php

$sliderPages1 = [
    [
        'image' => '/images/pool_7.jpg',
        'alt' => 'Собака в бассейне',
        'class' => 'active',
        'active' => true,
    ],
    [
        'image' => '/images/pool_1.jpg',
        'alt' => 'Собака в бассейне',
    ],
    [
        'image' => '/images/pool_2.jpg',
        'alt' => 'Собака в бассейне',
    ],
    [
        'image' => '/images/grooming_6.jpg',
        'alt' => 'Груминг',
    ],
    [
        'image' => '/images/pool_5.jpg',
        'alt' => 'Собака в бассейне',
    ],
];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - Центр фитнеса и реабилитации животных</title>

    <?php require_once('components/assets.php') ?>
</head>
<body>

<?php require_once('components/header.php') ?>

<!-- Основное содержание -->
<main class="container my-5">
    <!-- Заголовок страницы -->
    <div class="page-header text-center mb-4">
        <h1>Немного о нас</h1>
    </div>

    <!-- Общее описание -->
    <section class="position-relative">
        <div class="pet-il-index-text"></div>
        <div class="block-goo-section">
            <div class="goo-block card-custom1 rounded-lg py-3 mb-5 d-flex flex-column justify-content-center p-normal-on-phone"
                 style="padding-right: 150px;padding-left: 30px;height: 300px;">
                <h2 class="text-center">Центр фитнеса и реабилитации животных</h2>
                <p class="mt-3">
                    Мы предлагаем полный спектр услуг для ваших питомцев: от плавания в бассейне для укрепления здоровья
                    до
                    профессионального груминга для поддержания их красоты. Наша команда специалистов заботится о
                    физическом
                    и
                    эмоциональном благополучии собак и кошек. Узнайте больше о наших услугах и свяжитесь с нами!
                </p>
            </div>
        </div>
    </section>

    <!-- Карусель -->
    <section class="card-custom2 rounded-lg mb-5">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php foreach ($sliderPages1 as $slideNum => $slide): ?>
                    <button type="button" data-bs-target="#carouselIndicators"
                            data-bs-slide-to="<?= $slideNum ?>"
                        <?= isset($slide['active']) && $slide['active'] ? 'class="active" aria-current="true"' : '' ?>></button>
                <?php endforeach; ?>
            </div>
            <div class="carousel-inner">
                <?php foreach ($sliderPages1 as $slideNum => $slide): ?>
                    <div class="carousel-item <?= isset($slide['active']) && $slide['active'] ? 'active' : '' ?>"
                         data-bs-interval="5000">
                        <img src="<?= $slide['image'] ?>" class="d-block w-100 rounded-lg" alt="<?= $slide['alt'] ?>"
                        style="<?= $slide['styleImg'] ?? '' ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </section>

    <!-- Блоки текста с описанием процедур -->
    <section class="row mb-5 position-relative justify-content-between">
        <div class="col-md-5 m-b-on-phone">
            <div class="card card-custom1 rounded-lg h-100 p-3">
                <h2>Плавание в бассейне</h2>
                <p class="mt-2">Плавание помогает укрепить мышцы, снизить вес и снять стресс у вашего питомца. Это
                    безопасный способ восстановления после травм и поддержания здоровья.</p>
                <a href="/pool" class="btn btn-contact mt-2">Узнать больше</a>
            </div>
        </div>
        <div class="pet-il-index"></div>
        <div class="col-md-5">
            <div class="card card-custom2 rounded-lg h-100 p-3">
                <h2>Профессиональный груминг</h2>
                <p class="mt-2">Наши мастера позаботятся о шерсти, когтях и гигиене вашего питомца, чтобы он выглядел
                    великолепно и чувствовал себя комфортно.</p>
                <a href="/grooming" class="btn btn-contact mt-2">Узнать больше</a>
            </div>
        </div>
    </section>

    <!-- Блок с ценами -->
    <section class="card-custom1 rounded-lg p-3 mb-5">
        <h2 class="text-center">Наши услуги и цены</h2>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card rounded-lg h-100 text-center">
                    <div class="card-body">
                        <h3 style="color: #4aa8de;">Занятие в бассейне</h3>
                        <p class="mt-2">1 занятие — от 1800 руб.</p>
                        <a href="/pool" class="btn btn-contact mt-2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-lg h-100 text-center">
                    <div class="card-body">
                        <h3 style="color: #4aa8de;">Фитнес и хэндлинг</h3>
                        <p class="mt-2">Абонемент — от 3500 руб.</p>
                        <a href="/fitness" class="btn btn-contact mt-2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-lg h-100 text-center">
                    <div class="card-body">
                        <h3 style="color: #4aa8de;">Груминг</h3>
                        <p class="mt-2">Комплекс — от 1500 руб.</p>
                        <a href="/grooming" class="btn btn-contact mt-2">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="card-custom1 rounded-lg p-3 mt-5">
        <h2 class="text-center">
            С актуальным прайс-листом можно ознакомиться тут
        </h2>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card rounded-lg h-100 text-center">
                    <div class="card-body">
                        <a href="/price/price_2025_03.xlsx" class="btn btn-contact mt-2">Прайс лист Март 2025</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'components/footer.php' ?>

</body>
</html>
