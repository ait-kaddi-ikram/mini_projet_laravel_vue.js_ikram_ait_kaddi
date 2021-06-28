<template>
   <div>       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/proffesseur">profile</router-link>
        </li>
            <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/moduleEtudiant">Liste des modules</router-link>
        </li>
            <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/noteEtudiant">consulter vos notes</router-link>
        </li>
       

        
      </ul>
  </div>
  
      <!-- <nav id="sidebar">

     <ul class="list-group p-3">
  <nav>
        <li class="list-group-item">
          <a href="#">General Information</a>
        </li>
        <li class="list-group-item mt-2">
          <a href="#">Paymnets</a>
        </li>
      </ul>
    </nav> -->
        </nav>
   </div>
</template>

<script>


export default{
  data(){
    return {
      object: null,
    };
  },
}
</script>
<style>
#sidebar {
  width: 20%;
  top: 0px;
  left: 0px;
  bottom: 0px;
  height: 100vh;
  position: absolute;
  background-color: rgb(39, 41, 41);
}
</style>