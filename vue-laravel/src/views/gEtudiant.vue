<template>
 <div>
      <navbarAdmin></navbarAdmin>
      
  <router-view />
   </div>
      
        
          <div class="col-md-6 offset-md-3">
              <h2 class="display-4 text-center met-5">Ajouter Etudiant</h2>
                         <div class="form-groupe">
                      <label for="email">Nom</label>
            <input type="text"  v-model="object.nom" class="form-control" />
          </div>
                        <div class="form-groupe">
                      <label for="email">Prénom</label>
            <input type="text"  v-model="object.prenom" class="form-control" />
          </div>
                 <div class="form-groupe">
                      <label for="email">CNE</label>
            <input type="text"  v-model="object.cne" class="form-control" />
          </div>
                 <div class="form-groupe">
                      <label for="email">Semestre</label>
            <input type="text"  v-model="object.semestre" class="form-control" />
          </div>
                 <div class="form-groupe">
                      <label for="email">email</label>
            <input type="text"  v-model="object.email" class="form-control" />
          </div>

          <div class="form-group">
            <label for="password">Mot de Passe</label>
            <input
              type="password"
            
          
              v-model="object.mot_Passe"
              class="form-control"
            />
            </div>
            <br>
            <span v-show="added" style="color:red;">l'etudiant a été ajouté avec succés</span>
            <br>
          <br>
          <div class="form-group">
            <button class="btn btn-info btn-block" @click="add">Ajouter</button>
          </div>
          <br>
          <br>
          <br>
          <br>
        
      

        
                 <div class="form-group">
            <button class="btn btn-success btn-block" @click="show">Consulter la liste des étudiants</button>
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
                    <!-- update -->
             <div v-show="wanted">
              <h2 class="display-4 text-center met-5" >Modifier les données de l'étudiant</h2>
                         <div class="form-groupe">
                      <label for="email">Nom</label>
            <input type="text"  v-model="form.nom" class="form-control" />
          </div>
                        <div class="form-groupe">
                      <label for="email">Prénom</label>
            <input type="text"  v-model="form.prenom" class="form-control" />
          </div>
                      <div class="form-groupe">
                      <label for="CNE">CNE</label>
            <input type="text"  v-model="form.cne" class="form-control" />
          </div>
                      <div class="form-groupe">
                      <label for="Semestre">Semestre</label>
            <input type="text"  v-model="form.semestre" class="form-control" />
          </div>
                 <div class="form-groupe">
                      <label for="email">Email</label>
            <input type="text"  v-model="form.email" class="form-control" />
          </div>

          <div class="form-group">
            <label for="password">Mot de Passe</label>
            <input
              type="password"
            
          
              v-model="form.mot_Passe"
              class="form-control"
            />
            </div>
            <br>
            <span v-show="added" style="color:red;">l'étudiant a été modifier avec succés</span>
            <br>
          <br>
          <div class="form-group">
            <button class="btn btn-info btn-block" @click="update">Modifier</button>
          </div>
          <br>
          <br>
          <br>
          <br>
          </div>
          

                 <!--  fin update -->
        
       <table  class="table" v-show="semestreL">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">CNE</th>
       <th scope="col">Semestre</th>
      <th scope="col">email</th>
        <th scope="col">modifier</th>
          <th scope="col">supprimer</th>
    </tr>
  </thead>
  <tbody>
    <tr  v-for="(etudiant, i) in etudiants" v-bind:key = "etudiant.id">
      <td>{{etudiant.nom}}</td>
      <td>{{etudiant.prenom}}</td>
      <td>{{etudiant.cne}}</td>
      <td>{{etudiant.semestre}}</td>
      <td>{{etudiant.email}}</td>
      <td> <button class="btn btn-success btn-block" @click="updateEtudiant(i)">modifier</button></td>
       <td> <button class="btn btn-danger btn-block" @click='delet(etudiant.id)'>supprimer</button></td>
    </tr>
    </tbody>
</table>

    


</div>
</template>
<script>
import axios from 'axios';
import NavbarAdmin from "../components/NavbarAdmin";
export default {
   name: "gEtudiant",
   components:{
   navbarAdmin: NavbarAdmin,
  },
   data(){
       return{
        etudiants:[],   
        object:{
           nom:'',
          prenom:'',
          cne:'',
          semestre:'',
          email:'',
          mot_Passe:'',
          fonction:'Etudiant',
        },
         form:{
           id:'',
          nom:'',
          prenom:'',
          cne:'',
          semestre:'',
          email:'',
          mot_Passe:'',
        },
          data:{
          nom:'',
          prenom:'',
          cne:'',
          semestre:'',
          email:'',
          mot_Passe:'',
        },
        added: false,
        load:false, 
        wanted:false, 
        semestreL:false,
        numSemestre:'',
       };
   },
   methods:{
     add(){

       axios.post('http://127.0.0.1:8000/api/etudiantStore',this.object)
            .then(response =>{console.log(response);  
               console.log('perform Add Etudiant');
              this.added = true;
            }).catch(err => {
         console.log(err.message);
     });
     },
        showList(i){
         this.semestreL= true;
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
     
     },
    delet(i){
        axios.get('http://127.0.0.1:8000/api/etudiantDelete/'+i).then(response => {
        console.log(response);
          this. showList(this.numSemestre);
         // alert(this.numSemestre);
        });
    },
    updateEtudiant(i){
  this.wanted =true;
   this.form.id = this.etudiants[i].id ;
    this.form.nom = this.etudiants[i].nom ;
    this.form.prenom =this.etudiants[i].prenom;
     this.form.cne =this.etudiants[i].cne;
      this.form.semestre =this.etudiants[i].semestre;
    this.form.email = this.etudiants[i].email;
    this.form.mot_Passe = this.etudiants[i].mot_Passe;
    
   },
  update(){
    
       axios.post( 'http://127.0.0.1:8000/api/etudiantUpdate',this.form).then(response => {
        console.log(response);    
         this. showList(this.numSemestre);
           alert(this.numSemestre);
        }).catch(error => {
        console.log(error.response);
         
});       
        
    this.form.nom= '' ;
    this.form.prenom='';
      this.form.cne='';
      this.form.semestre='';
    this.form.email= '';
    this.form.mot_Passe= ''
     this.wanted=false;
    },
    show(){
       this.load=true;
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