Vue.use(window.vuelidate.default);
    const { required, email, maxLength } = window.validators;
    const app = new Vue({
    el: '#app',
    data: {
      name: '',
      title: '',
      body: '',
      mail: '',
    },
    validations: {
    name: {
            required,
            maxLength: maxLength(20)
        },
    mail: {
        required,
        email,
        maxLength: maxLength(200)
        },
    title: {
            required,
            maxLength: maxLength(100)
        },
    body: {
            maxLength: maxLength(1000)
        },
    },
    methods: {
      submitForm() {
        this.$v.$touch();
        if (this.$v.$invalid) {
          alert('入力項目をお確かめください。');
        } else {
          //ajax通信する
          var params = {
            name: this.name,
            title: this.title,
            body: this.body,
            mail: this.mail
        };
        axios.post('/contact', params)
            .then(function(response){
                alert('お問合せ完了しました。');

            })
            .catch(function(error){
                alert('システムエラーです。\nお手数ですがもう一度お問合せください');

            });
        }
      },
    },
  });