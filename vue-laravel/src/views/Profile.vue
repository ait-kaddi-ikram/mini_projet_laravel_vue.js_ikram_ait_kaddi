<template>
   <div>
      <navbarAdmin></navbarAdmin>
      
  <router-view />
   </div>
</template>


<script>

import NavbarAdmin from "../components/NavbarAdmin";
import axios from "axios";
export default{

name : "profile",
components:{
   navbarAdmin: NavbarAdmin,
  },
data(){
    return{
        players:[],
         data:{
          name:'',
          email:'',
          password:''
         }
    }
},
methods:{
    getPlayers(){
        axios.get('http://127.0.0.1:8000/api/players').then(response => {this.players = response.data.data; 
    });
    }
},created(){
    this.getPlayers();
},
}
</script>

<style>

</style>