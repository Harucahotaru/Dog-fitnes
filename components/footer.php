<!-- Footer -->
<footer class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex align-items-center mb-4">
                    <img src="/images/logo.png" class="border-logo" alt="Логотип" width="100">
                    <div class="p-4 text-uppercase f-600 text-center">
                        Центр фитнеса и реабилитации животных
                    </div>
                </div>
                <p class="m-0 text-center">
                    © <?= (new DateTime())->format('Y') ?>.
                    Все права защищены.
                </p>
            </div>
            <div class="col-md-4">
                <h5 class="f-600">Карта сайта</h5>
                <ul class="list-unstyled">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/pool">Бассейн</a></li>
                    <li><a href="/grooming">Груминг</a></li>
                    <li><a href="/qa">Вопросы и ответы</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="f-600">Контакты</h5>
                <p class="mb-1">
                    <a href="tel:+7 (123) 456-78-90">+7 (123) 456-78-90</a>
                </p>
                <p>
                    <a href="info@example.com">info@example.com</a>
                </p>
                <h5 class="f-600">Социальные сети</h5>
                <p>
                    <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                </p>
            </div>
        </div>
    </div>
</footer>
