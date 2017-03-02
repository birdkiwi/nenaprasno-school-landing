<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=450">
    <title>Высшая школа онкологии</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="build/style.min.css">
</head>
<body>
<header class="header">
    <div class="wrapper">
        <div class="header-logo">
            <a href="index.php">Высшая школа онкологии</a>
        </div>
        <div class="header-right">
            <div class="header-links">
                <a href="#">Вход</a> / <a href="#">Регистрация</a>
            </div>
            <div class="header-socials">
                <a href="#" target="_blank" title="Вконтакте">
                    <?php include "images/icons/icon-social-vk.svg"; ?>
                </a>
                <a href="#" target="_blank" title="Facebook">
                    <?php include "images/icons/icon-social-facebook.svg"; ?>
                </a>
                <a href="#" target="_blank" title="Twitter">
                    <?php include "images/icons/icon-social-twitter.svg"; ?>
                </a>
            </div>
        </div>
    </div>
</header>
<main id="vue-app" class="main-content">
    <div class="section-gray section-padding-top">
        <div class="wrapper">
            <section class="slider">
                <div class="slider-text">
                    <div class="slider-title">
                        Отбор в высшую <br> школу онкологии
                    </div>
                    <div class="slider-subtitle">
                        Победители получают обучение в ординатуре
                    </div>
                    <div class="slider-buttons">
                        <a href="test.php" class="button button-blue button-round">Принять участие</a>
                    </div>
                </div>
            </section>

            <section class="winners-notice">
                <div class="winners-notice-left">
                    <div class="winners-notice-title">
                        Победителям конкурса
                    </div>
                    <div class="winners-notice-subtitle">
                        Победители конкурса начинают обучение <br>
                        в ординатуре с 1 сентября 2017 года
                    </div>
                </div>
                <div class="winners-notice-desc-wrap">
                    <div class="winners-notice-desc">
                        <div class="winners-notice-desc-item">
                            <div class="winners-notice-desc-item-icon">
                                <?php include "images/icons/icon-classroom.svg" ;?>
                            </div>
                            <div class="winners-notice-desc-item-content">
                                Помимо обучения ординаторы получают от Фонда профилактики рака:

                                <ul class="ul-dash">
                                    <li>
                                        Новейшую международную литературу и учебные материалы по онкологии
                                    </li>

                                    <li>
                                        Принимают участие в журнальных клубах и мастер-классах с ведущими российскими и зарубежными специалистами
                                    </li>

                                    <li>
                                        Проходят стажировки у лучших российских и зарубежных специалистов
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="winners-notice-desc-item">
                            <div class="winners-notice-desc-item-icon">
                                <?php include "images/icons/icon-english-receptionist.svg" ;?>
                            </div>
                            <div class="winners-notice-desc-item-content">
                                Изучают английский язык и проходят множество дополнительных курсов, таких как: основы построения проектов, искусство ведения переговоров и многое другое
                            </div>
                        </div>
                        <div class="winners-notice-desc-item">
                            <div class="winners-notice-desc-item-icon">
                                <?php include "images/icons/icon-doctor.svg" ;?>
                            </div>
                            <div class="winners-notice-desc-item-content">
                                После успешного окончания ординатуры, победителям
                                конкурса гарантировано трудоустройство по специальности
                                или поступление в аспирантуру
                            </div>
                        </div>
                    </div>

                    <div class="winners-notice-note">
                        Фонд оставляет за собой право исключить победителей программы при несоответствии требованиям, предъявляемым к резидентам ВШО, либо по другим причинам, указанным в договор
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="section-white section-padding-top section-padding-bottom">
        <div class="wrapper">
            <div class="educators">
                <div class="educators-title">
                    Педагоги
                </div>
                <div class="educators-subtitle">
                    В ходе конгрессов и форумов Вы будете непосредственно общаться с крупнейшими специалистами со всего мира.
                </div>

                <div class="educators-grid">
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/alexey-barchuk.jpg" alt="Алексей Барчук">
                        </div>
                        <div class="educators-grid-item-name">
                            Алексей Барчук
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/vladimir-semiglazov.jpg" alt="Владимир Семиглазов">
                        </div>
                        <div class="educators-grid-item-name">
                            Владимир Семиглазов
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/alexandr-sherbakov.jpg" alt="Александр Щербаков">
                        </div>
                        <div class="educators-grid-item-name">
                            Александр Щербаков
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/evgeny-imyanitov.jpg" alt="Евгений Имянитов">
                        </div>
                        <div class="educators-grid-item-name">
                            Евгений Имянитов
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/vadim-gushin.jpg" alt="Вадим Гущин">
                        </div>
                        <div class="educators-grid-item-name">
                            Вадим Гущин
                        </div>
                    </div>

                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/evgeny-levchenko.jpg" alt="Евгений Левченко	">
                        </div>
                        <div class="educators-grid-item-name">
                            Евгений Левченко
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/alexey-karachun.jpg" alt="Алексей Карачун	">
                        </div>
                        <div class="educators-grid-item-name">
                            Алексей Карачун
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/igor-berlev.jpg" alt="Игорь Берлев">
                        </div>
                        <div class="educators-grid-item-name">
                            Игорь Берлев
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/tatyana-semiglazova.jpg" alt="Татьяна Семиглазова">
                        </div>
                        <div class="educators-grid-item-name">
                            Татьяна Семиглазова
                        </div>
                    </div>
                    <div class="educators-grid-item">
                        <div class="educators-grid-item-photo">
                            <img src="images/staff/ilya-chernikovsky.jpg" alt="Илья Черниковский">
                        </div>
                        <div class="educators-grid-item-name">
                            Илья Черниковский
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray section-padding-top section-padding-bottom">
        <div class="wrapper">
            <div class="competition-conditions">
                <div class="competition-conditions-title">
                    Условия конкурса
                </div>

                <div class="competition-conditions-list">
                    <div class="competition-conditions-list-item">
                        <div class="competition-conditions-list-item-icon">
                            1 <br>
                            <small>тур</small>
                        </div>
                        <div class="competition-conditions-list-item-title">
                            Подача заявки и заполнение анкеты
                        </div>

                        <ul class="ul-dot">
                            <li>
                                Участникам следует подать заявку на участие в Конкурсе на этой странице
                            </li>
                            <li>
                                Все предоставленные данные должны быть достоверными и должны подтверждаться соответствующими документами. В противном случае участник отстраняется от участия в конкурсе
                            </li>
                        </ul>

                        <strong>Внимание!</strong>
                        <p>Документальная проверка достоверности предоставленных данных осуществляется на очном этапе!</p>

                        <ul class="ul-dot">
                            <li>
                                Приём заявок оканчивается 15 апреля
                            </li>
                            <li>
                                После анализа анкет отбираются участники второго тура
                            </li>
                        </ul>
                    </div>

                    <div class="competition-conditions-list-item">
                        <div class="competition-conditions-list-item-icon">
                            2 <br>
                            <small>тур</small>
                        </div>
                        <div class="competition-conditions-list-item-title">
                            Написание статьи на заданную тему
                        </div>

                        <ul class="ul-dot">
                            <li>
                                Не позднее 18 апреля 2016 года участники получат тему для написания короткой статьи и правила ее оформления;
                            </li>
                            <li>
                                Не позднее 29 апреля 2016 года статьи должны быть сданы, в противном случае участник отстраняется от участия в Конкурсе;
                            </li>
                            <li>
                                Статьи оцениваются конкурсной комиссией в составе сотрудников Фонда профилактики рака и НИИ Онкологии им. Н.Н. Петрова по следующим критериям: уникальность текста, полнота раскрытия темы, грамотность, работа с источниками, оформление;
                            </li>
                            <li>
                                Авторы 10 лучших статей проходят в третий тур конкурса.
                            </li>
                        </ul>
                    </div>

                    <div class="competition-conditions-list-item">
                        <div class="competition-conditions-list-item-icon">
                            3 <br>
                            <small>тур</small>
                        </div>
                        <div class="competition-conditions-list-item-title">
                            Очное собеседование в НИИ Онкологии
                        </div>

                        <p>
                            Проведение очного собеседования с директором НИИ Онкологии им. Н.Н.Петрова, представителями Фонда профилактики рака и представителями ООО «ППФ Страхование жизни»:
                        </p>

                        <ul class="ul-dot">
                            <li>
                                Субъективная оценка умения держать речь, вести беседу;
                            </li>
                            <li>
                                Оценка силы и характера мотивации к работе онкологом;
                            </li>
                            <li>
                                Выступление перед пациентами на тему «Почему я хочу стать онкологом?»
                                и пациентская оценка;
                            </li>
                            <li>
                                Экзамен по онкологии.
                            </li>
                        </ul>
                    </div>

                    <div class="competition-conditions-list-item competition-conditions-list-item-last">
                        <div class="competition-conditions-list-item-icon">
                            <img src="images/icons/icon-award.png" alt="">
                        </div>
                        <div class="competition-conditions-list-item-title">
                            По итогам третьего тура будут выбраны 9 победителей
                        </div>

                        <p>
                            Победители получат возможность бесплатно обучаться в ординатуре
                            НИИ Онкологии им. Н.Н. Петрова и станут участниками "Высшей школы онкологии" Фонда профилактики рака.
                        </p>

                        <div class="competition-conditions-list-buttons">
                            <a href="#" class="button button-blue button-round">Принять участие</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="partners">
                <div class="partners-title">
                    Партнеры
                </div>

                <div class="partners-grid-wrap">
                    <div class="partners-grid">
                        <div class="partners-grid-item">
                            <a href="#">
                                <img src="images/partners/partner-1.png" alt="Страхование жизни">
                            </a>
                        </div>
                        <div class="partners-grid-item">
                            <a href="#">
                                <img src="images/partners/partner-2.png" alt="Biocad">
                            </a>
                        </div>
                        <div class="partners-grid-item">
                            <a href="#">
                                <img src="images/partners/partner-3.png" alt="Ирвин 2">
                            </a>
                        </div>
                        <div class="partners-grid-item">
                            <a href="#">
                                <img src="images/partners/partner-4.png" alt="Отели и хостел Друзья">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="wrapper">
        &copy; Живу не напрасно, 2017
    </div>
</footer>
<script src="build/scripts.min.js"></script>
</body>
</html>