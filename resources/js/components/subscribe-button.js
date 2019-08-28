Vue.component('subscribe-button', {
    props: {
      subscriptions: {
          type: Array,
          required: true,
          default: () => []
      }
    },
    methods: {
        toggleSubscription() {
            if(!__auth()) {
                alert('Vui lòng đăng nhập để đăng ký kênh');
            }
        }
    }
});
