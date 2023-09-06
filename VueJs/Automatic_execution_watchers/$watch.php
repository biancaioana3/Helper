<body>
    <div id='vue_app'>
        <input v-model='msg' />
        <span>{{max-msg.length}}/{{max}}</span>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        let app = Vue.createApp({
            data(){
                return{
                    city:'London',
                    stop: null,
                    stop_two: null
                }
            },
            created(){
                this.stop = this.$watch(
                    'city',
                    (newVal, preVal) => {
                        console.log(preVal+ ' -> '+newVal)
                    },
                    {
                        immediate: true
                    }
                )
                this.stop_two = this.$watch(
                    'city',
                    (newVal, preVal) => {
                        console.log('second city watcher')
                    },
                    {
                        immediate: false
                    }
                )
            }
           
        })
        let vm = app.mount('#vue_app')
    </script>
</body>