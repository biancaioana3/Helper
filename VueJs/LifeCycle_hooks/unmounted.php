<body>
    <div id='vue_app'>
        <div class='root'>
            <h1 ref='h1' id='h1'>{{title}}</h1>
            <h2>{{hooks}}</h2>
        </div>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
    let app = Vue.createApp({
        data(){return{
            title:'Vue3 Lifecycle HOOKS',
            hooks:'beforeUnmounted & unmount'
        }},
        beforeUnmount(){
            console.log('beforeUnmount')
            console.log(this.$data)
            console.log(this.$el)
            console.log(this.$refs)
            console.log(this.$refs.h1)
            console.log(document.getElementById('h1'))
        },
        unmounted(){
            console.log('unmounted')
            console.log(this.$data)
            console.log(this.$el)
            console.log(this.$refs)
            console.log(this.$refs.h1)
            console.log(document.getElementById('h1'))
        }
    })
    let vm = app.mount('#vue_app')
    </script>
</body>