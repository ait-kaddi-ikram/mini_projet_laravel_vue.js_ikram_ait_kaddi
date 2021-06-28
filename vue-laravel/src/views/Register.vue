<template>
    <div class="login">
      <div class="">
          <div class="col-md-6 offset-md-3">
              <h2 class="display-4 text-center met-5">Créer un compte</h2>
           
            <div class="form-groupe">
            <label for="email">Name</label>
            <input type="text" v-model="name" class="form-control" />
          </div>
                 <div class="form-groupe">
                      <label for="email">Email</label>
            <input type="text"  v-model="email" class="form-control" />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
             
              v-model="mot_Passe"
              class="form-control"
            />
            <div style="color:red;" v-if="error">{{ error }}</div>
          </div>

          <div class="form-group">
            <button  class="btn btn-info btn-block" @click=" performRegister">Login</button>
          </div>
           <!--<circle-spin v-show="isLoading"></circle-spin>-->
          </div>
          </div>
          
    </div>
</template>
<script>

export default {
   name: "Register",
   data(){
       return{
         
          name:'',
          email:'',
          mot_Passe:'',
          error : '',
          isLoading :false,
          fonction:'admin'
       };
   },
   methods:{
     performRegister(){
    this.isLoading = true;
       this.$store.dispatch('performRegisterAction',{
         name : this.name,
         email : this.email,
         mot_Passe : this.mot_Passe,
         fonction : this.fonction
       })
       .then( res => {
         this.isLoading  = false;
         this.$router.push('/profile');
           console.log(res);
           console.log("hello");
       })
       .catch(err =>{
          this.isLoading = false;
            this.error = "There was error during Regestration process";
            console.log(err.message);
       });

     }
   }
}


//.prevent
</script>
<style>
 /*performRegister(){
         axios.post('http://127.0.0.1:8000/api/userstore',this.data)
            .then(response =>{console.log(response);
              const local1 = localStorage.setItem('data', JSON.stringify(this.data));
               console.log(local1);
               console.log('perform register');
               this.$router.push("/profile");
            }).catch(err => {
         console.log(err.message);
     });
     }
   }*/
</style>