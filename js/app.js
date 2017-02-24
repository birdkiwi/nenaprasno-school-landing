var validateConfig = {
    locale: 'ru',
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
        changeStep: function (step) {
            //TODO: Validation

            window.scrollTo(0, $('.question-form').offset().top);
            this.currentStep = step;
        },
        stepBack: function () {
            window.scrollTo(0, $('.question-form').offset().top);
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