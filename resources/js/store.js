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
            currency:'',
            unit:'Private Sedan'
        },
        unitOptions:'',
    },


    mutations: {
        openExportModal(){
            let vm=this;
            vm.isExportModalActive= true;
        },
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
