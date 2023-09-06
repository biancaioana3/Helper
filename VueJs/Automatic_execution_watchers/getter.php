<body>
    <div id='vue_app'>
        <h2 ref='h2'>vm.$watch(getter)</h2>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        let app = Vue.createApp({
            data(){return{
                city:'London',nation:'UK',
                a:10,b:5,
                list:['apple','orange','peach'],
                car:{ brand:'Toyota',model:'Supra',year:2021 }
            }},
            created(){
                this.$watch(
                    ()=>{
                        //return [this.city,this.nation]
                        //return this.a+this.b
                        //return [...this.list]
                        return this.list[0]
                    },
                    (newVal,preVal)=>{
                        console.log(preVal,newVal)
                    },
                    {
                        immediate:true,
                        deep:false
                    }
                )
            }
        })
        let vm = app.mount('#vue_app')
    </script>
</body>