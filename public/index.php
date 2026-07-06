<?php

require_once __DIR__.'/../src/services.php';

// Title и Description для SEO по умолчанию
$title = 'Акабо. Сервис и ремонт вашего септика в срок и без ошибок';
$description = 'Выезжаем на ваш объект, проводим диагностику, выполняем ремонт или сервис локальных очистных сооружений в день выезда. Онлайн-заявка – выезд за 48 часов.';

// Для статических страниц
if (isset($page) && $page === 'blog') {
    $title = 'Блог компании Акабо: Полезная информация для самостоятельного обслуживания вашего септика';
    $description = 'Пошаговые инструкции по обслуживанию вашего очистного сооружения своими руками. Полезная информация для самостоятельного ремонта септика.';
}

// Для постов в блоге
if (isset($slug)) {
    $post = get_post_by_slug($slug);
    $title = $post['title'];
    $description = $post['description'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css" type="text/css" media="screen, projection">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=101925843', 'ym');

        ym(109774880, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/109774880" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="/" class="logo">
                <img class="logo-img" src="/assets/img/logo.svg" alt="Сервис и ремонт ЛОС">
                <div class="logo-text">Акабо</div>
            </a>
            
            <ul id="menu" class="menu">
                <li><a href="/#services">Услуги</a></li>
                <li><a href="/#price">Цены</a></li>
                <li><a href="/#portfolio">Портфолио</a></li>
                <li><a href="/#how-it-works">Как это работает</a></li>
                <li><a href="/#feedback">Отзывы</a></li>
                <li><a href="/#coupon">Промокод</a></li>
                <li><a href="/blog">Блог</a></li>
                <li><a href="/#contacts">Контакты</a></li>
            </ul>
            
            <a href="tel:+79673409376">
                <button type="button" id="call-us" class="btn primary-btn">
                    <img src="/assets/img/phone-1.svg">+7 (967) 340-93-76
                </button>
            </a>

            <div id="burger-btn" class="burger">
                <img id="burger-img" src="/assets/img/menu-closed.svg">
            </div>
        </nav>
    </header>

    <main>
        <?php if (isset($page) || isset($post)): ?>
            <?php
            if (isset($page)) include(is_page_exists('public/' . $page . '.php') ? $page . '.php' : '404.php');
            if (isset($post)) include(is_post_exists($slug) ? 'blog/' . $slug . '.php' : '404.php');
            ?>
        <?php else: ?>
        <section class="section hero">
            <div class="container">
                <a href="tel:+79673409376">
                    <button type="button" id="call-us-mobile" class="btn quaternary-btn">
                        <img src="/assets/img/phone-2.svg">+7 (967) 340-93-76
                    </button>
                </a>
                <h1>
                    Сервис и ремонт вашего септика<br><span>в срок и без ошибок</span>
                </h1>
                <p class="subheader">
                    Выезжаем на ваш объект, проводим диагностику, выполняем ремонт или сервис локальных очистных сооружений в день выезда. Онлайн-заявка – выезд за 48 часов.
                </p>
                <div class="buttons">
                    <a href="#contacts">
                        <button type="button" class="btn primary-btn">Создать заявку на выезд</button>
                    </a>
                    <a href="#how-it-works">
                        <button type="button" class="btn tertiary-btn">Как это работает?</button>
                    </a>
                </div>

                <div class="rates">
                    <div class="rate">1400+<br><span>Сервисов выполнено</span></div>
                    <div class="rate">8 лет<br><span>На рынке</span></div>
                    <div class="rate">97%<br><span>Довольных клиентов</span></div>
                    <div class="rate">48 ч<br><span>Среднее время выезда</span></div>
                </div>
            </div>
        </section>

        <section id="services" class="section services">
            <h2>
                Наши услуги
            </h2>
            <p class="subheader">
                Профессиональный ремонт и сервис локальных очистных сооружений любой конструкции
            </p>
            <div class="tiles">
                <div class="tile">
                    <img src="/assets/img/drop.svg">
                    <h3>Диагностика</h3>
                    <p class="comment">Тестирование всех компонентов вашего очистного сооружение и комплексная проверка функционирования.</p>
                </div>
                <div class="tile">
                    <img src="/assets/img/drop.svg">
                    <h3>Ремонт и апгрейд</h3>
                    <p class="comment">Замена неисправных компонентов и восстановление работы вашего септика в день выезда. Установка аварийной сигнализации. Компоненты всех популярных станций в наличии.</p>
                </div>
                <div class="tile">
                    <img src="/assets/img/drop.svg">
                    <h3>Сервис</h3>
                    <p class="comment">Выполнение регламентных операций по очистке вашего септика, сезонная консервация и ввод в эксплуатацию.</p>
                </div>
            </div>
        </section>

        <section id="price" class="section price">
            <h2>
                Цены на сервис
            </h2>
            <p class="subheader">
                Пожалуй, самое привлекательное предложение в Ленинградской области
            </p>
            <table id="table-wide">
                <thead class="thead">
                    <tr>
                        <th class="al tl">Размер станции</th><th>Количество человек</th><th>до 50 км от КАД</th><th>50–150 км</th><th class="ar tr">150–250 км</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td class="al">Стандарт</td><td>3–8</td><td><b>6&nbsp;500&nbsp;₽</b></td><td><b>7&nbsp;500&nbsp;₽</b></td><td class="ar"><b>9&nbsp;000&nbsp;₽</b></td>
                    </tr>
                    <tr class="even">
                        <td class="al">Стандарт</td><td>9–12</td><td><b>7&nbsp;000&nbsp;₽</b></td><td><b>8&nbsp;000&nbsp;₽</b></td><td class="ar"><b>9&nbsp;500&nbsp;₽</b></td>
                    </tr>
                    <tr class="odd">
                        <td class="al">Удлиненная</td><td>3–8</td><td><b>7&nbsp;500&nbsp;₽</b></td><td><b>8&nbsp;500&nbsp;₽</b></td><td class="ar"><b>10&nbsp;000&nbsp;₽</b></td>
                    </tr>
                    <tr class="even">
                        <td class="al">Удлиненная</td><td>9–12</td><td><b>8&nbsp;000&nbsp;₽</b></td><td><b>9&nbsp;000&nbsp;₽</b></td><td class="ar"><b>10&nbsp;500&nbsp;₽</b></td>
                    </tr>
                </tbody>
                <tfoot class="tfoot">
                    <tr>
                        <td class="al bl br" colspan=5>Вызов ассенизаторской машины оплачивается отдельно</td>
                    </tr>
                </tfoot>
            </table>
            <table id="table-narrow">
                <thead class="thead">
                    <tr>
                        <th class="al tl">Размер станции</th><th>Кол-во чел.</th><th class="ar tr">Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td class="al">Стандарт</td><td>3–8</td><td class="ar"><b>6&nbsp;500&nbsp;₽*</b></td>
                    </tr>
                    <tr class="even">
                        <td class="al">Стандарт</td><td>9–12</td><td class="ar"><b>7&nbsp;000&nbsp;₽*</b></td>
                    </tr>
                    <tr class="odd">
                        <td class="al">Удлиненная</td><td>3–8</td><td class="ar"><b>7&nbsp;500&nbsp;₽*</b></td>
                    </tr>
                    <tr class="even">
                        <td class="al">Удлиненная</td><td>9–12</td><td class="ar"><b>8&nbsp;000&nbsp;₽*</b></td>
                    </tr>
                </tbody>
                <tfoot class="tfoot">
                    <tr>
                        <td class="bl br" colspan=3>Вызов ассенизаторской машины оплачивается отдельно</td>
                    </tr>
                </tfoot>
            </table>
            <div class="notification">
                * в стоимость входит выезд мастера (до 50 км от КАД), далее +500 руб. за каждые дополнительные 50 км
            </div>
        </section>

        <section id="portfolio" class="section portfolio">
            <h2>
                Примеры наших работ
            </h2>
            <p class="subheader">
                Ремонт и обслуживание очистных сооружений на территории Ленинградской области
            </p>
            <div class="tiles">
                <div class="tile">
                    <div class="top portfolio-1">
                        <p class="label">Сервис</p>
                        <p class="title">Станция «Биодека-5», пос. Кирилловское</p>
                    </div>
                    <div class="bottom">
                        <p class="feature">Стоимость работ</p>
                        <p class="value">7&nbsp;500&nbsp;₽</p>
                    </div>
                </div>
                <div class="tile">
                    <div class="top portfolio-2">
                        <p class="label">Ремонт</p>
                        <p class="title">Станция «Астра-5», пос. Синявино</p>
                    </div>
                    <div class="bottom">
                        <p class="feature">Стоимость работ</p>
                        <p class="value">25&nbsp;000&nbsp;₽</p>
                    </div>
                </div>
                <div class="tile">
                    <div class="top portfolio-3">
                        <p class="label">Диагностика</p>
                        <p class="title">Станция «Аэробокс A230-5 Max 90», г. Тосно</p>
                    </div>
                    <div class="bottom">
                        <p class="feature">Стоимость работ</p>
                        <p class="value">4&nbsp;500&nbsp;₽</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-it-works" class="section how-it-works">
            <h2>
                Как это работает
            </h2>
            <p class="subheader">
                Простой и прозрачный процесс от заявки до результата
            </p>
            <div class="steps">
                <div class="step">
                    <img src="/assets/img/icon-1.svg">
                    <h3>Заявка онлайн или по телефону</h3>
                    <p class="comment">Создайте заявку в личном кабинете, укажите адрес и удобное время.</p>
                </div>
                <div class="step">
                    <img src="/assets/img/icon-2.svg">
                    <h3>Подтверждение</h3>
                    <p class="comment">Наш специалист свяжется с вами и подтвердит время визита.</p>
                </div>
                <div class="step">
                    <img src="/assets/img/icon-3.svg">
                    <h3>Выезд сервисного инженера</h3>
                    <p class="comment">Инженер приедет в согласованное время со всем оборудованием.</p>
                </div>
                <div class="step">
                    <img src="/assets/img/icon-4.svg">
                    <h3>Готовый результат</h3>
                    <p class="comment">Вы получаете рабочую систему в день приезда специалиста</p>
                </div>
            </div>

            <a href="#contacts">
                <button type="button" class="btn secondary-btn">Создать заявку сейчас</button>
            </a>
        </section>

        <section id="feedback" class="section feedback">
            <h2>
                Отзывы клиентов
            </h2>
            <p class="subheader">
                Что говорят о нас наши клиенты
            </p>
            <div class="tiles">
                <div class="tile">
                    <img src="/assets/img/rating-5.svg">
                    <p class="comment">
                        «Сотрудничаем более трёх лет. Мастера всегда приезжают вовремя. Нареканий по работе станций после обслуживания нет. В случае возникновения аварийной ситуации реагируют оперативно».
                    </p>
                    <p class="customer">
                        Алексей Субботин<br><span>Управляющий базой отдыха «Заозерье»</span>
                    </p>
                </div>
                <div class="tile">
                    <img src="/assets/img/rating-5.svg">
                    <p class="comment">
                        «Заказываю регулярное обслуживание септика у этих мастеров. Бережно относятся к участку и мои насаждениям. Дают полезные советы по эксплуатации станции. Рекомендую как надёжного партнера!».
                    </p>
                    <p class="customer">
                        Марина Разумовская<br><span>Владелец загородного дома в КП «Северная долина»</span>
                    </p>
                </div>
            </div>
        </section>

        <section class="section faq">
            <h2>
                Часто задаваемые вопросы
            </h2>
            <p class="subheader">
                Узнайте то, чем мы выгодно отличаемся от конкурентов
            </p>
            <div class="container">
                <div class="accordion">
                    <h3>
                        Как быстро приедет мастер?
                        <img src="/assets/img/accordion-closed.svg">
                    </h3>
                    <p class="comment">
                        Стандартный срок выезда — 24–48 часов с момента подтверждения заявки. По срочным заказам возможен выезд в день обращения.
                    </p>
                </div>
                <div class="accordion">
                    <h3>
                        Какая гарантия на работу?
                        <img src="/assets/img/accordion-closed.svg">
                    </h3>
                    <p class="comment">
                        Гарантия на работу и оборудование составляет один год. 
                    </p>
                </div>
                <div class="accordion">
                    <h3>
                        Работаете ли вы с базами отдыха?
                        <img src="/assets/img/accordion-closed.svg">
                    </h3>
                    <p class="comment">
                        Да, мы работаем с юридическими лицам. Есть возможность оплаты по безналичному расчету. 
                    </p>
                </div>
                <div class="accordion">
                    <h3>
                        Работаете ли за пределами Ленинградской области?
                        <img src="/assets/img/accordion-closed.svg">
                    </h3>
                    <p class="comment">
                        По договоренности возможен выезд в соседние регионы.
                    </p>
                </div>
            </div>
        </section>

        <section id="coupon" class="section coupon">
            <h2>
                Промокод дня
            </h2>
            <p class="subheader">
                Загляните сюда в день выезда мастера и получите дополнительную скидку 500&nbsp;₽
            </p>
            <div class="ticket">
                <img src="/assets/img/rating-3.svg">
                <span id="code">СЕПТИК24</span>
                <img src="/assets/img/rating-3.svg">
            </div>
        </section>
        <?php endif; ?>

        <!-- Модальное окно "Ваша заявка принята" -->
        <div class="overlay" id="simpleOverlay"></div>
        <div class="modal" id="simpleModal">
            <?php if (isset($_GET['result']) && $_GET['result'] == 'sucсess'): ?>
                <h2>Ваша заявка принята!</h2>
                <p>Мы свяжемся с вами в ближайшее время.</p>
            <?php else:?>
                <h2>Ошибка отправки</h2>
                <p>Пожалуста, свяжитесь с нами <a class="url" href="tel:+79673409376">+7 (967) 340-93-76</a></p>
            <?php endif; ?>
            <button class="btn primary-btn" onclick="closeModal()">Закрыть</button>
        </div>
    </main>

    <footer id="contacts" class="footer">
        <div class="container">
            <div class="contacts">
                <h2>Свяжитесь с нами</h2>
                <p class="subheader">
                    Готовы обсудить ваш проект и рассчитать стоимость выезда. Свяжитесь с нами удобным способом.
                </p>
                <div class="row">
                    <img src="/assets/img/icon-phone.svg"><p>Телефон<span>+7 (967) 340-93-76</span></p>
                </div>
                <div class="row">
                    <img src="/assets/img/icon-email.svg"><p>Email<span>zakaz@akabo.ru</span></p>
                </div>
                <div class="row">
                    <img src="/assets/img/icon-geo.svg"><p>Адрес<span>г. Санкт-Петербург</span></p>
                </div>
                <div class="row">
                    <img src="/assets/img/icon-clock.svg"><p>Режим работы<span>Пн–Пт: 8:00–20:00, Сб: 9:00–17:00</span></p>
                </div>
            </div>
            <div class="quick-form">
                <h2>Быстрая заявка</h2>
                <form action="/submit_form.php" method="POST" enctype="multipart/form-data">
                    <input class="input" name="customer" placeholder="Ваше имя" required>
                    <input class="input" name="phone" placeholder="Телефон" required>
                    <input class="input" name="email" placeholder="Email">
                    <textarea class="textarea" name="task" placeholder="Опишите задачу"></textarea>
                    <div>
                        <input class="checkbox" type="checkbox" required>
                        <span>Я согласен(-на) на обработку <a class="url" href="/upload/pdp_agreement.pdf">персональных данных</a></span>
                    </div>
                    <button type="submit" class="btn primary-btn">Отправить заявку</button>
                </form>
            </div>
        </div>
        <div class="bottombar">
            <p>© 2020-<?= date('Y') ?> Акабо. Ремонт и сервис септиков в ЛО.</p>
            <p>Сделано в студии <a class="url" href="https://ospreylab.ru">ospreylab</a></p>
        </div>
    </footer>

    <script src="assets/script.js"></script>
    <script>
        const burgerBtn = document.getElementById('burger-btn');
        const upperMenu = document.getElementById('menu');
        const burgerImg = document.getElementById('burger-img');

        const iconMenuClosed = '/assets/img/menu-closed.svg';
        const iconMenuOpened = '/assets/img/menu-opened.svg';

        let isMenuOpened = false;

        function toggleMenu() {
            if (isMenuOpened) {
                // Закрываем меню
                menu.classList.remove('active');
                burgerImg.src = iconMenuClosed;
                isMenuOpened = false;
            } else {
                // Открываем меню
                menu.classList.add('active');
                burgerImg.src = iconMenuOpened;
                isMenuOpened = true;
            }
        }

        // Обработчик клика по бургеру
        burgerBtn.addEventListener('click', toggleMenu);

        // Закрытие меню при клике на ссылку в мобильном меню
        const menuLinks = menu.querySelectorAll('a');
        
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (isMenuOpened) {
                    menu.classList.remove('active');
                    burgerImg.src = iconMenuClosed;
                    isMenuOpened = false;
                }
            });
        });

        // Закрытие меню при изменении размера окна на десктопный режим
        window.addEventListener('resize', function() {
            if (window.innerWidth > 576 && isMenuOpened) {
                menu.classList.remove('active');
                burgerImg.src = iconMenuClosed;
                isMenuOpened = false;
            }
        });

        // Открытие/закрытие аккордеона
        document.querySelectorAll('.accordion').forEach(accordion => {
            accordion.addEventListener('click', function() {
                this.classList.toggle('active');
                
                const img = this.querySelector('h3 img');
                
            });
        });

        // Обновление промокода
        document.getElementById('code').textContent = getCoupon();

        <?php if (isset($_GET['result'])): ?>
            openModal();
        <?php endif; ?>
    </script>
</body>
</html>