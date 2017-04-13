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

            <form action="test.php" method="post" @submit.prevent="submitForm" class="question-form">
                <transition name="fade">
                    <div class="question-form-overlay" v-if="!formActive"></div>
                </transition>
                <div @submit.prevent class="question-form-step" :class="(currentStep == 1) ? 'active' : ''">
                    <div class="question-form-title">Шаг 1 – Основные сведения</div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">1</div>
                        <label for="form-field-fio" class="question-form-label">Как ваше полное имя? <sup class="question-form-required">*</sup></label>
                        <input
                                v-validate="'required'"
                                :class="{'is-error': formErrors.has('form-1.fio') }"
                                id="form-field-fio"
                                name="fio"
                                type="text"
                                placeholder="ФИО"
                                class="question-form-input"
                                data-vv-as="ФИО"
                                data-vv-scope="form-1">
                        <span v-show="formErrors.has('form-1.fio')" class="question-form-input-error">
                            {{ formErrors.first('form-1.fio') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">2</div>
                        <label class="question-form-label">
                            Дата рождения <sup class="question-form-required">*</sup>
                        </label>

                        <div class="question-form-birthdate">
                            <div class="question-form-birthdate-col">
                                <div class="question-form-select">
                                    <select name="birthdate-day">
                                        <option v-for="n in daysInMonth" :value="n">{{ n }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="question-form-birthdate-col">
                                <div class="question-form-select">
                                    <select name="birthdate-month" v-model="birthdayMonth">
                                        <option v-for="(month, n) in months" :value="n+1">{{ month }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="question-form-birthdate-col">
                                <div class="question-form-select">
                                    <select name="birthdate-year" v-model="birthdayYear">
                                        <option v-for="(year, n) in years" :value="n+1">{{ year }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">3</div>
                        <label class="question-form-label">
                            Стадия обучения <sup class="question-form-required">*</sup>
                        </label>
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
                        <label for="form-field-university" class="question-form-label">
                            ВУЗ <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required'"
                                :class="{'is-error': formErrors.has('form-1.university') }"
                                id="form-field-university"
                                name="university"
                                type="text"
                                placeholder="Введите название ВУЗа"
                                class="question-form-input"
                                data-vv-as="ВУЗ"
                                data-vv-scope="form-1">
                        <span v-show="formErrors.has('form-1.university')" class="question-form-input-error">
                            {{ formErrors.first('form-1.university') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">5</div>
                        <label for="form-field-faculty" class="question-form-label">
                            Факультет <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required'"
                                :class="{'is-error': formErrors.has('form-1.faculty') }"
                                id="form-field-faculty"
                                name="faculty"
                                type="text"
                                placeholder="Название факультета"
                                class="question-form-input"
                                data-vv-as="Факультет"
                                data-vv-scope="form-1">
                        <span v-show="formErrors.has('form-1.faculty')" class="question-form-input-error">
                            {{ formErrors.first('form-1.faculty') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">6</div>
                        <label for="form-field-city" class="question-form-label">
                            Город
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required'"
                                :class="{'is-error': formErrors.has('form-1.city') }"
                                id="form-field-city"
                                name="city"
                                type="text"
                                placeholder="Укажите город проживания"
                                class="question-form-input"
                                data-vv-as="Город"
                                data-vv-scope="form-1">
                        <span v-show="formErrors.has('form-1.city')" class="question-form-input-error">
                            {{ formErrors.first('form-1.city') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">7</div>
                        <label for="form-field-phone" class="question-form-label">
                            Телефон
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required'"
                                :class="{'is-error': formErrors.has('form-1.phone') }"
                                id="form-field-phone"
                                name="phone"
                                type="text"
                                placeholder="+7 (xxx) xxx-xx-xx"
                                class="question-form-input"
                                data-vv-as="Телефон"
                                data-vv-scope="form-1"
                                data-inputmask="'mask': '+9 (999) 999-99-99'">
                        <span v-show="formErrors.has('form-1.phone')" class="question-form-input-error">
                            {{ formErrors.first('form-1.phone') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">8</div>
                        <label for="form-field-social-page" class="question-form-label">
                            Ссылка на страницу VK или FB
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required'"
                                :class="{'is-error': formErrors.has('form-1.social-page') }"
                                id="form-field-social-page"
                                name="social-page"
                                type="text"
                                placeholder="Вставьте ссылку"
                                class="question-form-input"
                                data-vv-as="Ссылка"
                                data-vv-scope="form-1">
                        <span v-show="formErrors.has('form-1.social-page')" class="question-form-input-error">
                            {{ formErrors.first('form-1.social-page') }}
                        </span>
                    </div>

                    <div class="question-form-step-buttons">
                        <button class="button button-round button-blue" @click.prevent="changeStep(2)">Далее к шагу №2</button>
                    </div>
                </div>

                <div class="question-form-step" :class="(currentStep == 2) ? 'active' : ''">
                    <div class="question-form-title">Шаг 2 – Успехи в учебе</div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">1</div>
                        <label for="form-field-average-score" class="question-form-label">
                            Средний бал за весь период обучения
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required|decimal|between:1,5'"
                                :class="{'is-error': formErrors.has('form-2.average-score') }"
                                id="form-field-average-score"
                                name="average-score"
                                type="number"
                                placeholder="от 1 до 5"
                                class="question-form-input"
                                data-vv-as="Средний бал за весь период обучения"
                                data-vv-scope="form-2">
                        <span v-show="formErrors.has('form-2.average-score')" class="question-form-input-error">
                            {{ formErrors.first('form-2.average-score') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">2</div>
                        <label for="form-field-anatomy-score" class="question-form-label">
                            Оценка по анатомии
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required|decimal|between:1,5'"
                                :class="{'is-error': formErrors.has('form-2.anatomy-score') }"
                                id="form-field-anatomy-score"
                                name="anatomy-score"
                                type="number"
                                placeholder="от 1 до 5"
                                class="question-form-input"
                                data-vv-as="Оценка по анатомии"
                                data-vv-scope="form-2">
                        <span v-show="formErrors.has('form-2.anatomy-score')" class="question-form-input-error">
                            {{ formErrors.first('form-2.anatomy-score') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">3</div>
                        <label for="form-field-biochemistry-score" class="question-form-label">
                            Оценка по биохимии
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required|decimal|between:1,5'"
                                :class="{'is-error': formErrors.has('form-2.biochemistry-score') }"
                                id="form-field-biochemistry-score"
                                name="biochemistry-score"
                                type="number"
                                placeholder="от 1 до 5"
                                class="question-form-input"
                                data-vv-as="Оценка по биохимии"
                                data-vv-scope="form-2">
                        <span v-show="formErrors.has('form-2.biochemistry-score')" class="question-form-input-error">
                            {{ formErrors.first('form-2.biochemistry-score') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">4</div>
                        <label for="form-field-pharma-score" class="question-form-label">
                            Оценка по фармакологии
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required|decimal|between:1,5'"
                                :class="{'is-error': formErrors.has('form-2.pharma-score') }"
                                id="form-field-pharma-score"
                                name="pharma-score"
                                type="number"
                                placeholder="от 1 до 5"
                                class="question-form-input"
                                data-vv-as="Оценка по фармакологии"
                                data-vv-scope="form-2">
                        <span v-show="formErrors.has('form-2.pharma-score')" class="question-form-input-error">
                            {{ formErrors.first('form-2.pharma-score') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">5</div>
                        <label for="form-field-pathophysiology-score" class="question-form-label">
                            Оценка по патафизиологии
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required|decimal|between:1,5'"
                                :class="{'is-error': formErrors.has('form-2.pathophysiology-score') }"
                                id="form-field-pathophysiology-score"
                                name="pathophysiology-score"
                                type="number"
                                placeholder="от 1 до 5"
                                class="question-form-input"
                                data-vv-as="Оценка по патафизиологии"
                                data-vv-scope="form-2">
                        <span v-show="formErrors.has('form-2.pathophysiology-score')" class="question-form-input-error">
                            {{ formErrors.first('form-2.pathophysiology-score') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">6</div>
                        <label for="form-field-commonwealth-score" class="question-form-label">
                            Оценка по патанатомии
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required|numeric|between:1,5'"
                                :class="{'is-error': formErrors.has('form-2.commonwealth-score') }"
                                id="form-field-commonwealth-score"
                                name="commonwealth-score"
                                type="number"
                                placeholder="от 1 до 5"
                                class="question-form-input"
                                data-vv-as="Оценка по патанатомии"
                                data-vv-scope="form-2">
                        <span v-show="formErrors.has('form-2.commonwealth-score')" class="question-form-input-error">
                            {{ formErrors.first('form-2.commonwealth-score') }}
                        </span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">7</div>
                        <label for="form-field-english" class="question-form-label">Английский язык</label>
                        <div class="question-form-select">
                            <select name="english" id="form-field-english">
                                <option value="Свободный">Свободный</option>
                                <option value="Чтение со словарем">Чтение со словарем</option>
                                <option value="Начальный">Начальный</option>
                                <option value="Не владею">Не владею</option>
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
                            <input id="form-field-volunteer" type="checkbox" name="volunteer" v-model="volunteer" value="0">
                            <label for="form-field-volunteer">Имеется</label>
                        </div>
                    </div>

                    <transition name="fade">
                        <div v-if="volunteer" class="question-form-group">
                            <div class="question-form-group-num">10</div>
                            <label for="form-field-volunteer-exp" class="question-form-label">Опишите свой волонтерский опыт</label>
                            <textarea name="volunteer-exp" id="form-field-volunteer-exp" class="question-form-textarea" cols="30" rows="10" placeholder="Напишите ваш опыт работы здесь"></textarea>
                        </div>
                    </transition>

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

                <div class="question-form-step" :class="(currentStep == 3) ? 'active' : ''" data-vv-scope="form-3">
                    <div class="question-form-title">Шаг 3 – Регистрация</div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">1</div>
                        <label for="form-field-email" class="question-form-label">
                            Электронная почта
                            <sup class="question-form-required">*</sup>
                        </label>
                        <input
                                v-validate="'required|regex:.+@.+'"
                                :class="{'is-error': formErrors.has('form-3.email') }"
                                id="form-field-email"
                                name="email"
                                type="text"
                                placeholder="email@domain"
                                class="question-form-input"
                                data-vv-as="Email"
                                data-vv-scope="form-3">
                        <span v-show="formErrors.has('form-3.email')" class="question-form-input-error">{{ formErrors.first('form-3.email') }}</span>
                    </div>

                    <div class="question-form-group">
                        <div class="question-form-group-num">2</div>
                        <label class="question-form-label">
                            Пароль
                            <sup class="question-form-required">*</sup>
                        </label>

                        <div class="question-form-subgroup">
                            <label for="form-field-password-1" class="question-form-sublabel">
                                Придумайте пароль
                            </label>
                            <input
                                    v-validate="'required'"
                                    :class="{'is-error': formErrors.has('form-3.password-1') }"
                                    id="form-field-password-1"
                                    name="password-1"
                                    type="password"
                                    placeholder="Введите пароль"
                                    class="question-form-input"
                                    data-vv-as="Пароль"
                                    data-vv-scope="form-3">
                            <span v-show="formErrors.has('form-3.password-1')" class="question-form-input-error">{{ formErrors.first('form-3.password-1') }}</span>
                        </div>

                        <div class="question-form-subgroup">
                            <label for="form-field-password-2" class="question-form-sublabel">
                                Подтвердите пароль
                            </label>
                            <input
                                    v-validate="'required|confirmed:password-1'"
                                    :class="{'is-error': formErrors.has('form-3.password-2') }"
                                    id="form-field-email"
                                    name="password-2"
                                    type="password"
                                    placeholder="Введите пароль ещё раз"
                                    class="question-form-input"
                                    data-vv-as="Пароль"
                                    data-vv-scope="form-3">
                            <span v-show="formErrors.has('form-3.password-2')" class="question-form-input-error">{{ formErrors.first('form-3.password-2') }}</span>
                        </div>
                    </div>

                    <div class="question-form-step-buttons">
                        <button class="button button-round button-gray-hollow" @click.prevent="stepBack">Назад</button>
                        <button type="submit" class="button button-round button-blue">Отправить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php include "footer.php"; ?>
</div>
<script src="build/scripts.min.js"></script>
</body>
</html>