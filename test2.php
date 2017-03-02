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
    <div class="wrapper">
        <div class="test-welcome">
            <div class="test-welcome-title">Второй тур</div>

            <div class="test-welcome-text" :class="!formActive ? 'active' : ''">
                <p>Это дисклеймер. Для продолжения подачи заявки пользователь должен подтвердить своё соответствие правилам конкурса, нажав на кнопку «Согласен». В случае несоответствия, пользователь нажимает кнопку «Уйти» и попадает на главную страницу.</p>

                <div class="test-welcome-buttons">
                    <a href="https://nenaprasno.ru/" class="button button-round button-gray-hollow">Уйти</a>
                    <button class="button button-round button-blue-hollow" @click.prevent.once="activateForm">Я согласен</button>
                </div>
            </div>
        </div>

        <div class="question-form" v-if="formActive">
            <div class="question-form-timer">
                <div class="question-form-timer-icon">
                    <?php include 'images/sand-clock.svg'; ?>
                </div>
                Осталось
                <div class="question-form-timer-val">
                    58 минут
                </div>
            </div>
            <form action="test2.php" method="post" @submit.prevent="submitForm" class="question-form-step" :class="(currentStep == 1) ? 'active' : ''" data-vv-scope="form-1">

                <div class="question-form-title-2">1 задача</div>

                <div class="question-form-group">
                    <div class="question-form-text-description">
                        Трём хирургам необходимо последовательно прооперировать в полевых условиях больного, страдающего заразным заболеванием. Сами хирурги тоже больны, причём все - разными болезнями. В распоряжении хирургов есть лишь две пары стерильных перчаток. Подскажите план операции, после которой ни хирурги, ни больной не заразятся друг от друга. (Помогать друг другу во время операций хирурги не должны. Оперировать одной рукой нельзя.)
                    </div>
                    <label for="task-1-diag" class="question-form-label question-form-label-small">Дифференциальный диагноз</label>
                    <textarea name="task-1-diag" id="task-1-diag" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите ваш опыт здесь"></textarea>
                </div>

                <div class="question-form-group">
                    <label for="task-1-tactics" class="question-form-label question-form-label-small">Ваша тактика</label>
                    <textarea name="task-1-tactics" id="task-1-tactics" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите вашу тактику лечения"></textarea>
                </div>

                <div class="question-form-title-2">2 задача</div>

                <div class="question-form-group">
                    <div class="question-form-text-description">
                        Трём хирургам необходимо последовательно прооперировать в полевых условиях больного, страдающего заразным заболеванием. Сами хирурги тоже больны, причём все - разными болезнями. В распоряжении хирургов есть лишь две пары стерильных перчаток. Подскажите план операции, после которой ни хирурги, ни больной не заразятся друг от друга. (Помогать друг другу во время операций хирурги не должны. Оперировать одной рукой нельзя.)
                    </div>
                    <label for="task-2-diag" class="question-form-label question-form-label-small">Дифференциальный диагноз</label>
                    <textarea name="task-2-diag" id="task-2-diag" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите ваш опыт здесь"></textarea>
                </div>

                <div class="question-form-group">
                    <label for="task-1-tactics" class="question-form-label question-form-label-small">Ваша тактика</label>
                    <textarea name="task-1-tactics" id="task-1-tactics" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите вашу тактику лечения"></textarea>
                </div>

                <div class="question-form-title-2">5 задача</div>

                <div class="question-form-group">
                    <div class="question-form-text-description">
                        <img src="images/tmp/task-placeholder.png" alt="">
                    </div>
                    <label for="task-5-diag" class="question-form-label question-form-label-small">Дифференциальный диагноз</label>
                    <textarea name="task-5-diag" id="task-5-diag" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите ваш опыт здесь"></textarea>
                </div>

                <div class="question-form-group">
                    <label for="task-5-tactics" class="question-form-label question-form-label-small">Ваша тактика</label>
                    <textarea name="task-5-tactics" id="task-5-tactics" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите вашу тактику лечения"></textarea>
                </div>

                <div class="question-form-step-buttons">
                    <button type="submit" class="button button-round button-blue">Отправить задачи</button>
                </div>
            </form>
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