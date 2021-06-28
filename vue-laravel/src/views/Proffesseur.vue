<template>
 <div class="profile">
           <navbarProf></navbarProf>
              
          <div class="profile">
  
        <div id="container-fluid">
      <div class="row">
              <div class="col-4">
               <div class="card" style="width: 18rem;">
  <img src="../assets/image2.jpg" class="card-img-top" alt="">
  <div  class="card-body">
         <a @click="show" alt="">Informations Personnelles</a>
      <p>NOM : {{profs.nom}}</p>
      <p> PRENOM : {{profs.prenom}}</p>
    
      <p>Email : {{profs.email}}</p>
      
       
  </div>
</div>
</div>
        <div class="col-4">
           <h1 class="">Modifier vos informations</h1>
           <br>
           <br>
           <br>
          <div class="form">
              <label for="" class="">Email</label>
                <br>
            <input type="text" class="form-control" v-model="object.email"/>
            <label for="" class=""> Mot de passe</label>
               <br>
            <input type="text" class="form-control"  v-model="object.mot_Passe" />
             
            <button class="btn btn-primary mt-2" @click.prevent="UpdateInfoProf">Update</button>
          </div>
        </div>
          <div class="col-4">
            </div>
      </div>
    </div>
    </div>
  </div>

</template>
<script>
import NavbarProf from "../components/NavbarProf";
import axios from 'axios';
export default {
     
   components:{
   navbarProf : NavbarProf ,
   },
   name: "Proffesseur",
   data(){
       return{
         
       
       profs:[],
        error:'',
        isLoading: false,
       
       };
   },computed :{
      object(){
        return this.$store.getters.get_object;
             },
   },
   methods:{
      UpdateInfoProf(){
   
       axios.post( 'http://127.0.0.1:8000/api/profUpdatInfo',{
      id: this.object.id,
       email: this.object.email,
       mot_Passe : this.object.mot_Passe,
       }).then(response => {
         alert("vos information sont modifiés avec succès" );
        console.log(response);    
        }).catch(error => {
        console.log(error.response);
});       
      
    },
    show(){
           
             this.load=true;
          axios.get('http://127.0.0.1:8000/api/prof/' +this.object.email)
            .then(response => {
              this.profs = response.data.data; 
               console.log('perform show Module');
               //console.log(this.modules); 
            }).catch(err => {
         console.log(err.message);
     });
       },created(){
         this.show();
       }
     
   }
   
};
</script>
<style>

.profile {
  min-height: 100%;
  width: 100%;
  position: relative;
  display: inline-block;
}

#content {
  min-height: 500px;
  width: 80%;
  position: relative;
  float: right;
}
</style>
