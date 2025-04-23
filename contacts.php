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
                <p>
                    <i class="fas fa-phone-alt"></i>
                    Телефон: <a class="text-secondary" href="tel:+7 (925) 524-46-30">+7 (925) 524-46-30</a>
                </p>
<!--                <p><i class="fas fa-envelope"></i>-->
<!--                    Email: <a class="text-secondary" href="info@example.com">info@example.com</a>-->
<!--                </p>-->
                <p>
                    Мы работаем с 10.00 до 20.00
                </p>
            </div>
            <div class="social-icons mt-3">
                <a href="https://www.instagram.com/fitnesdljasobak/?hl=ru" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://vk.com/fitnesdljasobak" target="_blank"><i class="fab fa-vk fa-2x"></i></a>
            </div>
        </div>
    </section>

    <!-- Карта -->
    <section class="card-custom2 rounded-lg">
        <div class="row">
            <div class="col-lg-12" id="map"></div>
<!--            <div class="col-lg-6" style="overflow:hidden;position:relative;">-->
<!--                <iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"-->
<!--                        src="https://yandex.ru/maps-reviews-widget/226327670406?comments"></iframe>-->
<!--                <a href="https://yandex.ru/maps/org/usadba_izmaylovo/226327670406/" target="_blank"-->
<!--                   style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0">Усадьба-->
<!--                    Измайлово на карте Москвы — Яндекс.Карты</a>-->
<!--            </div>-->
        </div>
    </section>
</main>

<?php require_once 'components/footer.php' ?>

<!-- Яндекс.Карты API -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [55.726446, 37.480543], // Координаты центра (Москва, пример)
            zoom: 16
        });
        var myPlacemark = new ymaps.Placemark([55.726446, 37.480543], {
            hintContent: 'Центр фитнеса и реабилитации животных',
            balloonContent: '<div style="padding: 5px;">' +
                '<div style="font-weight: 600; padding-bottom: 5px">Центр фитнеса и реабилитации животных</div>' +
                '<div style="">Давыдковская ул., 3 стр2, Москва</div>' +
                '<div style="color: var(--text-color);">C 10.00 до 20.00</div>' +
                '</div>'
        }, {
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/images/logo.png',
            // Размеры метки.
            iconImageSize: [45, 45],
        });
        // ymaps.findOrganization('1124715036').then(
        //     function (orgGeoObject) {
        //         myMap.geoObjects.add(orgGeoObject);
        //         orgGeoObject.balloon.open();
        //     },
        //     function (err) {
        //         // обработка ошибок
        //     }
        // );
        myMap.geoObjects.add(myPlacemark);
    }
</script>
<script>
<style>
    html, body, #map {
        width: 100%; height: 100%; padding: 0; margin: 0;
    }
</style>
</script>
</body>
</html>
