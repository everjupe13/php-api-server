const { createApp } = Vue

const app = createApp({
    data() {
        return {
            message: 'Create query!',
            email: '',
            option: 'Questions',
            messageBody: '',
            sendCopy: '',
        }
    },
    mounted() {
        this.loop()
    },
    methods: {
        loop() {
            
        },
        sendData(e) {
            console.log(e)
            e.preventDefault()
        }
    }
})

app.mount('#app')