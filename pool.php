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
    <title>Бассейн - Центр фитнеса и реабилитации животных</title>

    <?php require_once('components/assets.php') ?>
</head>
<body>

<?php require_once('components/header.php') ?>

<!-- Основное содержание -->
<main class="container my-5">
    <!-- Заголовок страницы -->
    <div class="page-header text-center mb-4">
        <h1>Зачем нужен бассейн для собак</h1>
    </div>

    <!-- Раздел 1: Коротко про преимущества -->
    <section class="row m-0 justify-content-between">
        <div class="col-md-5 p-3 d-flex justify-content-between flex-column card-custom1 rounded-lg mb-5">
            <h2>Избыточный вес негативно сказывается на здоровье питомца!</h2>
            <p class="mt-3">Это риск развития ряда заболеваний.</p>
            <p>Очевидно, что в воде ощущение веса теряется, а нагрузка увеличивается. При плавании начинают работать те
                группы мышц, которые в обычной жизни не задействованы, при этом суставы в воде не нагружаются, нагрузка
                идёт только на мышцы.</p>
            <p>Ваш питомец тренируется как бы в невесомости.</p>
            <a class="btn btn-contact mt-3" href="/contacts">Связаться с нами</a>
        </div>
        <div class="col-md-3 p-0 mb-5">
            <img src="/images/pool_1.jpg" alt="Собака в бассейне" class="img-fluid w-100 h-100 rounded-lg image-fill">
        </div>
        <div class="col-md-3 p-0 mb-5">
            <img src="/images/pool_4.jpg" alt="Собака в бассейне" class="img-fluid w-100 h-100 rounded-lg image-fill">
        </div>
    </section>

    <!-- Раздел 2: Преимущества в карточках -->
    <section class="row m-0 mb-5 card-custom2 rounded-lg p-3">
        <div class="col-12">
            <h2 class="text-center">Преимущества бассейна</h2>
        </div>
        <div class="row p-0 row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 position-relative">
            <div class="pet-il-pool-air"></div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">Фитнес вырабатывает у собаки выносливость</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">Укрепляет дыхательную, сердечно-сосудистую, мышечную и нервную системы</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">
                            Снижает уровень стресса, укрепляет слабые связки и распущенные пясти, разминает мышцы
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">Убирает иноходь и близкий постав конечностей</p>
                    </div>
                </div>
            </div>
            <div class="pet-il-pool"></div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">Снижает вес, предупреждает ложную беременность</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">Выплеск энергии и альтернатива долгим прогулкам</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">У собаки улучшается координация</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 rounded-lg">
                    <div class="card-body">
                        <p class="card-text">В целом это весело и интересно</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Раздел 3: Нужна помощь специалиста -->
    <section class="row m-0 mb-5 card-custom1 rounded-lg">
        <div class="col-md-6 p-3 d-flex justify-content-between flex-column">
            <h2>Нужна помощь специалиста</h2>
            <p class="mt-3 mb-auto">Для записи на занятия в бассейне обратитесь к нам через социальные сети или по номеру
                телефона: <a class="text-secondary" href="tel:+7 (925) 524-56-30">+7 (925) 524-56-30</a>.</p>
            <a class="btn btn-contact mt-3" href="/contacts">Связаться с нами</a>
        </div>
        <div class="col-md-6 p-0">
            <div class="card-custom2 rounded-lg">
                <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php foreach ($sliderPages1 as $slideNum => $slide): ?>
                            <button type="button" data-bs-target="#carouselIndicators2"
                                    data-bs-slide-to="<?= $slideNum ?>"
                                <?= isset($slide['active']) && $slide['active'] ? 'class="active" aria-current="true"' : '' ?>></button>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($sliderPages1 as $slideNum => $slide): ?>
                            <div class="carousel-item <?= isset($slide['active']) && $slide['active'] ? 'active' : '' ?>"
                                 data-bs-interval="10000">
                                <img src="<?= $slide['image'] ?>" class="d-block w-100 rounded-lg" alt="<?= $slide['alt'] ?>"
                                     style="max-height: 430px; <?= $slide['styleImg'] ?? '' ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Общее описание -->
    <section class="position-relative">
        <div class="block-goo-section">
            <div class="goo-block card-custom1 rounded-lg p-3 mb-5 d-flex flex-column justify-content-center"
                 style="padding-right: 50px !important;padding-left: 50px !important;height: 600px; clip-path: polygon(0 6%, 100% 0, 100% 87%, 2% 98%);">
                <h2 class="text-center">Подробно про преимущества</h2>
                <p class="mt-3">Появление щенка в доме - это буря эмоций и впечатлений. Но не стоит забывать, что вместе с этим
                    приходит большая ответственность. В первый год жизни собаки закладывается фундамент. Мы вкладываем силы в
                    воспитание и социализацию, а также в ее здоровье.</p>
                <p>Мы подбираем правильное питание, даем витамины и, конечно, большое значение имеет адекватная нагрузка. Очень
                    важно, чтобы щенок был активным, много гулял, изучал разные поверхности. И тут как раз вам на помощь придет
                    бассейн.</p>
                <p>Плавание - самый безопасный вид нагрузки в этом возрасте. В воде задействованы те группы мышц, которыми в
                    обычной жизни собака не пользуется. А вот воздействия на суставы нет.</p>
                <p>Также щенок получает новые тактильные ощущения и минимальный массажный эффект. Он привыкает к новой среде и
                    новым обстоятельствам, тем самым познавая новое.</p>
                <p>Вы можете начинать занятие в бассейне вместе с первыми прогулками, как отсидите положенный карантин. Щенка
                    намного легче приучить к воде, чем взрослую собаку.</p>
            </div>
        </div>
    </section>
</main>

<?php require_once 'components/footer.php' ?>

</body>
</html>
