<!-- template for the Modal component -->
<script type="x/template" id="modal-template">
    <transition name="modal">
        <div class="modal-mask" @click="close" v-if="show">
            <div class="modal-container" @click.stop>
                <slot></slot>
            </div>
        </div>
    </transition>
</script>

<!-- template for the Login modal component -->
<script type="x/template" id="login-modal-template">
    <modal :show="show" :on-close="close">
        <a href="#" @click.prevent="close" class="modal-close"></a>
        <div class="modal-header">
            <div class="modal-header-title">Войти</div>
            <div class="modal-header-desc">
                Для входа используйте логин и пароль
                отправленный вам на почту
            </div>
        </div>

        <form action="#" method="post" class="modal-body" @submit.prevent="loginPost">
            <div class="modal-form-group">
                <label for="login-form-login" class="modal-form-label">
                    Логин
                </label>
                <input
                        type="text"
                        v-validate="'required'"
                        :class="{'is-error': formErrors.has('form-login.login') }"
                        id="login-form-login"
                        name="login"
                        class="modal-form-input"
                        data-vv-as="Логин"
                        data-vv-scope="form-login">
                <span v-if="formErrors.has('form-login.login')" class="modal-input-error">
                    {{ formErrors.first('form-login.login') }}
                </span>
            </div>
            <div class="modal-form-group">
                <label for="login-form-password" class="modal-form-label">
                    Пароль
                </label>
                <input
                        type="password"
                        v-validate="'required'"
                        :class="{'is-error': formErrors.has('form-login.password') }"
                        id="login-form-password"
                        name="password"
                        class="modal-form-input"
                        data-vv-as="Пароль"
                        data-vv-scope="form-login">
                <span v-if="formErrors.has('form-login.password')" class="modal-input-error">
                    {{ formErrors.first('form-login.password') }}
                </span>
            </div>

            <button type="submit" class="button button-blue button-round modal-form-submit">Войти на сайт</button>
        </form>
    </modal>
</script>