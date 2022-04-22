const app = new Vue(
    {
        el : "#app",
        data:{
            dischi : []
        },
        

        created(){
            axios.get("http://localhost/php-ajax-dischi-/server/controller.php").then(
                (result) =>{
                    this.dischi = result.data.response;
                    console.log(result)
                }).catch((error)=>{
                    console.log(error);
                })
            
        }
    }
    

)