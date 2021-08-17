<template>
    <section>

        <b-field grouped group-multiline>
            <div v-for="(column, index) in columnsTemplate"
                :key="index"
                class="control">
                <b-checkbox v-model="column.visible">
                    <div class="is-size-7">
                        {{ column.title }}
                    </div>
                </b-checkbox>
            </div>
        </b-field>

        <b-table
            :data="$store.state.data ? $store.state.data : []"
            bordered
            striped
            hoverable
            mobile-cards
            narrowed
            :loading="$store.state.isLoading">

                <b-table-column  label="ACTIONS" :sticky="true" headerClass="is-sticky-column-two" cellClass="is-sticky-column-two" v-slot="props">
                    <div class="is-flex">
                        <button class="btn btn-sm btn-primary mr-1"
                                @click="updateEditModal(true);
                                        updateRoute=props.row.updateRoute;
                                        fetchEditingData(props.row.editRoute);">
                            Editar
                        </button>
                        <button class="btn btn-sm btn-danger " @click="isDeleteModalActive = true; deleteRoute=props.row.deleteRoute">
                            Eliminar
                        </button>
                    </div>
                </b-table-column>

                <template v-for="(column, index) in columnsTemplate">
                    <b-table-column
                        :key="index"
                        v-bind="column"
                         :label="column.title"
                    :visible="column.visible">
                        <template
                            v-if="column.searchable"
                            #searchable="props">
                            <b-input
                                v-model="props.filters[props.column.field]"
                                placeholder="Search..."
                                icon="magnify"
                                size="is-small" />
                        </template>
                        <template v-slot="props">
                            {{ props.row[column.field] }}
                        </template>
                    </b-table-column>
                </template>
<!--
                <b-table-column v-for="(column, index) in columnsTemplate"
                    :key="index"
                    :label="column.title"
                    :visible="column.visible"
                    v-slot="props">
                    <span v-if="column.title === 'BABY CHAIR' || column.title === 'SHOPPING STOP'">
                        <div v-if="props.row[column.field] == true">
                            YES
                        </div>
                        <div v-else>
                            NO
                        </div>
                    </span>
                    <span v-else>
                        {{ props.row[column.field] }}
                    </span>
                </b-table-column>

                <template #empty>
                    <div class="has-text-centered">No records</div>
                </template> -->

        </b-table>

        <!-- EDIT MODAL -->
        <data-form
            ref="DataForm"
            :get-reservations="getReservations"
            :user-role="userRole"
            :route-transfers="routeTransfers"
            :update-route="updateRoute"
            :store-route="storeRoute"
            :_token="_token">
        </data-form>

        <!-- DELETE MODAL -->
        <b-modal
            v-model="isDeleteModalActive"
            has-modal-card
            trap-focus
            :destroy-on-hide="false"
            aria-role="dialog"
            aria-label="Example Modal"
            aria-modal>
            <form action="">
                <div class="modal-card" style="width: auto">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Alerta!</p>
                        <button
                            type="button"
                            class="delete"
                            @click="isDeleteModalActive=false"/>
                    </header>
                    <section class="modal-card-body">
                        <b-field label="Estas deguro que deseas eliminar esta reserva?">
                        </b-field>

                    </section>
                    <footer class="modal-card-foot">
                        <b-button
                            label="Cancelar"
                            @click="isDeleteModalActive=false" />
                        <b-button
                            label="Si, eliminar"
                            type="is-danger"
                            @click="deleteReservation()"/>
                    </footer>
                </div>

            </form>
            <b-loading  v-model="$store.state.isLoading"></b-loading>
        </b-modal>

    </section>

</template>

<style>
    span.check{
        width: 1em!important;
        height: 1em!important;
    }
    .table-wrapper{
        overflow:auto !important;
    }
    .is-w-400{
        width: 400px!important;
    }
    .is-sticky-column-one {
        background: #167df0 !important;
        color: white !important;
    }
    .is-sticky-column-two {
        background: #23d160 !important;
        color: white !important;
    }

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
import DataForm from "./DataForm";
    export default {
        components: {
            DataForm,
        },
        data() {
            return {
                columnsTemplate: [
                    { title: 'RESERVATION', field: 'reservation', visible: false },
                    { title: 'NAME', field: 'name', visible: true, searchable: true },
                    { title: 'E-MAIL', field: 'email', visible: true,searchable: true },
                    { title: 'PAX', field: 'passengers', visible: true },
                    { title: 'SERVICE', field: 'service', visible: true },
                    { title: 'BABY CHAIR', field: 'babysit', visible: true },
                    { title: 'SHOPPING STOP', field: 'shoppingstop', visible: true },

                    { title: 'DESTINATION', field: 'destination', visible: true },
                    { title: 'HOTEL', field: 'hotel', visible: true },

                    { title: 'ARRIVAL DATE', field: 'arrivaldate', visible: true,},
                    { title: 'ARRIVAL TIME', field: 'arrivaltime', visible: true },
                    { title: 'ARRIVAL AIRLINE', field: 'arrivalairline', visible: true },
                    { title: 'ARRIVAL FLIGHT', field: 'arrivalflight', visible: true },

                    { title: 'DEPARTURE DATE', field: 'departuredate', visible: false },
                    { title: 'DEPARTURE TIME', field: 'departuretime', visible: false },
                    { title: 'DEPARTURE AIRLINE', field: 'departureairline', visible: false },
                    { title: 'DEPARTURE FLIGHT', field: 'departureflight', visible: false },

                    { title: 'OCATION', field: 'ocation', visible: false },
                    { title: 'COMMENTS', field: 'comments', visible: false },
                    { title: 'ORIGIN', field: 'origin', visible: false },

                    { title: 'PRICE NORMAL', field: 'pricenormal', visible: true },
                    { title: 'PRICE PAYPAL', field: 'pricepaypal', visible: false },

                ],
                isDeleteModalActive:false,
                isEditModalActive:false,
                deleteRoute:'',
                updateRoute:'',
                editingData:[],
                transfers: [],
                unitOptions:true,
            }
        },
        mounted(){
            this.fetchData(1);
            this.storeRole();
            this.$store.state.logoutRoute = this.logoutRoute;
        },
        methods: {
            // ...mapActions([
            //     'update'
            // ]),
            fetchData(val){
                let vm=this;
                vm.isLoading = true;
                if(val){
                    axios.get(vm.routeTransfers).then((r)=>{
                        vm.transfers = r.data;
                    });
                }
                axios.get(vm.getReservations).then((r)=>{
                    vm.$store.state.data =r.data;
                     vm.$store.state.isLoading=false;
                     vm.isLoading=false;
                });
            },
            fetchEditingData(editRoute){
                this.$store.state.isLoading = true;
                axios.get(editRoute).then((r)=>{
                    this.$store.state.formData =r.data;
                    this.$store.state.formData.babysit==1?this.$store.state.formData.babysit=true:this.$store.state.formData.babysit==false;
                    this.$store.state.formData.shoppingstop==1?this.$store.state.formData.shoppingstop=true:this.$store.state.formData.shoppingstop==false;
                    this.$store.state.formData.arrivaldate=new Date(r.data.arrivaldate);
                    this.$store.state.formData.arrivaldate.setDate(r.data.arrivaldate.getDate() + 1);
                    if(this.$store.state.formData.service == 'Round Trip'){
                        this.$store.state.formData.departuredate=new Date(r.data.departuredate);
                        this.$store.state.formData.departuredate.setDate(r.data.departuredate.getDate() + 1);
                    }
                    this.updateFormData(this.$store.state.formData);
                    this.$store.state.isLoading=false;
                });
            },
            deleteReservation(){
                this.$store.state.isLoading = true;
                axios.post(this.deleteRoute,{"_method":"delete"}).then(()=>{
                    this.isDeleteModalActive=false;
                    this.fetchData(0);
                });
            },
            storeRole(){
                this.$store.state.currentRole=this.userRole;
                this.$store.dispatch('getRoleAction');
            },
            updateEditModal(val) {
                this.$refs.DataForm.updateEditModal(val);
            },
            updateFormData(val){
                let units=[];
                Object.values(this.transfers.units).forEach(unit=>{
                    units.push(unit.name);
                });
                if(units.includes(val.unit)){
                    this.$store.state.unitOptions=true;
                }else{
                    this.$store.state.unitOptions=false;
                }
                this.$store.state.formData=val;
                this.$store.dispatch('changeFormData');
            }
        },
        // computed: mapGetters(['line']),
        props: [
            'routeTransfers',
            'getReservations',
            '_token',
            'userRole',
            'storeRoute',
            'logoutRoute'
        ],
    }
</script>
