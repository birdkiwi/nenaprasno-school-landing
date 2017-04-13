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
<?php include "templates.php"; ?>
<div id="vue-app">
    <?php include "login-modal.php"; ?>
    <?php include "header.php"; ?>
    <main class="main-content">
        <div class="wrapper">
            <div class="test-welcome" data-remaining="3600">
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
                <div class="question-form-timer" :class="formActive ? 'active' : 'inactive'">
                    <div class="question-form-timer-icon" :class="timer > 0 ? 'is-rotating' : ''">
                        <?php include 'images/sand-clock.svg'; ?>
                    </div>
                    <div v-if="timer > 0">
                        Осталось
                        <div class="question-form-timer-val">
                            <span v-if="timer > 60">
                                {{ Math.floor(timer/60) }} мин.
                            </span>
                            <span v-else>
                                {{ timer }} сек.
                            </span>
                        </div>
                    </div>
                    <div v-else>
                        <div class="question-form-timer-val">
                            <small>
                                время вышло
                            </small>
                        </div>
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
    <?php include "footer.php"; ?>
</div>
<script src="build/scripts.min.js"></script>
</body>
</html>