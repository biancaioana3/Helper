<body>
    <div id='vue_app'>
        <h2>watching [] & {}</h2>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        let app = Vue.createApp({
            data(){return{
                city:'London',
                list:['London','Newcastle','Tokyo'],
                car:{ brand:'Toyota',model:'Supra',year:2021 }
            }},
            watch:{
                list:{
                    handler(newVal,preVal){
                        console.log(preVal,newVal)
                    },
                    deep:true
                },
                'list.length'(newVal,preVal){
                    console.log('elem total: '+preVal+' -> '+newVal)
                },
                // 'list[0]':{
                //     handler(newVal,preVal){
                //         console.log(preVal+' -> '+newVal) // not working
                //     },
                //     deep:true
                // }
                'car.brand'(newVal,preVal){
                    console.log(preVal+' -> '+newVal)
                }
            },
        })
        let vm = app.mount('#vue_app')
    </script>
</body>