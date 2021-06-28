<template>
     <div>
     <navbarAdmin></navbarAdmin>
      
      <router-view />
   </div>
      
        
          <div class="col-md-6 offset-md-3">
              <h2 class="display-4 text-center met-5">Ajouter Proffesseur</h2>
                         <div class="form-groupe">
                      <label for="email">Nom</label>
            <input type="text"  v-model="object.nom" class="form-control" />
          </div>
                        <div class="form-groupe">
                      <label for="email">Prénom</label>
            <input type="text"  v-model="object.prenom" class="form-control" />
          </div>
                 <div class="form-groupe">
                      <label for="email">Email</label>
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
            <span v-show="added" style="color:red;">le proffesseur a été ajouté avec succés</span>
            <br>
          <br>
          <div class="form-group">
            <button class="btn btn-info btn-block" @click="add">Ajouter</button>
          </div>
          <br>
          <br>
          <br>
          <br>
        
         
           <br>
          <br>




          <!-- update -->
             <div v-show="wanted">
              <h2 class="display-4 text-center met-5" >Ajouter Proffesseur</h2>
                         <div class="form-groupe">
                      <label for="email">Nom</label>
            <input type="text"  v-model="form.nom" class="form-control" />
          </div>
                        <div class="form-groupe">
                      <label for="email">Prénom</label>
            <input type="text"  v-model="form.prenom" class="form-control" />
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
            <span v-show="added" style="color:red;">le proffesseur a été ajouté avec succés</span>
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
                 <div class="form-group">
            <button class="btn btn-success btn-block" @click="show">Consulter la liste des proffesseurs</button>
          </div>
     
        

        
          <table  class="table" v-show="load">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">email</th>
        <th scope="col">modifier</th>
          <th scope="col">supprimer</th>
    </tr>
  </thead>
  <tbody>
    <tr  v-for="(prof, i) in profs" v-bind:key = "prof.id">
      <th scope="row" >{{prof.id}}</th>
      <td>{{prof.nom}}</td>
      <td>{{prof.prenom}}</td>
      <td>{{prof.email}}</td>
        <td> <button class="btn btn-success btn-block" @click="updateProf(i)">modifier</button></td>
       <td> <button class="btn btn-danger btn-block" @click='delet(prof.id)'>supprimer</button></td>
    </tr>
    </tbody>
</table>
<!--
<div class="modal" tabindex="-1" v-show="wanted">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>

   
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
    </div>
</div>-->
        
    


</div>
</template>
<script>
import NavbarAdmin from "../components/NavbarAdmin";
import axios from 'axios';
export default {
  components:{
   navbarAdmin: NavbarAdmin,
  },
   name: "gProf",
   data(){
       return{
        profs:[],   
        object:{
           nom:'',
          prenom:'',
          email:'',
          mot_Passe:'',
          fonction:'proffesseur',
        },
         form:{
           id:'',
           nom:'',
          prenom:'',
          email:'',
          mot_Passe:'',
        },
          data:{
          nom:'',
          prenom:'',
          email:'',
          mot_Passe:''
        },
        added: false,
        load:false, 
        wanted:false, 
       };
   },
   methods:{
     add(){

       axios.post('http://127.0.0.1:8000/api/profStore',this.object)
            .then(response =>{console.log(response);  
               console.log('perform Add prof');
              this.added = true;
            }).catch(err => {
         console.log(err.message);
     });
     },
        show(){
          this.load=true;
       axios.get('http://127.0.0.1:8000/api/profs')
            .then(response => {
              this.profs = response.data.data; 
               console.log('perform show prof');
               console.log(this.profs); 
            }).catch(err => {
         console.log(err.message);
     });
     
     },
    delet(i){
        axios.get('http://127.0.0.1:8000/api/profs/'+i).then(response => {
        console.log(response);
        this.show();
        });
    },
    updateProf(i){
  this.wanted =true;
   this.form.id = this.profs[i].id ;
    this.form.nom = this.profs[i].nom ;
    this.form.prenom =this.profs[i].prenom;
    this.form.email = this.profs[i].email;
    this.form.mot_Passe = this.profs[i].mot_Passe;
    
   },
  update(){
     alert(this.form.id);
       axios.post( 'http://127.0.0.1:8000/api/profUpdate',this.form).then(response => {
        console.log(response);    
        }).catch(error => {
        console.log(error.response);
});       
        
    this.form.nom= '' ;
    this.form.prenom='';
    this.form.email= '';
    this.form.mot_Passe= ''
     this.wanted=false;
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