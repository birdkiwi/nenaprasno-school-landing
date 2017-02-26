var validateConfig = {
    locale: 'ru',
    dictionary: {
        ru: {
            messages: messagesRu
        }
    },
    errorBagName: 'formErrors',
    fieldsBagName: 'formFields'
};

Vue.use(VeeValidate, validateConfig);

Vue.config.debug = true;

var vueApp = new Vue({
    el: '#vue-app',
    data: {
        formActive: false,
        currentStep: 1
    },
    methods: {
        activateForm: function (e) {
            this.formActive = true;
            $(e.target).removeClass('button-blue-hollow').addClass('button-blue');

            window.onbeforeunload = function(){
                return 'Вы действительно хотите покинуть страницу? Все несохраненные данные будут потеряны.';
            };
        },
        scrollTop: function () {
            $('html, body').animate({
                scrollTop: $('.question-form').offset().top - 30
            }, 1000);
        },
        changeStep: function (step) {
            var _this = this,
                currentScope = 'form-' + _this.currentStep;

            _this.$validator.validateAll(currentScope).then(function (success) {
                if (success) {
                    _this.scrollTop();
                    _this.currentStep = step;
                }
            }, function (error) {
                alert('Пожалуйста, проверьте все поля на правильность заполнения');
                var currentScopeErrors = _this.formErrors.errors.map(function(fieldError) {
                    return fieldError.scope == currentScope ? fieldError : false
                });

                //Scroll to first error field
                $('html, body').animate({
                    scrollTop: $('input[name="' + currentScopeErrors[0].field  + '"]').offset().top - 35
                }, 1000);
            });
        },
        stepBack: function () {
            this.scrollTop();
            this.currentStep--;
        },
        submitForm: function() {
            // Validate All returns a promise and provides the validation result.
            this.$validator.validateAll().then(function (success) {
                if (!success) {
                    // TODO: handle error
                    return;
                }
                window.onbeforeunload = null;
                alert('From Submitted!');
            });
        }
    },
    mounted: function () {
        $('.js-date-picker').flatpickr({
            dateFormat: 'd.m.Y',
            locale: 'ru',
            maxDate: new Date()
        });

        $(":input").inputmask();
    }
});