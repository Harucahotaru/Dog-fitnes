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
        <h1>Вопросы и ответы</h1>
    </div>

    <!-- Секция с вопросами и ответами -->
    <section class="row">
        <!-- Левая часть: Вопросы -->
        <div class="col-md-8">
            <div class="accordion card-custom1 rounded-lg h-100" id="faqAccordion">
                <!-- Вопрос 1 -->
                <div class="accordion-item rounded-lg">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Можно ли заниматься плаванием после травмы?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Когда у питомца случается травма (перелом, вывих, растяжение), мы все бежим к ветеринару. Врач лечит, если надо - оперирует. И вот приходит момент, когда доктор сделал всё, а собака или хромает, или не пользуется конечностью вовсе.</p>
                            <p>Здесь срабатывают 2 основных фактора:</p>
                            <p>Во-первых, в период лечения и восстановления идёт атрофия мышц.</p>
                            <p>Во-вторых, играет роль психосоматика. Это когда собака помнит о боли и не хочет опираться на конечность.</p>
                            <p>Бассейн помогает нарастить утраченный мышечный каркас, собака забывается и начинает пользоваться лапой.</p>
                        </div>
                    </div>
                </div>
                <!-- Вопрос 2 -->
                <div class="accordion-item rounded-lg">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Зачем бассейн здоровой собаке?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Зачем бассейн здоровой собаке, у которой и так достаточные физические нагрузки? Бассейн полезен следующим:</p>
                            <p>При плавании задействованы те группы мышц, которые не работают при нагрузке на суше.</p>
                            <p>Из-за разных факторов не всегда есть возможность полноценных прогулок, и на помощь приходит плавание.</p>
                            <p>Смена обстановки.</p>
                            <p>Выброс эмоций и разгрузка, необходимые для психологического благополучия собак, живущих в городе.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Правая часть: Блок "У вас остались вопросы?" -->
        <div class="col-md-4">
            <div class="card card-custom2 rounded-lg h-100 text-center p-3">
                <h2>У вас остались вопросы?</h2>
                <p class="mt-3">Напишите нам, и мы с радостью ответим на все ваши вопросы!</p>
                <a class="btn btn-contact mt-3" href="/contacts">Связаться с нами</a>
            </div>
        </div>
    </section>
</main>

<?php require_once 'components/footer.php' ?>

</body>
</html>
