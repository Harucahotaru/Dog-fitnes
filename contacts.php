<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты - Центр фитнеса и реабилитации животных</title>
    <?php require_once('components/assets.php') ?>
</head>
<body>

<?php require_once('components/header.php') ?>

<!-- Основное содержание -->
<main class="container my-5">
    <!-- Заголовок страницы -->
    <div class="page-header text-center mb-4">
        <h1>Контакты</h1>
    </div>

    <!-- Контактная информация -->
    <section class="card-custom1 rounded-lg p-3 mb-5">
        <div class="text-center">
            <h2>Свяжитесь с нами</h2>
            <div class="mt-3">
                <p><i class="fas fa-phone-alt"></i>
                    Телефон: <a class="text-secondary" href="tel:+7 (123) 456-78-90">+7 (123) 456-78-90</a>
                </p>
                <p><i class="fas fa-envelope"></i>
                    Email: <a class="text-secondary" href="info@example.com">info@example.com</a>
                </p>
            </div>
            <div class="social-icons mt-3">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
    </section>

    <!-- Карта -->
    <section class="card-custom2 rounded-lg">
        <div id="map" style="width: 100%; height: 400px;"></div>
    </section>
</main>

<?php require_once 'components/footer.php' ?>

<!-- Яндекс.Карты API -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [55.753994, 37.622093], // Координаты центра (Москва, пример)
            zoom: 15
        });
        var myPlacemark = new ymaps.Placemark([55.753994, 37.622093], {
            hintContent: 'Центр фитнеса и реабилитации животных',
            balloonContent: 'Бассейн для собак'
        });
        myMap.geoObjects.add(myPlacemark);
    }
</script>
</body>
</html>
