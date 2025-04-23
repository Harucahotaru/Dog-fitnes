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
        <h1>Фитнес</h1>
    </div>

    <section class="row m-0 justify-content-between">
        <div class="col-md-5 p-3 d-flex justify-content-between flex-column card-custom1 rounded-lg mb-5">
            <h2>Счастье в движении</h2>
            <p>
                Физическая активность — это не просто про здоровье. Это про радость. Собаки, которые двигаются, играют и
                исследуют мир, ощущают себя живыми и нужными. Движение помогает им избавиться от стресса, скуки и
                накопившейся энергии.
            </p>
            <h2>Здоровье — на лапах</h2>
            <p>
                Сердце, суставы, вес — всё связано с физической нагрузкой.
                Регулярные прогулки и игры помогают предотвратить ожирение, поддерживают работу сердца, укрепляют мышцы
                и снижают риск хронических заболеваний. Особенно важно для собак среднего и старшего возраста.
            </p>
        </div>
        <div class="col-md-3 p-0 mb-5">
            <video class="d-block w-100 rounded-lg" controls autoplay loop muted
                   style="object-fit: cover; max-height: 450px;">
                <source src="/video/fitnes_1.MOV" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 p-0 mb-5">
            <img src="/images/grooming_1.jpg" alt="Собака в бассейне"
                 class="img-fluid w-100 h-100 rounded-lg image-fill">
        </div>
    </section>


    <section class="row m-0 justify-content-between">
        <div class="col-md-3 p-0 mb-5">
            <img src="/images/grooming_2.jpg" alt="Собака в бассейне"
                 class="img-fluid w-100 h-100 rounded-lg image-fill">
        </div>
        <div class="col-md-3 p-0 mb-5">
            <video class="d-block w-100 rounded-lg" controls autoplay loop muted
                   style="object-fit: cover; max-height: 450px;">
                <source src="/video/fitnes_2.MP4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-5 p-3 d-flex justify-content-between flex-column card-custom1 rounded-lg mb-5">
            <h2>Усталый пёс — счастливый пёс</h2>
            <p>
                Физическая усталость снижает тревожность и разрушительное поведение.
                Если ваш пёс портит вещи, лает без причины или не может усидеть на месте — возможно, он просто скучает.
                Активная прогулка утомит его гораздо лучше, чем окрик.
            </p>
            <h2>Связь с хозяином</h2>
            <p>
                Фитнес — это способ стать ближе.
                Общие занятия укрепляют доверие и взаимопонимание. Когда вы бегаете вместе, тренируетесь или играете в
                перетягивание каната — между вами рождается настоящая команда.
            </p>
        </div>
    </section>

    <section class="row m-0 justify-content-between">
        <div class="col-md-5 p-3 d-flex justify-content-between flex-column card-custom1 rounded-lg mb-5">
            <h2>Игра — тоже спорт</h2>
            <p>
                Фитнес не должен быть скучным.
                Аджилити, дог-фрисби, плавание, поиск игрушек, трекинг — всё это весело и эффективно. Даже обычные
                догонялки на заднем дворе приносят пользу!
            </p>
            <h2>Поддержи его здоровье уже сегодня</h2>
            <p>
                Неважно, сколько лет вашей собаке — двигаться ей нужно всегда.
                Начните с малого: на 10 минут дольше на прогулке, новая игрушка, игра дома. Это вложение в долгую и
                здоровую жизнь вашего друга.
            </p>
        </div>
        <div class="col-md-3 p-0 mb-5">
            <img src="/images/grooming_3.jpg" alt="Собака в бассейне"
                 class="img-fluid w-100 h-100 rounded-lg image-fill">
        </div>
        <div class="col-md-3 p-0 mb-5">
            <img src="/images/grooming_2.jpg" alt="Собака в бассейне"
                 class="img-fluid w-100 h-100 rounded-lg image-fill">
        </div>
    </section>

    <section class="row m-0 justify-content-between mt-5">
        <div class="col-lg-3 d-flex justify-content-end align-items-center">
            <a class="btn btn-contact" href="/contacts" style="height: fit-content;">Связаться с нами</a>
        </div>
        <h2 class="col-lg-9 d-flex align-items-center">
            Поддержи здоровье своего    питомца уже сегодня
        </h2>
    </section>
</main>

<?php require_once 'components/footer.php' ?>

</body>
</html>
