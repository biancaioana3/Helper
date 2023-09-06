<body>
    <div id='vue_app'>
        <input v-model='msg' />
        <span>{{max-msg.length}}/{{max}}</span>
    </div>

<!-- 2 -->
    <div id='vue_app'>
        <input type="radio" value='London' v-model='city' ><b>London</b>
        <input type="radio" value='Durham' v-model='city' ><b>Durham</b>
        <input type="radio" value='Sydney' v-model='city' ><b>Sydney</b>
        <p><span>{{city}}:</span> {{weather_info}}</p>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        let app = Vue.createApp({
            data(){
                return{
                    msg:'hello',max:10
//2
                    city:'London',
                    weather_info:'⏳ loading info'
                }
            },
            watch:{
                msg(newVal,preVal){
                    console.log(preVal+' -> '+newVal)
                    if(newVal.length>this.max){
                        this.msg = newVal.substring(0,this.max)
                    }
                }
//2

                city:{
                    handler(newVal,preVal){
                        console.log(preVal+' -> '+newVal)
                        this.query(newVal)
                    },
                  
            },
            methods:{
                // check(){
                //     if(this.msg.length>this.max){
                //         this.msg = this.msg.substring(0,this.max)
                //     }
                // }
//2
                query(city){
                    console.log('querying backend api using '+city)
                    this.weather_info = 'Good weather in '+city
                }
            }
        })
        let vm = app.mount('#vue_app')
    </script>
</body>