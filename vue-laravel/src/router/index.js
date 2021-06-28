import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import Proffesseur from "../views/Proffesseur.vue";
import etudiant from "../views/etudiant.vue";
import Profile from "../views/Profile.vue";
import gProf from "../views/gProf.vue";
import gEtudiant from "../views/gEtudiant.vue";
import gModule from "../views/gModule.vue";
import gNote from "../views/gNote.vue";
import gPfe from "../views/gPfe.vue";
import modulProf from "../views/moduleProf.vue";
import moduleEtudiant from "../views/moduleEtudiant.vue";
import noteEtudiant from "../views/noteEtudiant.vue";
import Store from "../store/index.js";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
    meta:{
      guest :true
    }
  },
  {
    path: "/Login",
    name: "Login",
    component: Login,
    meta:{
      guest :true
    }
  },
  {
    path: "/Register",
    name: "Register",
    component: Register,
    meta:{
      guest :true
    }
  },
  {
    path: "/Proffesseur",
    name: "Proffesseur",
    component: Proffesseur,
    meta:{
      secure :true
    }
  },
  {
    path: "/Profile",
    name: "Profile",
    component: Profile,
    meta:{
       secure :true
    }
  },
  {
    path: "/gProf",
    name: "gprof",
    component: gProf,
    meta:{
       secure :true
    }},
    {
      path: "/gPfe",
      name: "gpfe",
      component: gPfe,
      meta:{
         secure :true
      }},
    {
      path: "/gEtudiant",
      name: "gEtudiant",
      component: gEtudiant,
      meta:{
         secure :true
      }
    },
    {
      path: "/gModule",
      name: "gModule",
      component: gModule,
      meta:{
        secure :true
      }
    },
    {
      path: "/gNote",
      name: "gNote",
      component: gNote,
      meta:{
        secure :true
      }
    },
    {
      path: "/modulProf",
      name: "modulProf",
      component: modulProf,
      meta:{
        secure :true
      }
    },
    {
      path: "/etudiant",
      name: "etudiant",
      component: etudiant,
      meta:{
        secure :true
      }
    },
    {
      path: "/moduleEtudiant",
      name: "moduleEtudiant",
      component: moduleEtudiant,
      meta:{
        secure :true
      }
    },
    {
      path: "/noteEtudiant",
      name: "noteEtudiant",
      component: noteEtudiant,
      meta:{
        secure :true
      }
    },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});
router.beforeEach((to,from,next) => {
  if(to.matched.some(record => record.meta.secure)){
    //if(localStorage.getItem('object') == null)
 
    if(! Store.state.loggedIn){
      next({
        path: '/login'
      });
    }else{
      next();
         }
      //prof
     /*if(!(Store.state.prof)){
        next({
          path: '/Proffesseur'
        });
    }else{
     next();
        }*/


        }else if(to.matched.some(record => record.meta.guest)){
          if(! Store.state.loggedIn){
            next();
           }else{
            next({
              path: '/profile'
            });
            }

            //prof
            /*if(!(Store.state.prof)){
              next();
             }else{
              next({
                path: '/profile'
              });
              }*/
        }
  else {
    next();
  }


 
 

 //console.log(to);

});
export default router;
