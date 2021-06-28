<template>
   <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <router-link class="navbar-brand" to="/">LSI</router-link>
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
             <router-link class="btn btn-primary my-1 btn-block" to="/gProf">Gestion des Proffesseurs</router-link>
        </li>
            <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/gEtudiant">Gestion des Etudiants</router-link>
        </li>
            <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/gModule" >Gestion des Modules</router-link>
        </li>
           <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/gNote" >Gestion des Notes</router-link>
        </li>
            <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/gPfe">Gestion des PFEs</router-link>
        </li>
            <li class="nav-item" >
             <router-link class="btn btn-primary my-1 btn-block" to="/gProf">Gestion des Emplois</router-link>
        </li>
        
      </ul>
    </div>
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
