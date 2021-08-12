import Vue from 'vue';
import Vuex from 'vuex';


Vue.use(Vuex);

export default new Vuex.Store({
     state :{
        data:[],
        isLoading: false,
        currentRole: null,
        isEditModalActive:false,
        unitOptions:true,
        logoutRoute:'',
        formData:{
            unit:'Private Sedan'
        },
        unitOptions:'',
    },


    mutations: {
       getRole(state){
           state.currentRole=state.currentRole;
       },
       editModal(state){
            state.isEditModalActive=state.isEditModalActive;
       },
       getFormData(state){
            state.formData=state.formData;
       }
   },
     actions: {
        getRoleAction(context){
            context.commit('getRole');
        },
        changeEditModal(context){
            context.commit('editModal');
        },
        changeFormData(context){
            context.commit('getFormData');
        }
    },

    getters: {
        formData(state){
            return state.formData;
        }
    },

});
