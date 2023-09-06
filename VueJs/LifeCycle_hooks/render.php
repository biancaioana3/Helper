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
            hooks:'renderTriggered & renderTracked',city:'London'
        }},
        beforeMount(){ console.log('beforeMount') },
        mounted(){ console.log('mounted') },
        beforeUpdate(){ console.log('beforeUpdate') },
        updated(){ console.log('updated') },
        renderTriggered(event){
            console.log('renderTriggered')
            console.log(event)
            console.log(this.$refs.h1.innerText)
            this.$nextTick(()=>{
                console.log(this.$refs.h1.innerText)
            })
        },
        renderTracked(event){
            console.log('renderTracked')
            console.log(event)
        }
    })
    let vm = app.mount('#vue_app')
    </script>
</body>