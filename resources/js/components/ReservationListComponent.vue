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
                        <button class="btn btn-sm btn-primary mr-1"  @click="isEditModalActive = true; fetchEditingData(props.row.editRoute)">
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
                            type="is-danger" />
                    </footer>
                </div>

            </form>

        </b-modal>

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

                            <div class="columns is-mobile">
                                <div class="column is-half">
                                    <b-field label="Nombre">
                                        <b-input
                                            type="text"
                                            v-model="editingData.name"
                                            required>
                                        </b-input>
                                    </b-field>
                                </div>
                                <div class="column is-half">
                                    <b-field label="Email">
                                        <b-input
                                            type="email"
                                            v-model="editingData.email"
                                            required>
                                        </b-input>
                                    </b-field>
                                </div>
                            </div>

                            <div class="columns is-mobile">
                                <div class="column is-one-third">
                                    <b-field label="Passengers">
                                        <b-input
                                            type="number"
                                            v-model="editingData.passengers"
                                            required>
                                        </b-input>
                                    </b-field>
                                </div>
                                <div class="column is-one-third">
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
                                <div class="column is-one-third">
                                    <b-field label="Unit">
                                        <b-input
                                            type="text"
                                            v-model="editingData.unit"
                                            required>
                                        </b-input>
                                    </b-field>
                                </div>
                            </div>

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



                            <b-field label="Price Normal">
                                <b-input
                                    type="number"
                                    v-model="editingData.pricenormal"
                                    required>
                                </b-input>
                            </b-field>

                            <b-field label="Price PayPal">
                                <b-input
                                    type="number"
                                    v-model="editingData.pricepaypal"
                                    required>
                                </b-input>
                            </b-field>

                        </section>
                        <footer class="modal-card-foot">
                            <b-button
                                label="Cancelar"
                                @click="isEditModalActive=false" />
                            <b-button
                                label="Actualizar"
                                type="is-primary" />
                        </footer>
                    </div>


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
                    { title: 'E-MAIL', field: 'email', visible: false },
                    { title: 'PAX', field: 'passengers', visible: true },
                    { title: 'SERVICE', field: 'service', visible: true },

                    { title: 'DESTINATION', field: 'destination', visible: true },
                    { title: 'HOTEL', field: 'hotel', visible: true },

                    { title: 'ARRIVAL DATE', field: 'arrivaldate', visible: true },
                    { title: 'ARRIVAL TIME', field: 'arrivaltime', visible: true },
                    { title: 'ARRIVAL AIRLINE', field: 'arrivalairline', visible: true },
                    { title: 'ARRIVAL FLIGHT', field: 'arrivalflight', visible: true },

                    { title: 'DEPARTURE DATE', field: 'departuredate', visible: true },
                    { title: 'DEPARTURE TIME', field: 'departuretime', visible: true },
                    { title: 'DEPARTURE AIRLINE', field: 'departureairline', visible: true },
                    { title: 'DEPARTURE FLIGHT', field: 'departureflight', visible: true },


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
            }

        },
        props: [
            'getReservations',
        ],
    }
</script>
