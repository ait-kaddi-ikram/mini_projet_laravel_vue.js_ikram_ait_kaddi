<template>
 <div>
      <navbarEtudiant></navbarEtudiant>
      
  <router-view />
             <div class="col-md-6 offset-md-3">
            <br>
           <br> 
            

                  
    <button class="btn btn-info btn-block" @click=" showListModule">Consulter la liste des modules</button>

     
                 <!--liste des étudiants par semestre-->
       <div  v-show="etudiantL">         
    <h2 class="">Module : {{nom_module}}</h2>   
   <table  class="table">
   
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">CNE</th>
       <th scope="col">Semestre</th>
      <th scope="col">email</th>
      
    </tr>
  </thead>
  <tbody>
    <tr  v-for="etudiant in etudiants" v-bind:key = "etudiant.id">
      <td>{{etudiant.nom}}</td>
      <td>{{etudiant.prenom}}</td>
      <td>{{etudiant.cne}}</td>
      <td>{{etudiant.semestre}}</td>
      <td>{{etudiant.email}}</td>

       </tr>
    </tbody>
</table>  
</div> 
  <br>
  <br> 
  <br>
  <br> 
            

 <!--liste des Modules -->
   <table  class="table" v-show="moduleL">
     <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Semestre</th>
       <th scope="col">liste des etudiants</th>
          
    </tr>
  </thead>
  <tbody>
    <tr  v-for="mod in modules" v-bind:key = "mod.id">
      <td>{{mod.nom}}</td>
      <td>{{mod.semestre}}</td>
       <button class="btn btn-info btn-block" @click=" showListEtu(mod.semestre,mod.id,mod.nom)">Consulter la liste des etudiants</button>
    </tr>
    </tbody>
</table>     


 


        

  </div>
</div>
</template>
<script>
import axios from 'axios';
import NavbarEtudiant from "../components/NavbarEtudiant";
export default {
   name: "Module",
   components:{
 navbarEtudiant:  NavbarEtudiant,
  },computed :{
      object(){
        return this.$store.getters.get_object;
             },
   },
   data(){
       return{
        modules:[],  
        
              etudiants:[],  
         
       
   
        
        moduleL:false,
        semestreL: false,
        id_module:'',
        nom_module:'',
        note:'',
       
       };
   },
   methods:{

       showListModule(){
             this.moduleL = true;
             
         alert(this.object.email);
       axios.get('http://127.0.0.1:8000/api/moduleThisEtu/'+ this.object.email)
            .then(response => {
              this.modules = response.data.data; 
               console.log('perform show Module');
               console.log(this.modules); 
            }).catch(err => {
         console.log(err.message);
     });
       },
          showListEtu(i,id_module, nom_module){
              this.id_module = id_module;
              this.nom_module = nom_module;
              //alert(this.nom_module);
             //this.load= false;
         this.etudiantL= true;
      
         //alert(semestre);
       axios.get('http://127.0.0.1:8000/api/etudiants/'+i)
            .then(response => {
              this.etudiants = response.data.data; 
               console.log('perform show Etudiant');
               console.log(this.etudiants); 
            }).catch(err => {
         console.log(err.message);
     });

          },

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