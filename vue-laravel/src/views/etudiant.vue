<template>
               <navbarEtudiant></navbarEtudiant>
      
             
              <div class="profile">
  
        <div class="container-fluid">
      <div class="row ">
        <div class="col-4">
          
          <div class="card" style="width: 18rem;">
  <img src="../assets/img3.png" class="card-img-top" alt="">
  <div  class="card-body">
         <a @click="show">Informations Personnels</a>
      <p>NOM : {{etudiants.nom}}</p>
      <p>PRENOM : {{etudiants.prenom}}</p>
      <p>CNE : {{etudiants.cne}}</p>
      <p>SEMESTRE  :{{etudiants.semestre}}</p>
      <p>EMAIL : {{etudiants.email}}</p>
      
       
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
             
            <button class="btn btn-primary mt-2" @click.prevent="UpdateInfoEtudiant">Update</button>
          </div>
        </div>
          <div class="col-4">
            </div>
      </div>
    </div>
    </div>


</template>
<script>
import NavbarEtudiant from "../components/NavbarEtudiant";
import axios from 'axios';
export default {
     
   components:{
   navbarEtudiant : NavbarEtudiant ,
   },
   name: "etudiant",
   data(){
       return{
        error:'',
        isLoading: false,
       etudiants:[],
       load:false,
       };
   },computed :{
      object(){
        return this.$store.getters.get_object;
             },
   },
   methods:{
      UpdateInfoEtudiant(){
   
       axios.post( 'http://127.0.0.1:8000/api/etudiantUpdatInfo',{
      id: this.object.id,
       email: this.object.email,
       mot_Passe : this.object.mot_Passe,
       }).then(response => {
         alert("vos information sont modifiés avec succès" );
        console.log(response);    
        }).catch(error => {
        console.log(error.response);

}); } ,      show(){
           
             this.load=true;
          axios.get('http://127.0.0.1:8000/api/etudiant/' +this.object.email)
            .then(response => {
              this.etudiants = response.data.data; 
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
#sidebar {
  width: 20%;
  top: 0px;
  left: 0px;
  bottom: 0px;
  height: 100vh;
  position: absolute;
  background-color: rgb(39, 41, 41);
}
#content {
  min-height: 500px;
  width: 80%;
  position: relative;
  float: right;
}
</style>
