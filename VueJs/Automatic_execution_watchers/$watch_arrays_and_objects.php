<body>
    <div id='vue_app'>
        <h2 ref='h2'>vm.$watch() [] & {}</h2>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        let app = Vue.createApp({
            data(){return{
                city:'London',
                list:['apple','orange','peach'],
                car:{ brand:'Toyota',model:'Supra',year:2021 }
            }},
            created(){
                this.$watch(
                    //'list',
                    'car',
                    //'list.length',
                    //'list[0]',does NOT work
                    //'car.brand',
                    (newVal,preVal)=>{
                        console.log(preVal,newVal)
                    },
                    {
                        immediate:true,
                        deep:true
                    }
                )
            }
        })
        let vm = app.mount('#vue_app')
    </script>
</body>