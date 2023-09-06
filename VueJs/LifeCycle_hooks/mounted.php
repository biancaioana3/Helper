<body>
    <div id='vue_app'>
        <div class='root'>
            <h1 ref='h1' >{{title}}</h1>
            <h2>{{hooks}}</h2>
        </div>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
    let app = Vue.createApp({
        data(){return{
            title:'Vue3 Lifecycle HOOKS',
            hooks:'beforeCreate, create, beforeMount, mounted'
        }},
        beforeCreate(){
            console.log('beforeCreate')
            console.log(this.$data)
        },
        created(){
            console.log('created')
            console.log(this.$el)
        },
        beforeMount(){
            console.log('beforeMount')
            console.log(this.$el)
        },
        mounted(){
            console.log('mounted')
            console.log(this.$el)
            console.log(this.$refs)
        }
    })
    let vm = app.mount('#vue_app')
    </script>
</body>