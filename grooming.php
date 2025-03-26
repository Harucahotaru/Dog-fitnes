<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('components/assets.php') ?>
</head>
<body>

<?php require_once('components/header.php') ?>

<!-- Основное содержание -->
<main class="container my-5">
    <!-- Заголовок страницы -->
    <div class="page-header text-center mb-4">
        <h1>Груминг</h1>
    </div>

    <!-- Раздел 1: Коротко про преимущества -->
    <section class="row mx-0 mb-5 justify-content-between">
        <div class="card-custom1 rounded-lg col-md-5 p-3 d-flex justify-content-between flex-column ">
            <h2>Груминг — это забота о здоровье и красоте</h2>
            <p class="mt-3 mb-auto">Сегодня груминг представляет собой стрижку шерсти (как гигиеническую, так и
                модельную), стрижку когтей, чистку ушей, глаз и зубов, бритье шерсти на лапах и еще ряд процедур. Все
                это необходимо не только для поддержания эстетичного вида питомца, но и для его здоровья.</p>
            <a class="btn btn-contact mt-3" href="/contacts">Связаться с нами</a>
        </div>
        <div class="col-md-3 p-0 hide-on-phone">
            <img src="/images/grooming_5.jpg" alt="Груминг питомца" class="img-fluid w-100 h-100 rounded-lg image-fill">
        </div>
        <div class="col-md-3 p-0 hide-on-phone">
            <img src="/images/grooming_10.jpg" alt="Груминг питомца"
                 class="img-fluid rounded-end-lg w-100 h-100 rounded-lg image-fill">
        </div>
    </section>

    <!-- Раздел 2: Мы готовы принять кошек и собак -->
    <section class="row mb-5 card-custom2 rounded-lg p-3">
        <div class="col-12">
            <h2 class="text-center">Мы готовы принять Всех!</h2>
        </div>
        <div class="row mt-3 position-relative justify-content-between">
            <div class="col-md-5">
                <div class="card rounded-lg h-100">
                    <div class="card-body">
                        <h3 class="card-title" style="color: #4aa8de;">Груминг для собак</h3>
                        <p class="card-text mt-2">Груминг нужен не только для участия в выставках, но и для поддержания
                            опрятного вида шерсти. Наши мастера с радостью помогут вашему питомцу выглядеть лучше и
                            позаботятся о его здоровье.</p>
                    </div>
                </div>
            </div>
            <div class="pet-il-grooming"></div>
            <div class="col-md-5">
                <div class="card rounded-lg h-100">
                    <div class="card-body">
                        <h3 class="card-title" style="color: #4aa8de;">Груминг для кошек</h3>
                        <p class="card-text mt-2">Груминг для кошек не менее важен, чем для собак. С семейством кошачьих
                            тяжелее договориться, но наш мастер Соня находит общий язык с этими милыми хищниками. Кошки
                            вычесаны, хозяева довольны!!!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'components/footer.php' ?>

</body>
</html>
