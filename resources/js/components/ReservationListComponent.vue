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
            :data="data ? data : []"
            bordered
            striped
            hoverable
            mobile-cards
            narrowed
            :loading="isLoading">

                <b-table-column  label="ACTIONS" :sticky="true" headerClass="is-sticky-column-two" cellClass="is-sticky-column-two" v-slot="props">
                    <div class="is-flex">
                        <button class="btn btn-sm btn-primary mr-1"
                                @click="isEditModalActive = true;
                                        updateRoute=props.row.updateRoute;
                                        fetchEditingData(props.row.editRoute);">
                            Editar
                        </button>
                        <button class="btn btn-sm btn-danger " @click="isDeleteModalActive = true; deleteRoute=props.row.deleteRoute">
                            Eliminar
                        </button>
                    </div>
                </b-table-column>
                <b-table-column v-for="(column, index) in columnsTemplate"
                    :key="index"
                    :label="column.title"
                    :visible="column.visible"
                    v-slot="props">
                    {{ props.row[column.field] }}
                </b-table-column>



                <template #empty>
                    <div class="has-text-centered">No records</div>
                </template>

        </b-table>

        <!-- UPDATE MODAL -->
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
            <b-loading  v-model="isLoading"></b-loading>
        </b-modal>

        <!-- EDIT MODAL -->
        <b-modal
            v-model="isEditModalActive"
            has-modal-card
            trap-focus
            :destroy-on-hide="true"
            aria-modal
            class="is-flex is-justify-content-center">
            <form action="">
                <div class="modal-card mx-auto">

                    <header class="modal-card-head">
                        <p class="modal-card-title">EDITAR</p>
                        <button
                            type="button"
                            class="delete"
                            @click="isEditModalActive=false"/>
                    </header>

                    <section class="modal-card-body">

                        <!-- CONTACT INFO -->
                        <div class="columns is-mobile">
                            <div class="column is-one-third">
                                <b-field label="Nombre">
                                    <b-input
                                        type="text"
                                        v-model="editingData.name"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-third">
                                <b-field label="Email">
                                    <b-input
                                        type="email"
                                        v-model="editingData.email"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-third">
                                <b-field label="Phone">
                                    <b-input
                                        type="phone"
                                        v-model="editingData.phone"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                        <!-- SERVICE INFO -->
                        <div class="columns is-mobile">
                            <div class="column is-one-quarter">
                                <b-field label="Passengers">
                                    <b-input
                                        type="number"
                                        v-model="editingData.passengers"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Service">
                                    <b-select  v-model="editingData.service">
                                        <option value="One Way">
                                            One Way
                                        </option>
                                        <option value="Round Trip">
                                            Round Trip
                                        </option>
                                    </b-select>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Unit">
                                    <b-input
                                        type="text"
                                        v-model="editingData.unit"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Ocation">
                                    <b-select  v-model="editingData.ocation">

                                        <option value="Nope">
                                            Nope
                                        </option>

                                        <option value="Anniversary">
                                            Anniversary
                                        </option>

                                        <option value="Bachelorette party">
                                            Bachelorette party
                                        </option>

                                        <option value="Birthday">
                                            Birthday
                                        </option>

                                        <option value="Wedding">
                                            Wedding
                                        </option>

                                    </b-select>
                                </b-field>
                            </div>
                        </div>

                        <!-- DESTINATION & HOTEL -->
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <b-field label="Destination">
                                    <b-input
                                        type="text"
                                        v-model="editingData.destination"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-half">
                                <b-field label="Hotel">
                                    <b-input
                                        type="text"
                                        v-model="editingData.hotel"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                        <!-- ARRIVAL INFO -->
                        <div class="columns is-mobile">
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Date">
                                    <b-input
                                        type="text"
                                        v-model="editingData.arrivaldate"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Time">
                                    <b-input
                                        type="text"
                                        v-model="editingData.arrivaltime"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Ariline">
                                    <b-input
                                        type="text"
                                        v-model="editingData.arrivalairline"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Flight">
                                    <b-input
                                        type="text"
                                        v-model="editingData.arrivalflight"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                        <!-- DEPARTURE INFO -->
                        <div class="columns is-mobile">
                            <div class="column is-one-quarter">
                                <b-field label="Departure Date">
                                    <b-input
                                        type="text"
                                        v-model="editingData.departuredate"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Departure Time">
                                    <b-input
                                        type="text"
                                        v-model="editingData.departuretime"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Departure Ariline">
                                    <b-input
                                        type="text"
                                        v-model="editingData.departureairline"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Departure Flight">
                                    <b-input
                                        type="text"
                                        v-model="editingData.departureflight"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                        </div>
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <b-field>
                                    <b-checkbox v-model="editingData.babysit">Baby chair</b-checkbox>
                                </b-field>
                            </div>
                            <div class="column is-half">
                                <b-field>
                                    <b-checkbox v-model="editingData.shoppingstop">Shopping Stop</b-checkbox>
                                </b-field>
                            </div>
                        </div>

                        <!-- PRICES -->
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <b-field label="Price Normal">
                                    <b-input
                                        type="number"
                                        v-model="editingData.pricenormal"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-half">
                                <b-field label="Price PayPal">
                                    <b-input
                                        type="number"
                                        v-model="editingData.pricepaypal"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                        <!-- COMMENTS -->
                        <div class="columns is-mobile">
                            <div class="column is-full">
                                <b-field label="Comments">
                                    <b-input maxlength="200" type="textarea"
                                    v-model="editingData.comments">
                                    </b-input>
                                </b-field>
                            </div>
                        </div>



                    </section>

                    <footer class="modal-card-foot">
                        <b-button
                            label="Cancelar"
                            @click="isEditModalActive=false" />
                        <b-button
                            label="Actualizar"
                            type="is-primary"
                            @click="updateReservation()"/>
                    </footer>

                </div><!-- /.modal-card -->
            </form>
            <b-loading  v-model="isLoading"></b-loading>
        </b-modal>

    </section>

</template>
<style >
    span.check{
        width: 1em!important;
        height: 1em!important;
    }
    .table-wrapper{
        overflow:auto !important;
    }
    .is-sticky-column-one {
        background: #167df0 !important;
        color: white !important;
    }
    .is-sticky-column-two {
        background: #23d160 !important;
        color: white !important;
    }
</style>

<script>
    export default {
        data() {
            return {
                columnsTemplate: [
                    { title: 'RESERVATION', field: 'reservation', visible: false },
                    { title: 'NAME', field: 'name', visible: true },
                    { title: 'E-MAIL', field: 'email', visible: true },
                    { title: 'PAX', field: 'passengers', visible: true },
                    { title: 'SERVICE', field: 'service', visible: true },

                    { title: 'DESTINATION', field: 'destination', visible: true },
                    { title: 'HOTEL', field: 'hotel', visible: true },

                    { title: 'ARRIVAL DATE', field: 'arrivaldate', visible: true },
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
                data:[],
                isLoading: false,
                isDeleteModalActive: false,
                isEditModalActive: false,
                deleteRoute:'',
                updateRoute:'',
                editingData:[]
            }
        },
        mounted(){
            this.fetchData();
        },
        methods: {
            fetchData(){
                this.isLoading = true;
                axios.get(this.getReservations).then((r)=>{
                    this.data =r.data;
                    this.isLoading=false;
                });
            },
            fetchEditingData(editRoute){
                this.isLoading = true;
                axios.get(editRoute).then((r)=>{
                    this.editingData =r.data;
                    this.isLoading=false;
                });
            },
            deleteReservation(){
                this.isLoading = true;
                axios.post(this.deleteRoute,{"_method":"delete"}).then(()=>{
                    this.fetchData();
                    this.isDeleteModalActive=false;
                });
            },
            updateReservation(){
                this.isLoading = true;
                this.editingData._token = this._token;
                axios.put(this.updateRoute,this.editingData).then((r)=>{
                    this.isLoading=false;
                });
            }

        },
        props: [
            'getReservations',
            '_token'
        ],
    }
</script>
