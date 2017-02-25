<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=450">
    <title>Высшая школа онкологии</title>
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
            <div class="test-welcome-title">Заявка на первый тур</div>

            <div class="test-welcome-text" :class="!formActive ? 'active' : ''">
                <p>Это дисклеймер. Для продолжения подачи заявки пользователь должен подтвердить своё соответствие правилам конкурса, нажав на кнопку «Согласен». В случае несоответствия, пользователь нажимает кнопку «Уйти» и попадает на главную страницу.</p>

                <div class="test-welcome-buttons">
                    <a href="https://nenaprasno.ru/" class="button button-round button-gray-hollow">Уйти</a>
                    <button class="button button-round button-blue-hollow" @click.prevent.once="activateForm">Я согласен</button>
                </div>
            </div>
        </div>

        <form action="post.php" method="POST" class="question-form" @submit.prevent="submitForm">
            <transition name="fade">
                <div class="question-form-overlay" v-if="!formActive"></div>
            </transition>
            <div class="question-form-step" :class="(currentStep == 1) ? 'active' : ''">
                <div class="question-form-title">Шаг 1 – Основные сведения</div>

                <div class="question-form-group">
                    <div class="question-form-group-num">1</div>
                    <label for="form-field-fio" class="question-form-label">Как ваше полное имя?</label>
                    <input v-validate="'required'" :class="{'is-error': formErrors.has('fio') }" id="form-field-fio" name="fio" type="text" placeholder="ФИО" class="question-form-input">
                    <span v-show="formErrors.has('fio')" class="question-form-input-error">{{ formErrors.first('fio') }}</span>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">2</div>
                    <label for="form-field-birthdate" class="question-form-label">Дата рождения</label>
                    <input id="form-field-birthdate" name="birthdate" type="date" placeholder="ДД.ММ.ГГГГ" class="question-form-input js-date-picker">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">3</div>
                    <label class="question-form-label">Стадия обучения</label>
                    <div class="question-form-radio">
                        <input id="form-field-stage-student" name="student-stage" type="radio" value="student" checked>
                        <label for="form-field-stage-student">Студент 6 курса</label>
                    </div>
                    <div class="question-form-radio">
                        <input id="form-field-stage-intern" name="student-stage" type="radio" value="intern">
                        <label for="form-field-stage-intern">Интерн</label>
                    </div>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">4</div>
                    <label for="form-field-university" class="question-form-label">ВУЗ</label>
                    <input id="form-field-university" name="university" type="text" placeholder="Введите название ВУЗа" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">5</div>
                    <label for="form-field-faculty" class="question-form-label">Факультет</label>
                    <input id="form-field-faculty" name="faculty" type="text" placeholder="Название факультета" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">6</div>
                    <label for="form-field-city" class="question-form-label">Город</label>
                    <input id="form-field-city" name="city" type="text" placeholder="Укажите город проживания" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">7</div>
                    <label for="form-field-phone" class="question-form-label">Телефон</label>
                    <input id="form-field-phone" name="phone" type="text" placeholder="+7 (xxx) xxx-xx-xx" data-inputmask="'mask': '+7 (999) 999-99-99'" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">8</div>
                    <label for="form-field-social-page" class="question-form-label">Ссылка на страницу VK или FB</label>
                    <input id="form-field-social-page" name="social-page" type="text" placeholder="Вставьте ссылку" class="question-form-input">
                </div>

                <div class="question-form-step-buttons">
                    <button class="button button-round button-blue" @click.prevent="changeStep(2)">Далее к шагу №2</button>
                </div>
            </div>

            <div class="question-form-step" :class="(currentStep == 2) ? 'active' : ''">
                <div class="question-form-title">Шаг 2 – Успехи в учебе</div>

                <div class="question-form-group">
                    <div class="question-form-group-num">1</div>
                    <label for="form-field-average-score" class="question-form-label">Средний бал за весь период обучения</label>
                    <input v-validate="'required'" :class="{'is-error': formErrors.has('average-score') }" id="form-field-average-score" name="average-score" type="text" placeholder="от 1 до 5" class="question-form-input">
                    <span v-show="formErrors.has('average-score')" class="question-form-input-error">{{ formErrors.first('average-score') }}</span>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">2</div>
                    <label for="form-field-anatomy-score" class="question-form-label">Оценка по анатомии</label>
                    <input id="form-field-anatomy-score" name="anatomy-score" type="number" min="1" max="5" placeholder="от 1 до 5" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">3</div>
                    <label for="form-field-biochemistry-score" class="question-form-label">Оценка по биохимии</label>
                    <input id="form-field-biochemistry-score" name="biochemistry-score" type="number" min="1" max="5" placeholder="от 1 до 5" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">4</div>
                    <label for="form-field-pharma-score" class="question-form-label">Оценка по фармакологии</label>
                    <input id="form-field-pharma-score" name="pharma-score" type="number" min="1" max="5" placeholder="от 1 до 5" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">5</div>
                    <label for="form-field-pathophysiology-score" class="question-form-label">Оценка по патафизиологии</label>
                    <input id="form-field-pathophysiology-score" name="pathophysiology-score" type="number" min="1" max="5" placeholder="от 1 до 5" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">6</div>
                    <label for="form-field-commonwealth-score" class="question-form-label">Оценка по патанатомии</label>
                    <input id="form-field-commonwealth-score" name="commonwealth-score" type="number" min="1" max="5" placeholder="от 1 до 5" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">7</div>
                    <label for="form-field-english" class="question-form-label">Английский язык</label>
                    <div class="question-form-select">
                        <select name="english" id="form-field-english">
                            <option value="0">Beginner</option>
                            <option value="1">Pre-Intermediate</option>
                            <option value="2">Intermediate</option>
                            <option value="3">Upper-Intermediate</option>
                            <option value="4">Advanced</option>
                            <option value="5">Proficiency</option>
                        </select>
                    </div>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">8</div>
                    <label for="form-field-awards" class="question-form-label">Перечислите благодарности, грамоты и награды за успешное обучение</label>
                    <textarea name="awards" id="form-field-awards" class="question-form-textarea" cols="30" rows="10" placeholder="Укажите в порядке значимости"></textarea>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">9</div>
                    <label class="question-form-label">Волонтерский опыт в сфере медицины</label>
                    <div class="question-form-checkbox">
                        <input id="form-field-volunteer-1" type="checkbox" name="volunteer-1" value="0">
                        <label for="form-field-volunteer-1">Рак желудка</label>
                    </div>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">10</div>
                    <label for="form-field-volunteer-exp" class="question-form-label">Опишите свой волонтерский опыт</label>
                    <textarea name="volunteer-exp" id="form-field-volunteer-exp" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите ваш опыт работы здесь"></textarea>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">11</div>
                    <label for="form-field-publications" class="question-form-label">Перечислите публикации, активность в СНО (если есть)</label>
                    <textarea name="publications" id="form-field-publications" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите ваш опыт работы здесь"></textarea>
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">12</div>
                    <label for="form-field-personal-qualities" class="question-form-label">Расскажите о своих лучших качествах и достоинствах</label>
                    <textarea name="personal-qualities" id="form-field-personal-qualities" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите ваш опыт работы здесь"></textarea>
                </div>

                <div class="question-form-step-buttons">
                    <button class="button button-round button-gray-hollow" @click.prevent="stepBack">Назад</button>
                    <button class="button button-round button-blue" @click.prevent="changeStep(3)">Далее к шагу №3</button>
                </div>
            </div>

            <div class="question-form-step" :class="(currentStep == 3) ? 'active' : ''">
                <div class="question-form-title">Шаг 3 – Регистрация</div>

                <div class="question-form-group">
                    <div class="question-form-group-num">1</div>
                    <label for="form-field-email" class="question-form-label">Электронная почта <sup>*</sup></label>
                    <input id="form-field-email" name="email" type="email" placeholder="email@domain" class="question-form-input">
                </div>

                <div class="question-form-group">
                    <div class="question-form-group-num">2</div>
                    <label class="question-form-label">Пароль <sup>*</sup></label>

                    <div class="question-form-subgroup">
                        <label for="form-field-password-1" class="question-form-sublabel">Придумайте пароль</label>
                        <input id="form-field-password-1" name="password-1" type="password" placeholder="Введите пароль" class="question-form-input">
                    </div>

                    <div class="question-form-subgroup">
                        <label for="form-field-password-2" class="question-form-sublabel">Подтвердите пароль</label>
                        <input id="form-field-password-2" name="password-2" type="password" placeholder="Введите пароль ещё раз" class="question-form-input">
                    </div>
                </div>

                <div class="question-form-step-buttons">
                    <button class="button button-round button-gray-hollow" @click.prevent="stepBack">Назад</button>
                    <button class="button button-round button-blue">Отправить заявку</button>
                </div>
            </div>
        </form>
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