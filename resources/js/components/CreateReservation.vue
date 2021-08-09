<template>
        <!-- CREATE MODAL -->
  <data-form
    :user-role="userRole"
    :store-route="storeRoute"
    :route-transfers="routeTransfers"
    :_token="_token">
  </data-form>
</template>

<style>
    .modal-close.is-large{
        display: none!important;
    }
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
    span.control-label{
        color: #363636;
        display: block;
        font-size: 1rem;
        font-weight: 600;
    }
</style>

<script>
import { mapGetters, mapActions } from 'vuex';
import DataForm from "./DataForm";
    export default {
        data(){
            return {

            }
        },
        components: {
            DataForm,
        },
        mounted(){
            this.storeRole();
            this.$store.state.isEditModalActive=true;
            this.$store.state.logoutRoute = this.logoutRoute;
        },
        methods:{
            storeRole(){
                this.$store.state.currentRole=this.userRole;
                this.$store.dispatch('getRoleAction');
            },
        },

        computed: {

        },
        props: [
            'routeTransfers',
            '_token',
            'userRole',
            'storeRoute',
            'logoutRoute'
        ],
    }
</script>
