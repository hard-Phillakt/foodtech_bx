<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Робот-кобот");

?>

<?php if (1): ?>

    <div role="main" class="main">

        <div id="particles-bg"></div>

        <section
                class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0"
                data-plugin-parallax data-plugin-options="{'speed': 1.2}"
                data-image-src="<?= DEFAULT_TEMPLATE_PATH ?>/images/bg/bg-banner-cobot.png">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Foodtech  – это готовые решения для автоматизации и роботизации вашего
                            <strong>производства</strong></h1>
                        <span class="sub-title">Готовые решения foodtech 2021</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Готовые решения</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pb-1">

            <div class="row pt-5">
                <div class="col">

                    <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                   data-appear-animation-delay="200">
                                    Перед Вами стоит задача модернизации Ваших производственных линий? <br>
                                    Необходимо увеличить V производства с сохранением или сокращением рабочих мест? <br>
                                    Увеличить рентабельность и прибыль предприятия?
                                </p>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                                    data-appear-animation="maskUp">
                                    <span>НЕ СТОИТ ЛОМАТЬ СЕБЕ ГОЛОВУ «КАК?»</span>
                                </h2>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                   data-appear-animation-delay="300">
                                    Наша команда инженеров, технологов, IT – специалистов, проект – менеджеров <br>
                                    и сервисной службы помогут ответить на все вопросы
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 feature-box">
                        <div class="col-md-4 appear-animation text-center mb-5"
                             data-appear-animation="fadeInLeftShorter"
                             data-appear-animation-delay="800">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/prof-4.svg" alt="">
                            <h3 class="font-weight-bold text-4 mb-2 mt-2">Менеджеры проекта</h3>
                            <p>Предложит индивидуальное решение для Вашего производства с учетом его специфики</p>
                        </div>
                        <div class="col-md-4 appear-animation text-center mb-5"
                             data-appear-animation="fadeInLeftShorter"
                             data-appear-animation-delay="600">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/prof-5.svg" alt="">
                            <h3 class="font-weight-bold text-4 mb-2 mt-2">Инженеры</h3>
                            <p>Произведут установку, подключение оборудования без остановки производства</p>
                        </div>
                        <div class="col-md-4 appear-animation text-center mb-5"
                             data-appear-animation="fadeInRightShorter"
                             data-appear-animation-delay="800">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/prof-1.svg" alt="">
                            <h3 class="font-weight-bold text-4 mb-2 mt-2">Технологи</h3>
                            <p>Помогут с разработкой и презентацией концепт - проекта автоматизации производства</p>
                        </div>
                        <div class="col-md-4 offset-md-1 appear-animation text-center mb-5"
                             data-appear-animation="fadeInLeftShorter"
                             data-appear-animation-delay="600">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/prof-2.svg" alt="">
                            <h3 class="font-weight-bold text-4 mb-2 mt-2">IT – специалисты</h3>
                            <p>Произведут внедрение MESS решений и установку ПО</p>
                        </div>
                        <div class="col-md-4 offset-md-1 appear-animation text-center"
                             data-appear-animation="fadeInRightShorter"
                             data-appear-animation-delay="800">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/prof-3.svg" alt="">
                            <h3 class="font-weight-bold text-4 mb-2 mt-2">Сервисная служба</h3>
                            <p>Произведет запуск оборудования и обеспечит его бесперебойную работу</p>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <section
                class="video section section-text-light section-video section-overlay-opacity section-overlay-opacity-scale-8 pb-5"
                data-video-path="<?= DEFAULT_TEMPLATE_PATH ?>/video/MG10_banner" data-plugin-video-background
                data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}"
        >
            <div class="container">
                <div class="row justify-content-center overflow-hidden">
                    <div class="col-lg-9 text-center appear-animation" data-appear-animation="maskUp">
                        <h2 class="mb-3">Foodtech Group – интегратор №1 в России</h2>
                        <p class="mb-3">Мы с энтузиазмом возьмёмся за решение поставленных Вами задач!</p>
                    </div>
                </div>

                <div class="row mt-5-5">
                    <div class="col-md-5 offset-1">
                        <ul class="faq-items text-left list-ordened appear-animation" data-appear-animation="maskUp">
                            <li class="mb-3">
                                <span>1</span>
                                Выбор оборудования для <br>
                                достижения поставленных целей
                            </li>
                            <li class="mb-3">
                                <span>3</span>
                                Доставка оборудования <br>
                                на производственную площадку
                            </li>
                            <li class="mb-3">
                                <span>5</span>
                                Установка, подключение <br>
                                и наладка оборудования
                            </li>
                            <li class="mb-3">
                                <span>7</span>
                                Гарантийное и постгарантийное <br>
                                обслуживание
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 offset-1">
                        <ul class="faq-items text-left list-ordened appear-animation" data-appear-animation="maskUp">
                            <li class="mb-3">
                                <span>2</span>
                                Разработка и презентация <br>
                                концепт – проекта автоматизации производства
                            </li>
                            <li class="mb-3">
                                <span>4</span>
                                Интеграция оборудования <br>
                                в производственную линию
                            </li>
                            <li class="mb-3">
                                <span>6</span>
                                Внедрение MESS решений <br>
                                и установка ПО
                            </li>
                            <li class="mb-3">
                                <span>8</span>
                                Снабжение комплектующими <br>
                                и расходными материалами
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <section class="about-cobot mb-5"
                 style="background: url(<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/bg-hand-cobot.webp" ?>)">
            <div class="container mb-5-5">
                <div class="row py-4 mb-2">
                    <div class="col-md-7 offset-md-5 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="300">
                                РОБОТЫ - ЭТО НЕ БУДУЩЕЕ, РОБОТЫ - ЭТО СЕЙЧАС!
                            </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation"
                               data-appear-animation="maskUp" data-appear-animation-delay="500">
                                Многолетний труд учёных и инженеров позволили сделать огромный шаг в робототехнике!
                            </p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="700">
                            Сегодня мы рады представить Вашему вниманию уникального коллаборативного робота, способного
                            в
                            совершенстве
                            включиться в производственный процесс в тесной взаимосвязи с человеком.
                        </p>
                        <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="800">
                            Такая коллаборация человека и робота создаёт уникальный тандем способный решать множество
                            задач,
                            требующих кропотливого подхода и скорости выполнения работ с сохранением и даже увеличением
                            их
                            результативности
                        </p>

                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="900">

                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <a target="_blank" href="/equipment/kollaborativnyy-robot-ur/kollaborativnyj-robot-universal-robots/" class="btn btn-modern btn-primary mt-3">Подробнее о коботе</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section
                class="section section-text-light section-background section-center section-overlay section-overlay-dot"
                style="background-image: url(<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/listpage_pic_1.png" ?>);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-3">Мы поможем Вам с решением автоматизации процесса</h4>
                        <h2>ВАМ ДОСТАТОЧНО СВЯЗАТЬСЯ С НАМИ !</h2>
                        <button type="button" class="btn btn-rounded btn-primary mb-2">Напишите нам</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="capture-cobot pt-5">
            <div class="container">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation text-center"
                        data-appear-animation="maskUp">
                        <span>Решения в области оконечного <br> манипуляторного оборудования </span>
                    </h2>
                </div>
                <div class="overflow-hidden mb-5">
                    <p class="lead mb-0 appear-animation text-center" data-appear-animation="maskUp"
                       data-appear-animation-delay="300">
                        Передовые системы захвата и датчиков для промышленной автоматизации позволяют легко создавать
                        действительно коллаборативную среду, которая позволяет вашему персоналу работать бок о бок с
                        коллаборативными роботами при сборке, обработке поверхности, подъеме и перемещении объектов,
                        обслуживании или испытаниях станков.
                    </p>
                </div>

                <div class="row py-3">

                    <!-- 1 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/RG2.jpg"
                                 alt="Card Image">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Захватное устройство RG2</h4>
                                <p class="card-text">
                                    Готово к использованию сразу после распаковки, настраиваемое решение. Используйте
                                    один инструмент для различных сфер применения
                                    Легкость ввода в эксплуатацию, сведение к минимуму времени инженерно-технических
                                    работ
                                    Функционирование 24 часа в сутки 7 дней в неделю без необходимости найма новых
                                    сотрудников
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/RG6_0.jpg"
                                 alt="RG6_0">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Захватное устройство RG6</h4>
                                <p class="card-text">
                                    Готово к использованию сразу после распаковки, настраиваемое решение. Используйте
                                    один инструмент для различных сфер применения
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/RG2-FT.jpg"
                                 alt="RG2-FT">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Захватное устройство RG2-FT</h4>
                                <p class="card-text">
                                    Благодаря сенсорным возможностям, устройство быстрее обеспечивает более высокое
                                    качество
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/2FG7.png"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">2FG7</h4>
                                <p class="card-text">
                                    Созданное для работы в жестких производственных условиях и сферах применения,
                                    устройство способно выдерживать высокие нагрузки даже в ограниченных пространствах.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- 5 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/mg10.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">MG10</h4>
                                <p class="card-text">
                                    Благодаря настраиваемой функции обнаружения усилия и заготовки MG10 способно
                                    перемещать широкий спектр деталей различных размеров, форм и массы.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/Single_Gecko_Pad_Subpage_0.png"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">GECKO SINGLE PAD</h4>
                                <p class="card-text">
                                    Не требует кабелей или подачи воздуха от внешнего источника.
                                    Может захватывать даже перфорированные детали, такие как печатные платы, алюминиевые
                                    сетки или прокладки головок.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- 7 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/3FG15_Picture_Product_Subpage_0.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">3FG15</h4>
                                <p class="card-text">
                                    Быстрая и удобная переориентация для многочисленных процессов, высокая
                                    производительность
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 8 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/VG10 CROSS.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Захватное устройство VG10</h4>
                                <p class="card-text">
                                    Не требуется подача сжатого воздуха от внешнего источника, что сокращает расходы на
                                    техническое обслуживание
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/VG_mini_b_3_2.png"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">VGC10</h4>
                                <p class="card-text">
                                    Может быть сконфигурировано в любой форме, чтобы обеспечить соответствие различным
                                    частям
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- 10 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/vgp20_product_subpage.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">VGP20</h4>
                                <p class="card-text">
                                    Экономит до 90% на эксплуатации и техническом обслуживании по сравнению с
                                    традиционными пневмоустройствами.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 11 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/Product_Subpage_Picture_SG.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">SOFT GRIPPER</h4>
                                <p class="card-text">
                                    Легкая работа с широким диапазоном нестандартных форм и хрупких объектов.
                                    Откройте новые возможности автоматизации при работе с продуктами питания и
                                    напитками.
                                    Легкость ввода в эксплуатацию, сведение к минимуму времени инженерно-технических
                                    работ.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 12 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/OnRobot_eyes.png"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Система Eyes от OnRobot</h4>
                                <p class="card-text">
                                    Система искусственного зрения характеризуется легкостью ввода в эксплуатацию и
                                    простотой программирования.
                                    Гибкое (ре)конфигурирование с регулируемым запястьем и возможности наружной
                                    установки.
                                    Система искусственного зрения 2.5D с восприятием глубины для неструктурированных
                                    прикладных задач.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 13 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/Screwdriver_feeders.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">ONROBOT SCREWDRIVER</h4>
                                <p class="card-text">
                                    Точность регулировки динамического усилия затяжки и интеллектуальное обнаружение
                                    ошибок.
                                    Автоматизация различных процессов завинчивания и быстрота настройки и ввода в
                                    эксплуатацию сразу из коробки.
                                    Быстрота и легкость ввода в эксплуатацию с помощью единой системы OnRobot.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 14 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/Sander_subpage_image.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">ONROBOT SANDER</h4>
                                <p class="card-text">
                                    Комплексное решение по обработке поверхностей, легко программируется и быстро
                                    настраивается.
                                    Сенсорные возможности обеспечивают точную адаптацию к вариациям поверхности или
                                    нарушениям соосности.
                                    Автоматический электроинструмент обеспечивает соблюдение местных нормативных
                                    требований в отношении охраны труда и техники безопасности.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 15 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/HEX BOTTOM.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">6-ОСЕВОЙ ДАТЧИК HEX</h4>
                                <p class="card-text">
                                    Позволяют роботам выполнять задачи, требующие чувствительности и ловкости
                                    человеческих рук.
                                    Легкость ввода в эксплуатацию, снижение времени инженерно-технических работ.
                                    Благодаря сенсорным возможностям, устройство быстрее обеспечивает более высокое
                                    качество.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 16 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/QC10 CLOSED.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">QUICK CHANGER</h4>
                                <p class="card-text">
                                    Смена инструментов в течение 5 секунд, быстрое внедрение.
                                    Резервный блокировочный механизм обеспечивает смену инструментов без болтовых
                                    соединений.
                                    Встроено во все инструменты OnRobot.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 17 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/DUAL GRIP MOUNT.jpg"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">DUAL QUICK CHANGER</h4>
                                <p class="card-text">
                                    Период продуктивной эксплуатации значительно увеличивается, поскольку машина
                                    продолжает работать при захвате и перемещении деталей..
                                    Смена инструментов в течение 5 секунд.
                                    Обеспечение более продолжительного времени работы, в частности, для станков с ЧПУ.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 18 -->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="200">
                        <div class="card mb-4">
                            <img class="card-img-top"
                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/robot-hand-capture/Accessories_1200_0.png"
                                 alt="2FG7">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">АКСЕССУАРЫ</h4>
                                <p class="card-text">
                                    Получите обзор доступных аксессуаров для вашей сферы применения коллаборативной
                                    робототехники.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="parallax section section-text-light section-parallax section-center" data-plugin-parallax
                 data-plugin-options="{'speed': 1.5}"
                 data-image-src="<?= DEFAULT_TEMPLATE_PATH ?>/images/made-solutions/cobot_2.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h4 class="mb-3">Области применения коллоборативныйх роботов </h4>
                        <p class="mb-3">
                            Независимо от того, какой процесс необходимо оптимизировать и какой робот для этого
                            предпочтителен, решение One System Solution поможет быстро и без проблем выполнить
                            автоматизацию.
                        </p>
                        <button type="button" class="btn btn-rounded btn-primary mb-2">Напишите нам</button>
                    </div>
                </div>
            </div>
        </section>

        <?php if (0): ?>
            <section class="ex-of-captures pt-5">
                <div class="container">
                    <div class="overflow-hidden mb-3">
                        <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation text-center"
                            data-appear-animation="maskUp">
                            <span>Примеры Захватов</span>
                        </h2>
                    </div>
                    <div class="overflow-hidden mb-5">
                        <p class="lead mb-0 appear-animation text-center" data-appear-animation="maskUp"
                           data-appear-animation-delay="300">
                            Более 700 000 тысяч решений <br>
                            ( сборка, укладка, упаковка, паллетирование, обслуживание и многое другое )
                        </p>
                    </div>

                    <div class="row py-3 justify-content-center">
                        <?php if (1): ?>
                            <div class="col-sm-8 mb-5 col-md-4 mb-4 mb-md-0 appear-animation"
                                 data-appear-animation="fadeIn">
                                <article>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/robot-hand-6.webp" ?>"
                                                 class="img-fluid hover-effect-2 mb-3" alt=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mb-0">
                                                Захватные устройства <br> RG2 и RG6
                                            </h4>
                                            <p class="mb-2 lead text-4">
                                                Эти захваты могу применятся при обслуживании станков для обработки
                                                материалов на
                                                сборочных линиях.
                                                Готовы к работе с изделиями из пластиков и металлов стекла и картона.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-8 mb-5 col-md-4 mb-4 mb-md-0 appear-animation"
                                 data-appear-animation="fadeIn"
                                 data-appear-animation-delay="250">
                                <article>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/robot-hand-2.webp" ?>"
                                                 class="img-fluid hover-effect-2 mb-3" alt=""/>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mb-0">
                                                Захватные устройства <br> 3FG15 Gripper
                                            </h4>
                                            <p class="mb-2 lead text-4">
                                                Гибкое 3-х палецевое устройство с широким ходом.
                                                Подойдет для обслуживании станков и обработки материалов.
                                                Захват применим с изделиями из пластиков и металлов стекла и картона.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-8 mb-5 col-md-4 appear-animation" data-appear-animation="fadeIn"
                                 data-appear-animation-delay="500">
                                <article>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/robot-hand-3.webp" ?>"
                                                 class="img-fluid hover-effect-2 mb-3" alt=""/>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mb-0">
                                                Захватные устройства <br> Soft Gripper
                                            </h4>
                                            <p class="mb-2 lead text-4">
                                                Уникальное устройство с эластичной поверхностью захвата,
                                                сертифицированная
                                                для использования пищевой промышленности. Soft Gripper готов к работе с
                                                продуктами питания и напитками.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-8 mb-5 col-md-4 appear-animation" data-appear-animation="fadeIn"
                                 data-appear-animation-delay="500">
                                <article>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/robot-hand-4.webp" ?>"
                                                 class="img-fluid hover-effect-2 mb-3" alt=""/>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mb-0">SEO Optimization </h4>
                                            <p class="mb-2 lead text-4">
                                                Lorem ipsum dolor sit amet, coctetur adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-8 mb-5 col-md-4 appear-animation" data-appear-animation="fadeIn"
                                 data-appear-animation-delay="500">
                                <article>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/robot-hand-5.webp" ?>"
                                                 class="img-fluid hover-effect-2 mb-3" alt=""/>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mb-0">
                                                Захватные устройства <br> Get Single Pet
                                            </h4>
                                            <p class="mb-2 lead text-4">
                                                Компактное, легковестное устройство не требует подключения кабелей,
                                                подачи
                                                воздуха
                                                или специального программирования. Инновационное покрытие захвата
                                                обеспечивает
                                                надежно перемещение плоских, гладких или перефорированных объектов. А
                                                так же
                                                входит
                                                устройство захвата вакуумом.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-8 mb-5 col-md-4 appear-animation" data-appear-animation="fadeIn"
                                 data-appear-animation-delay="500">
                                <article>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= DEFAULT_TEMPLATE_PATH . "/images/made-solutions/robot-hand-1.webp" ?>"
                                                 class="img-fluid hover-effect-2 mb-3" alt=""/>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mb-0">Кронштейн <br> Quick Changer</h4>
                                            <p class="mb-2 lead text-4">
                                                Среди вспомогательных устройств кронштейн Quick Changer. Ускоряющий
                                                замену
                                                инструментов.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    </div>

<?php endif; ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>