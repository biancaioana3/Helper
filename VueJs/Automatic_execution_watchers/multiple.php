<body>
    <div id='vue_app'>
        <h2 ref='h2'>{{msg}}</h2>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        let app = Vue.createApp({
            data(){return{
                msg:'multiple watch',
            }}, 
            created(){console.log('created')},
            mounted(){console.log('mounted')},
            beforeUpdate(){console.log('beforeUpdate')},
            updated(){console.log('updated')},
            watch:{
                msg:[
                    // function(newVal,preVal){
                    //     console.log('first msg watcher')
                    //     console.log(preVal+' -> '+newVal)
                    // },
                    // function(newVal,preVal){
                    //     console.log('second msg watcher')
                    //     console.log(preVal+' -> '+newVal)
                    // }
                    {
                        handler(){
                            console.log('first msg watcher handler')
                        },
                        immediate:true,flush:'post'
                    },
                    {
                        handler(){
                            console.log('second msg watcher handler')
                        },
                        immediate:false,flush:'pre'
                    }
                ]
            }
        })
        let vm = app.mount('#vue_app')
    </script>
</body>