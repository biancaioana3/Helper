<body>
    <div id='vue_app'>
        <div class='root'>
            <h1 ref='h1' id='h1'>{{title}}</h1>
            <h2 :title='city'>{{hooks}}</h2>
        </div>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
    let app = Vue.createApp({
        data(){return{
            title:'Vue3 Lifecycle HOOKS',
            hooks:'beforeUpdate & update',city:'London'
        }},
        beforeUpdate(){
            console.log('beforeUpdate')
            console.log(this.title)
            console.log(this.$refs.h1)
            console.log(this.$refs.h1.innerText)
            this.$nextTick(()=>{
                console.log('nextTick: '+this.$refs.h1.innerText)
            })
        },
        updated(){
            alert(this.title)
            console.log('updated')
            console.log(this.title)
            console.log(this.$refs.h1)
            console.log(this.$refs.h1.innerText)
        }
    })
    let vm = app.mount('#vue_app')
    </script>
</body>