//import Vue from "vue";
import 'es6-promise/auto';
import Vuex from "vuex";
import axios from 'axios';
//
//Vue.Use(Vuex);
export default new Vuex.Store({
  state: {
    object: null,
    loggedIn : false,
    prof: null,
  },
  mutations: {
   // SET_user(state,payload){
      //state.user = payload;
    //},
    SET_object(state,payload){
      state.object = payload;
    },
  
    SET_loggedIn(state,payload){
      state.loggedIn = payload;
    },
    SET_prof(state,payload){
      state.prof = payload;
    }
  },
  actions: {    
     performLoginAction({commit },payload){
        //console.log("hello");
          return new Promise((resolve, reject) => {
            axios.post('http://127.0.0.1:8000/api/login',{
              fonction : payload.fonction,
              email : payload.email,
              mot_Passe : payload.mot_Passe,
            })
            .then(res => {
              console.log( res);
              console.log("hello");
                commit('SET_object',res.data.object);
                commit('SET_prof',res.data.prof);
                commit('SET_loggedIn', true);
                resolve(res);
            }
            ).catch(err => {

                  reject(err);
            });
          });
    },

    performRegisterAction({commit },payload){
      //console.log("hello");
        return new Promise((resolve, reject) => {
          axios.post('http://127.0.0.1:8000/api/adminstore',{
            name : payload.name,
            email : payload.email,
            mot_Passe : payload.mot_Passe,
            fonction : payload.fonction
          })
          .then(res => {
            console.log(res);
            console.log("hello");
              commit('SET_object',res.data.object);
              commit('SET_loggedIn', true);
              resolve(res);
          }
          ).catch(err => {

                reject(err);
          });
        });
  },
  
  performLogoutAction({ commit, state }) {
  
    return new Promise((resolve, reject) => {
      axios
        .post("http://localhost:8000/api/logout",state.object)
        .then(res => {
          commit("SET_object", null);

          commit("SET_loggedIn", false);
      
          resolve(res);
        })
        .catch(err => {
          reject(err);
        });
    });
  
  },
  /*performLoginProfAction({commit },payload){
  //console.log("hello");
      return new Promise((resolve, reject) => {
        axios.post('http://127.0.0.1:8000/api/logProf',{
          email : payload.email,
          password : payload.password,
        })
        .then(res => {
          console.log( res);
          console.log("hello !!!!");
            commit('SET_object',res.data.object);
            commit('SET_loggedIn', true);
            commit('SET_prof', true);
            resolve(res);
        }
        ).catch(err => {

              reject(err);
        });
      });
},*/
  },
  getters : {
    get_loggedIn(state){
      return state.loggedIn;
    },
    get_object(state){
      return state.object;
    },


  }

});
