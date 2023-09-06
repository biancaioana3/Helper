<body>
    <div id='vue_app'>
        <h2 ref='h2'>{{msg}}</h2>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        let app = Vue.createApp({
            data(){return{
                msg:'flush: pre, post, & sync',
            }}, 
            created(){console.log('created')},
            mounted(){console.log('mounted')},
            beforeUpdate(){console.log('beforeUpdate')},
            updated(){console.log('updated')},
            watch:{
                msg:{
                    handler(newVal,preVal){
                        console.log(preVal+' -> '+newVal)
                        if(this.$refs.h2){
                            console.log(this.$refs.h2.innerText)
                        }
                    },
                    immediate:true,
                    flush:'pre'
                }
            }
        })
        let vm = app.mount('#vue_app')
    </script>
</body>