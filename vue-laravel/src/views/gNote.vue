<template>
 <div>
      <navbarAdmin></navbarAdmin>
      
  <router-view />
             <div class="col-md-6 offset-md-3">
            <br>
           <br> 
            <div>  
            <button class="btn btn-success btn-block" @click="show">Consulter la liste des Modules par semestre</button>
             </div>
           <br>
           <br>
           <div v-show="load" >
            <button class="btn btn-success btn-block" @click="showList(1)">Semestre 1</button>
             <br> <br>
             <button class="btn btn-success btn-block" @click="showList(2)" >Semestre 2</button>
              <br> <br>
              <button class="btn btn-success btn-block" @click="showList(3)" >Semestre 3</button>
               <br> <br>
               <button class="btn btn-success btn-block" @click="showList(4)" >Semestre 4</button>
                <br> <br>
                <button class="btn btn-success btn-block" @click="showList(5)" >Semestre 5</button>
                 <br> <br>
                 <button class="btn btn-success btn-block" @click="showList(6)">Semestre 6</button>
                  <br> <br>
                  </div>      



                   <!--liste des étudiants par semestre-->
    <div  v-show="etudiantL"> 
         <h1>ajouter les note de module : {{nom_module}}</h1>
   <table  class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">CNE</th>
       <th scope="col">Semestre</th>
      <th scope="col">email</th>
       <th scope="col">Note</th>
       
    </tr>
  </thead>
  <tbody>
    <tr  v-for="etudiant in etudiants" v-bind:key = "etudiant.id">
      <td>{{etudiant.nom}}</td>
      <td>{{etudiant.prenom}}</td>
      <td>{{etudiant.cne}}</td>
      <td>{{etudiant.semestre}}</td>
      <td>{{etudiant.email}}</td>
      <td><input type="text" v-model="note" /></td>
      <td> <button class="btn btn-info btn-block" @click='ajouterNote(etudiant.id)'>valider</button></td>
     
    </tr>
    </tbody>
</table>     
    </div> 
        <!--liste des modules par semestre-->
        <br> <br>
   <table  class="table" v-show="semestreL">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Ajouter les notes pour les étudiants</th>
          
    </tr>
  </thead>
  <tbody>
    <tr  v-for="mod in modules" v-bind:key = "mod.id">
      <td>{{mod.nom}}</td>
       <td> <button class="btn btn-info btn-block" @click='showListEtu(mod.semestre,mod.id,mod.nom)'>ajouter</button></td>
    </tr>
    </tbody>
</table>

 


        

  </div>
</div>
</template>
<script>
import axios from 'axios';
import NavbarAdmin from "../components/NavbarAdmin";
export default {
   name: "gModule",
   components:{
   navbarAdmin: NavbarAdmin,
  },
   data(){
       return{
        modules:[],  
          profs:[],  
              etudiants:[],  
           nom:'',
           semestre:'',
            id_prof:'',
       
   
        added: false,
        load:false, 
        wanted:false, 
        error:'',
        numSemestre:'',
        etudiantL:false,
        semestreL: false,
        id_module:'',
        nom_module:'',
        note:'',
       
       };
   },
   methods:{
      showProfs(){
             this.load=true, 
       axios.get('http://127.0.0.1:8000/api/profs')
            .then(response => {
              this.profs = response.data.data; 
               console.log('perform show prof');
               console.log(this.profs); 
            }).catch(err => {
         console.log(err.message);
     });
     
     },created(){
      this.load=true, 
        this.showProfs();
     },getId(i){
        this.id_prof=i;
        //alert(this.id_prof);
     },
       add(){

       axios.post('http://127.0.0.1:8000/api/moduleStore',{
          nom: this.nom,
          semestre:this.semestre,
          id_prof: this.id_prof,
       })
            .then(response =>{console.log(response);  
               console.log('perform Add prof');
              this.added = true;
            }).catch(err => {
              
                  this.error = "There was error";
               console.log(err.message);
                 this.added = false;
        
     });
 
     },

         show(){
       this.load = true;
    },
       showList(i){
             this.semestreL = true;
               this.etudiantL= false;
         this.numSemestre = i;
         alert(this.numSemestre);
       axios.get('http://127.0.0.1:8000/api/modules/'+i)
            .then(response => {
              this.modules = response.data.data; 
               console.log('perform show Module');
               console.log(this.modules); 
            }).catch(err => {
         console.log(err.message);
     });
       }, delet(i){
        axios.get('http://127.0.0.1:8000/api/moduleDelete/'+i).then(response => {
        console.log(response);
       this. showList(this.numSemestre);
        });
    },
          showListEtu(i,id_module,nom_module){
              this.id_module = id_module;
              this.nom_module = nom_module;
              alert(this.nom_module);
             //this.load= false;
         this.etudiantL= true;
         this.numSemestre=i;
         //alert(semestre);
       axios.get('http://127.0.0.1:8000/api/etudiants/'+i)
            .then(response => {
              this.etudiants = response.data.data; 
               console.log('perform show Etudiant');
               console.log(this.etudiants); 
            }).catch(err => {
         console.log(err.message);
     });

          },ajouterNote(id_etudiant){
                axios.post('http://127.0.0.1:8000/api/suitUpdate',{
                  id_module: this.id_module,
                  note: this.note,
                  id_etudiant: id_etudiant,
                })
            .then(response =>{console.log(response);  
               console.log('perform Add note to etudiant for module');
               alert("la note est affecter avec success");
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