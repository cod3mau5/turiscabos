<template>
    <section>

        <b-table
            :data="data ? data : []"
            bordered
            striped
            hoverable
            mobile-cards
            narrowed
            :loading="isLoading">

            <b-table-column field="reservation" label="RESERVATION" width="40"  numeric v-slot="props">
                {{ props.row.reservation }}
            </b-table-column>

            <b-table-column field="name" label="NAME"  v-slot="props">
                {{ props.row.name }}
            </b-table-column>

            <b-table-column field="email" label="E-MAIL"  v-slot="props">
                {{ props.row.email }}
            </b-table-column>

            <b-table-column field="phone" label="PHONE"  v-slot="props">
                {{ props.row.phone }}
            </b-table-column>

            <b-table-column field="passengers" label="PAX" width="25"  numeric v-slot="props">
                {{ props.row.passengers }}
            </b-table-column>

            <b-table-column field="service" label="SERVICE"  v-slot="props">
                {{ props.row.service }}
            </b-table-column>

            <b-table-column field="unit" label="UNIT"  v-slot="props">
                {{ props.row.unit }}
            </b-table-column>

            <b-table-column field="destination" label="DESTINATION"  v-slot="props">
                {{ props.row.destination }}
            </b-table-column>

            <b-table-column field="hotel" label="HOTEL"  v-slot="props">
                {{ props.row.hotel }}
            </b-table-column>

            <b-table-column class="centered" field="pricenormal" label="PRICE NORMAL" width="140"  numeric v-slot="props">
                $ {{ props.row.pricenormal }} USD
            </b-table-column>

            <b-table-column class="centered" field="pricepaypal" label="PRICE PAYPAL" width="140"  numeric v-slot="props">
                $ {{ props.row.pricepaypal }} USD
            </b-table-column>

            <b-table-column  label="ACTIONS" v-slot="props">
                <div class="is-flex">
                    <button class="btn btn-sm btn-primary mr-1"  @click="isEditModalActive = true; fetchEditingData(props.row.editRoute)">
                        Editar
                    </button>
                    <button class="btn btn-sm btn-danger " @click="isDeleteModalActive = true; deleteRoute=props.row.deleteRoute">
                        Eliminar
                    </button>
                </div>

            </b-table-column>

            <!-- <b-table-column field="date" label="Date" :th-attrs="dateThAttrs"  centered v-slot="props">
                <span class="tag is-success">
                    @{{ new Date(props.row.date).toLocaleDateString() }}
                </span>
            </b-table-column> -->

            <!-- <b-table-column label="Gender"  v-slot="props">
                <span>
                    <b-icon
                        v-if="props.row.id !== 'Total'"
                        pack="fas"
                        :icon="props.row.gender === 'Male' ? 'mars' : 'venus'">
                    </b-icon>
                    @{{ props.row.gender }}
                </span>
            </b-table-column> -->

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
            :loading="isLoading"
            aria-modal
            class="is-flex is-justify-content-center">
            <form action="">

                    <div class="modal-card mx-auto" style="">
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

        </b-modal>
    </section>

</template>
<style lang="scss" scoped>
</style>

<script>
    export default {
        data() {
            return {
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
