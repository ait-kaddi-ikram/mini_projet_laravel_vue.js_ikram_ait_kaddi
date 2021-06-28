<template>
 <div>
      <navbarAdmin></navbarAdmin>
      
  <router-view />
   </div>
    <div v-show="isLoading" class="login">
      <div class="">
          <div class="col-md-6 offset-md-3">
              <h2 class="display-4 text-center met-5">Se Connecter</h2>
                          <div class="form-groupe">
                      <label for="email">vous êtres Etudiant, proffesseur ou admin ?</label>
            <input type="text"  v-model="fonction" class="form-control" />
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
            <br>
            <div style="color:red;" v-if="error">{{ error }}</div>
          </div>
          <br>
          <div class="form-group">
            <button class="btn btn-info btn-block" @click="performLogin">Login</button>
          </div>
          <!--<circle-spin v-show="isLoading"></circle-spin>-->
          </div>
          </div>
    </div>
</template>
<script>

export default {
   name: "Login",
   data(){
       return{
         
          email:'',
          mot_Passe:'',
          fonction:'',
      
        error:'',
        isLoading: true,
       
       };
   },
   methods:{
     performLogin(){
       this.isLoading = true;
       this.$store.dispatch('performLoginAction',{
         fonction:this.fonction,
        email : this.email,
         mot_Passe : this.mot_Passe,
       })
       .then( res => {
               console.log(res);
            if(this.fonction.trim()  === "admin"){
             this.$router.push('/Profile');
            }
             if(this.fonction.trim()==='proffesseur'){
                 this.$router.push('/Proffesseur');
            } if(this.fonction === "Etudiant"){
                this.$router.push('/etudiant');
            }
        
           console.log(this.fonction);
       })
       .catch(err =>{
         
            this.error = "There was error during login process";
            console.log(err.message);
       });
       
   }
   } 
};
</script>
<style>
/*
 alert(this.object.email);
       axios.post('http://127.0.0.1:8000/api/login',this.object).then( res => {
         console.log(res);
         //store the token and user in localstorage
      // const user = localStorage.setItem('user',res.data.data);
         const local = localStorage.setItem('object', JSON.stringify(this.object));
         console.log(local);
       console.log('perform login');
       this.$router.push("/profile");
       }).catch(err => {
         console.log(err.message);
         this.error=err.message;
       });
     
     }*/
</style>