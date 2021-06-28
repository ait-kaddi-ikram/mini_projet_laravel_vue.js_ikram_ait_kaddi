<template>
  <div class="home">
      <div class="">
         <div class="text-center">
          <h1 class='titre'>Logiciels  et systémes intielligents </h1>
           <h2 class='titre'>"L’ingénieur de demain, porteur des innovations du futur" </h2>
          </div>
<!--<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/images.png" class="d-block w-100" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt=".">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt="...">
    </div>
  </div>
</div>--> 


    <!--  <img src="../assets/images.png" class="img-fluid" alt="...">
        <br>
         <div class="text-center">
        <h1 class='titre'>Logiciels  et systémes intielligents </h1>
            <br>
      <img src="../assets/image1.jpg" class="rounded " alt="">
       <img src="../assets/image2.jpg" class="rounded " alt="">
         </div>-->
          </div>
   <br>    <br>    <br>
  <div class = "row">
       <div class="col-1">
        </div>
            <div class="col-7">
          <div class="card mb-3">
  <img src="../assets/img1.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Emploi des examens</h5>
    <p class="card-text">Les listes par local d'examen concernant les examens des modules des semestres S2, S4 du cycle Licence pour la session de printemps 2020-2021 sont disponibles...</p>
    <p class="card-text"><small class="text-muted">il ya 3 heurs</small></p>
  </div>
</div>
  <div class="card mb-3">
  <img src="../assets/img2.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Formation</h5>
    <p class="card-text">The Faculty of Sciences and Techniques of Tangier (FSTT) and the National School of Applied Sciences of Tangier (ENSAT) organize the 1st edition of an internati....</p>
    <p class="card-text"><small class="text-muted">il ya un jour</small></p>
    
  </div>
  </div>
    </div>
        <div class="col-4" id="info">
          <br><br>
          <h1 class="text-center">LES INFORAMTIONS SUR LSI:</h1>
             <br>    <br> 
          <article><h2 class="">Objectifs de la formation:</h2>
             <br>    
<p class="">Former des ingénieurs capables de :</p>
   <br>    
<ul> <li>Comprendre les enjeux des techniques de l’information,</li>
<li>Proposer et construire des solutions informatiques et décisionnelles compétitives et réalistes</li>
<li>Piloter des projets informatiques et les changements qu'ils entraînent.</li>
<li> Intervenir sur des problématiques informatiques complexes,</li>
 </ul>
   <br>    
Les élèves-ingénieurs complètent leur formation académique en effectuant des stages pratiques en entreprise au cours du Cycle Ingénieur. Chaque année ils sont amenés à effectuer dans des entreprises régionales et nationales, différents types de stages :
   <br> 
<ul> <li>
un stage opérateur en 1ère année (juillet ou août : 1 mois)</li>
<li>un stage ingénieur assistant en 2ème année (juillet et août : 2 mois)</li>
<li>un Projet de Fin d’Etudes en 3ème année (de février à juin)</li>
 </ul>
    <br>
Les stages permettent aux élèves-ingénieurs de participer à la vie de la structure d’accueil. Ils offrent également aux élèves ingénieurs la possibilité d’acquérir une expérience professionnelle dans le domaine de leur spécialité.</article>
     <br> <br>
     <p class=""> compétences visées et débouchés:</p>
      <ul> <li>
Concevoir et développer des plates formes logiciels desktop, logiciel et mobile</li>
<li>Concevoir et mettre en place des systèmes d’aide à la décision</li>
<li>Administrer une infrastructure informatique</li>
<li>Gérer et conduire un projet informatique</li>
</ul>
        </div>
      </div>
          <div id="foot">
 <tooter></tooter>
   </div>
  </div>
</template>

<script>
// @ is an alias to /src

import Footer from "../components/footer";
export default {
  name: "Home",
  components: {
   tooter: Footer,
  },
};
</script>
<style>
.titre{
  color:grey;
}
h2{
    color:black;
}
#info{
  background-color:gray;
}
article{
  font-size: 16px;
    font-style: italic ;
}


#foot{
background-color: rgba(0, 0, 255, 0.185);
}


</style>