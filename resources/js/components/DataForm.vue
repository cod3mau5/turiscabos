<template>
<div>

        <!-- CREATED MODAL -->
        <b-modal
            v-model="$store.state.isEditModalActive"
            has-modal-card
            trap-focus
            :destroy-on-hide="!storeRoute ? true:false"
            aria-modal
            class="is-flex is-justify-content-center">
            <form action="">
                <div class="modal-card mx-auto">
                    <header class="modal-card-head">

                        <p class="modal-card-title" v-if="!storeRoute">
                            {{ userRole == "admin" || userRole == 'user' ? "EDITAR RESERVA":"CREAR RESERVA"}}
                        </p>
                        <p class="modal-card-title" v-else>
                            CREAR RESERVA
                        </p>

                        <div v-if="storeRoute && userRole != 'seller'">
                            <button
                            v-if="userRole != 'seller'"
                            type="button"
                            class="delete"
                            @click="goToHome()"/>
                        </div>
                        <div v-else>
                            <button
                                v-if="userRole === 'admin' || userRole == 'user'"
                                type="button"
                                class="delete"
                                @click="updateEditModal(false)"/>
                            <button
                                v-else
                                type="button"
                                class="delete is-danger"
                                @click="logout()"/>
                        </div>
                    </header>
                    <section class="modal-card-body">
                        <!-- TICKET INFO -->
                        <div class="columns is-mobile" v-if="userRole == 'seller'|| $store.state.formData.origin == 'panel_seller'">
                            <div class="column is-full">
                                <b-field label="Numero de Ticket">
                                    <b-input
                                    placeholder="Numero de ticket del vendedor"
                                    type="text"
                                    v-model="$store.state.formData.numeroticket"
                                    required>
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                        <!-- CONTACT INFO -->
                        <div class="columns is-mobile">
                            <div class="column is-one-third">
                                <b-field label="Nombre">
                                    <b-input
                                        placeholder="Nombre"
                                        name="nombre"
                                        type="text"
                                        v-model="$store.state.formData.name"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-third">
                                 <b-field label="Email"
                                    message="">
                                    <b-input
                                        class="valEmail"
                                        type="email"
                                        name="email"
                                        placeholder="Email"
                                        v-model="$store.state.formData.email"
                                        required>
                                    </b-input>
                                    <input type="hidden" id="emailHASH" name="emailHASH" value="">
                                </b-field>
                            </div>
                            <div class="column is-one-third">
                                <b-field label="Phone">
                                    <b-input
                                        type="tel"
                                        v-model="$store.state.formData.phone"
                                        placeholder="Phone"
                                        id="phone-bdb4"
                                        name="telefono"
                                        class="valTel"
                                        maxlength="10"
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
                                        placeholder="Passengers"
                                        type="number"
                                        v-model="$store.state.formData.passengers"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Service">
                                    <b-select
                                        v-model="$store.state.formData.service"
                                        placeholder="Type of Service"
                                        required>
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
                                    <b-field label="Unit"
                                        v-if="$store.state.unitOptions">
                                        <b-select
                                            v-model="$store.state.formData.unit"
                                            placeholder="Unit"
                                            required>
                                        <option v-for="(option, index) in transfers.units"
                                                :key="index"
                                                :value="option.name == 'other'?'':option.name">
                                            {{option.name}}
                                        </option>

                                        </b-select>
                                    </b-field>
                                    <b-field  label="Unit" v-show="!$store.state.unitOptions">
                                        <b-input
                                                placeholder="Type Other Unit"
                                                type="text"
                                                v-model="$store.state.formData.unit"
                                                required>
                                        </b-input>
                                    </b-field>
                                    <b-field v-if="!$store.state.unitOptions">
                                    <b-button
                                        @click="$store.state.unitOptions=true;$store.state.formData.unit='Private Sedan'"
                                        type="is-info is-small"
                                        label="show unit list"/>
                                    </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Ocation">
                                    <b-select
                                        v-model="$store.state.formData.ocation"
                                        placeholder="Ocation"
                                        required>

                                        <option v-for="(option, index) in transfers.ocation" :key="index">
                                            {{option.name}}
                                        </option>

                                    </b-select>
                                </b-field>
                            </div>
                        </div>

                        <!-- DESTINATION & HOTEL -->
                        <div class="columns is-mobile">
                            <div class="column is-one-quarter">
                                <b-field label="Destination">
                                     <b-select
                                        v-model="$store.state.formData.destination"
                                        placeholder="Select Destination"
                                        required>
                                            <option value="Airport - Hotel">
                                                Airport - Hotel
                                            </option>

                                            <option value="Hotel - Airport">
                                                Hotel - Airport
                                            </option>
                                        </b-select>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Hotel">
                                    <b-select
                                        v-model="$store.state.formData.hotel"
                                        placeholder="Hotel"
                                        required>
                                        <option v-for="(option, index) in transfers.hotel" :key="index">
                                            {{option.name}}
                                        </option>
                                    </b-select>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="No. Unidad">
                                    <b-input
                                            placeholder="Type #unit"
                                            type="text"
                                            v-model="$store.state.formData.numerounidad"
                                            required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter"
                                v-if="userRole != 'seller' && $store.state.formData.origin != 'panel_seller'">
                                <b-field label="Nombre chofer">
                                    <b-input
                                            placeholder="Nombre del chofer"
                                            type="text"
                                            v-model="$store.state.formData.nombrechofer"
                                            required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter" v-else>
                                <b-field label="Nombre vendedor">
                                    <b-input
                                            placeholder="Nombre vendedor"
                                            type="text"
                                            v-model="$store.state.formData.nombrevendedor"
                                            required>
                                    </b-input>
                                </b-field>
                            </div>

                        </div>

                        <!-- ARRIVAL INFO -->
                        <div class="columns is-mobile">
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Date">
                                        <b-datepicker
                                            v-model="$store.state.formData.arrivaldate"
                                            locale="en-CA"
                                            placeholder="Click to select..."
                                            :min-date="new Date()"
                                            trap-focus
                                            required>
                                        </b-datepicker>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Time">
                                    <b-timepicker
                                        v-model="$store.state.formData.arrivaltime"
                                        placeholder="Click to select..."
                                        editable
                                        hour-format="24"
                                        locale="es-MX"
                                        required>
                                    </b-timepicker>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Ariline">
                                    <b-input
                                        placeholder="Arrival airline"
                                        type="text"
                                        v-model="$store.state.formData.arrivalairline"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-one-quarter">
                                <b-field label="Arrival Flight">
                                    <b-input
                                        placeholder="Arrival flight"
                                        type="text"
                                        v-model="$store.state.formData.arrivalflight"
                                        required>
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                        <!-- DEPARTURE INFO -->
                        <transition name="fade">
                            <div class="columns is-mobile" v-show="$store.state.formData.service=='Round Trip'">
                                <div class="column is-one-quarter">
                                    <b-field label="Departure Date">
                                        <b-datepicker
                                            v-model="$store.state.formData.departuredate"
                                            locale="en-CA"
                                            placeholder="Click to select..."
                                            :min-date="$store.state.formData.arrivaldate"
                                            trap-focus
                                            required>
                                        </b-datepicker>
                                    </b-field>
                                </div>
                                <div class="column is-one-quarter">
                                    <b-field label="Departure Time">
                                        <b-timepicker
                                            v-model="$store.state.formData.departuretime"
                                            placeholder="Click to select..."
                                            editable
                                            hour-format="24"
                                            locale="es-MX"
                                            required>
                                        </b-timepicker>
                                    </b-field>
                                </div>
                                <div class="column is-one-quarter">
                                    <b-field label="Departure Ariline">
                                        <b-input
                                            placeholder="Departure Ariline"
                                            type="text"
                                            v-model="$store.state.formData.departureairline"
                                            required>
                                        </b-input>
                                    </b-field>
                                </div>
                                <div class="column is-one-quarter">
                                    <b-field label="Departure Flight">
                                        <b-input
                                            placeholder="Departure Flight"
                                            type="text"
                                            v-model="$store.state.formData.departureflight"
                                            required>
                                        </b-input>
                                    </b-field>
                                </div>
                            </div>
                        </transition>

                        <!-- EXTRA OPTIONS -->
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <b-field>
                                    <b-checkbox v-model="$store.state.formData.babysit">Baby chair</b-checkbox>
                                </b-field>
                            </div>
                            <div class="column is-half">
                                <b-field>
                                    <b-checkbox v-model="$store.state.formData.shoppingstop">Shopping Stop</b-checkbox>
                                </b-field>
                            </div>
                        </div>

                        <!-- PRICES -->
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <b-field label="Price Normal">
                                    <b-input
                                        placeholder="Price Normal"
                                        type="number"
                                        v-model="$store.state.formData.pricenormal"
                                        required
                                        :disabled="userRole=='user'">
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="column is-half">
                                <b-field label="Price PayPal">
                                    <b-input
                                        placeholder="Price Paypal"
                                        type="number"
                                        v-model="$store.state.formData.pricepaypal"
                                        required
                                        :disabled="userRole=='user'">
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                        <!-- COMMENTS -->
                        <div class="columns is-mobile">
                            <div class="column is-full">
                                <b-field label="Comments">
                                    <b-input maxlength="200" type="textarea"
                                    v-model="$store.state.formData.comments">
                                    </b-input>
                                </b-field>
                            </div>
                        </div>

                    </section>

                    <footer class="modal-card-foot is-justify-content-flex-end">
                        <div v-if="!storeRoute">
                            <b-button
                                label="Cancelar"
                                @click="updateEditModal(false)" />
                            <b-button
                                label="Actualizar"
                                type="is-primary"
                                @click="validateReservation(true)"/>
                        </div>
                        <div v-else>
                            <b-button
                                label="Crear Reserva"
                                type="is-success"
                                @click="validateReservation()"/>
                        </div>
                    </footer>

                    <!-- MODAL ERRORS-->
                    <div
                        class="modal fade"
                        id="modalAlert"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="modalAlertCenterTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalAlertTitle"><b>¡Atención!</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p id="modalAlertBody">
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-card -->
            </form>
            <b-loading  v-model="$store.state.isLoading"></b-loading>
        </b-modal>

        <!-- RESERVATION CREATED MODAL -->
        <b-modal
            v-model="isModalReservationCreated"
            has-modal-card
            trap-focus
            destroy-on-hide
            aria-role="dialog"
            aria-label="Example Modal"
            aria-modal>
            <form action="">
                <div class="modal-card" style="width: auto">
                    <header class="modal-card-head has-text-centered">
                        <p class="modal-card-title">RESERVACION CREADA!</p>
                    </header>
                    <section class="modal-card-body has-text-centered">
                        <b-field class="is-size-2" label="Quieres crear otra reserva?">
                        </b-field>

                    </section>
                    <footer class="modal-card-foot is-justify-content-flex-end">
                        <b-button
                            label="No, salir"
                            type="is-danger"
                            @click="logout"/>

                        <b-button
                            label="Si"
                            type="is-info"
                            @click="isModalReservationCreated=false;clearFormData()"/>
                    </footer>
                </div>

            </form>
            <b-loading  v-model="$store.state.isLoading"></b-loading>
        </b-modal>

</div>
</template>
<style scoped>
    .delete.is-danger{
        background-color: rgba(230, 57, 70,1);
    }
    .is-size-2 span.label{
        font-size: 2rem !important;
    }
    @media screen and (min-width: 769px){
        .modal-card {
            width: 720px !important;
        }
    }
</style>
<script>
import { mapGetters } from 'vuex'
export default {
    name:"DataForm",
    data:()=>
    ({
            isModalReservationCreated:false,
            transfers:[],
            dataToValidate:{
                'numeroticket': true,
                'passengers': true,
                'service': true,
                'unit': true,
                'ocation': true,

                'destination': true,
                'hotel': true,
                'numerounidad': true,

                'nombrevendedor':false,
                'nombrechofer': false,

                'arrivaldate': true,
                'arrivaltime': true,
                'arrivalairline': true,
                'arrivalflight': true,

                'departuredate': false,
                'departuretime': false,
                'departureairline': false,
                'departureflight': false,

                'pricenormal': true,
                'pricepaypal': true
            }
    }),
    mounted() {
        this.getTransfers();
        this.setUnitOptions();
        this.dataToValidate.nombrechofer=this.userRole=='seller' ? false: true;
        this.dataToValidate.nombrevendedor=this.userRole=='seller' ? true: false;
        var vm=this;
        $(document).ready(function ()
            {
                $(document).on('keyup', '.valEmail input', function (event) {
                    event.preventDefault();
                    var respEmail;
                    var email = $(this).val();
                    email = email.replace(/ /g, '');
                    $(this).val(email.toLowerCase());
                    // vm.shaEmail(email);
                    respEmail = vm.valEmail(email);
                    if (respEmail == 1) {
                        $('.valEmail input').removeClass('is-danger');
                        $('.valEmail span').css('display', 'none');
                        $('p.errormail').css('display', 'none');
                        $('p.successmail').css('display', 'block');
                        if($('.valEmail').find('p.successmail').length == 0){
                            $('.valEmail').append('<p class="help successmail" style="color: green; font-size: 12px;">Email válido.</p>');
                        }
                    }else{
                        $('.valEmail input').addClass('is-danger');
                        $('.valEmail span').css('display', 'block');
                        $('p.successmail').css('display', 'none');
                        $('p.errormail').css('display', 'block');
                        if($('.valEmail').find('p.errormail').length == 0){
                            $('.valEmail').append('<p class="help errormail is-danger">Email invalido.</p>');
                        }
                    }
                });
                $(document).on('keyup', '.valTel input',
                function (event) {
                    var respTel;
                    event.preventDefault();
                    console.log('- event keyup valTel');
                    var tel = $(this).val();
                    tel = tel.replace(/ /g, '');
                    tel = tel.replace(/\D/g, '');
                    respTel = vm.valTel(tel);
                    if (respTel == 1) {
                        $('p.error').css('display', 'none');
                        $('p.success').css('display', 'block');
                        if($('.valTel').find('p.success').length == 0){
                            $('p.error').css('display', 'none');
                            $('.valTel').append('<p class="help success" style="color: green; font-size: 12px;">Número válido.</p>');
                        }
                    } else {
                        $('p.success').css('display', 'none');
                        $('p.error').css('display', 'block');
                        if($('.valTel').find('p.error').length == 0){
                            $('.valTel').append('<p class="help error is-danger">Debe proporcionar un Número con 10 dígitos.</p>');
                        }
                    }
                    $(this).val(tel);
                }
                );
            }
        );
    },
    methods:{
        setUnitOptions(){
            if(this.userRole == 'seller' || this.storeRoute){
                this.$store.state.unitOptions=true;
            }
        },
        fetchData(val){
                let vm=this;
                vm.isLoading = true;
                if(val){
                    axios.get(vm.routeTransfers).then((r)=>{
                        vm.transfers = r.data;
                        if(vm.userRole == "admin"){
                            let other={name:'other'};
                            vm.transfers.units.push(other);
                        }
                    });
                }
                axios.get(vm.getReservations).then((r)=>{
                    vm.$store.state.data =r.data;
                    vm.isLoading=false;
                });
        },
        getTransfers(){
            axios.get(this.routeTransfers).then((r)=>{
                this.transfers = r.data;
                if(this.userRole == "admin"){
                    let other={name:'other'};
                    this.transfers.units.push(other);
                }
            });
        },
        updateEditModal(val){
            this.$store.state.isEditModalActive=val;
        },
        storeReservation(){
                this.$store.state.isLoading = true;
                this.formData._token = this._token;
                // lets parse arrivaldate object into string (yyyy-mm-dd)
                let arrivalDate = this.formData.arrivaldate;
                let day = arrivalDate.getDate();
                let month = arrivalDate.getMonth();
                let year = arrivalDate.getFullYear();
                if(month < 10 ){month = month + 1;/*Be careful! January is 0 not 1*/month = '0' + month;}
                if(day < 10 ){ day='0'+day;}
                let arrivalDateString = year + "-" + month + "-" + day;
                //lets parse arrivaltime object into string (hh:mm:ss)
                let arrivalTime= this.formData.arrivaltime;
                let hours=arrivalTime.getHours();
                let minutes=arrivalTime.getMinutes();
                let seconds=arrivalTime.getSeconds();
                if(hours < 10){hours= "0" + arrivalTime.getHours();}
                if(minutes < 10){minutes= "0" + arrivalTime.getMinutes();}
                if(seconds < 10){seconds= "0" + arrivalTime.getSeconds();}
                let arrivalTimeString =  hours+":" + minutes+":" + seconds;
                //lets put parsed data into new object (avoiding issues with buefy datetime and time inputs)
                let currentFormData = this.formData;
                currentFormData.arrivaldate=arrivalDateString;
                currentFormData.arrivaltime=arrivalTimeString;

                if(this.formData.service == 'Round Trip'){
                    // lets do the same shit that we do with arrivaldate but this time departuredate
                    let departureDate = this.formData.departuredate;
                    day = departureDate.getDate();
                    month = departureDate.getMonth();
                    year = departureDate.getFullYear();
                    if(month < 10 ){month = month + 1;month = '0' + month;}
                    if(day < 10 ){ day='0'+day;}
                    let departureDateString = year + "-" + month + "-" + day;
                    let departureTime= this.formData.departuretime;
                    hours=departureTime.getHours();
                    minutes=departureTime.getMinutes();
                    seconds=departureTime.getSeconds();
                    if(hours < 10){hours= "0" + departureTime.getHours();}
                    if(minutes < 10){minutes= "0" + departureTime.getMinutes();}
                    if(seconds < 10){seconds= "0" + departureTime.getSeconds();}
                    let departureTimeString =  hours+":" + minutes+":" + seconds;
                    currentFormData.departuredate=departureDateString;
                    currentFormData.departuretime=departureTimeString;
                }
                //we are ready to update data
                currentFormData.origin='panel_'+this.userRole;
                axios.post(this.storeRoute,currentFormData).then((r)=>{
                    this.$store.state.isLoading=false;
                    this.$store.state.isEditModalActive=false;
                    this.isModalReservationCreated=true;
                });
        },
        updateReservation(){
                this.$store.state.isLoading = true;
                this.formData._token = this._token;
                // lets parse arrivaldate object into string (yyyy-mm-dd)
                let arrivalDate = this.formData.arrivaldate;
                let day = arrivalDate.getDate();
                let month = arrivalDate.getMonth();
                let year = arrivalDate.getFullYear();
                if(month < 10 ){month = month + 1;/*Be careful! January is 0 not 1*/month = '0' + month;}
                if(day < 10 ){ day='0'+day;}
                let arrivalDateString = year + "-" + month + "-" + day;
                //lets parse arrivaltime object into string (hh:mm:ss)
                let arrivalTime= this.formData.arrivaltime;
                let hours=arrivalTime.getHours();
                let minutes=arrivalTime.getMinutes();
                let seconds=arrivalTime.getSeconds();
                if(hours < 10){hours= "0" + arrivalTime.getHours();}
                if(minutes < 10){minutes= "0" + arrivalTime.getMinutes();}
                if(seconds < 10){seconds= "0" + arrivalTime.getSeconds();}
                let arrivalTimeString =  hours+":" + minutes+":" + seconds;
                //lets put parsed data into new object (avoiding issues with buefy datetime and time inputs)
                let currentFormData = this.formData;
                currentFormData.arrivaldate=arrivalDateString;
                currentFormData.arrivaltime=arrivalTimeString;

                if(this.formData.service == 'Round Trip'){
                    // lets do the same shit that we do with arrivaldate but this time departuredate
                    let departureDate = this.formData.departuredate;
                    day = departureDate.getDate();
                    month = departureDate.getMonth();
                    year = departureDate.getFullYear();
                    if(month < 10 ){month = month + 1;month = '0' + month;}
                    if(day < 10 ){ day='0'+day;}
                    let departureDateString = year + "-" + month + "-" + day;
                    let departureTime= this.formData.departuretime;
                    hours=departureTime.getHours();
                    minutes=departureTime.getMinutes();
                    seconds=departureTime.getSeconds();
                    if(hours < 10){hours= "0" + departureTime.getHours();}
                    if(minutes < 10){minutes= "0" + departureTime.getMinutes();}
                    if(seconds < 10){seconds= "0" + departureTime.getSeconds();}
                    let departureTimeString =  hours+":" + minutes+":" + seconds;
                    currentFormData.departuredate=departureDateString;
                    currentFormData.departuretime=departureTimeString;
                }

                //we are ready to update data
                axios.put(this.updateRoute,currentFormData).then((r)=>{
                    this.$store.state.isLoading=false;
                    this.$store.state.isEditModalActive=false;
                    this.fetchData(0);
                });
        },
        logout(){
            axios.post(this.$store.state.logoutRoute,this._token).then(()=>{
                window.location='/home';
            });
        },
        goToHome(){
            window.location="/home";
        },
        validateReservation(val) {
            var vm=this;
            var nombre;
            var error = 0;
            var msgError = '';
            var email = $('input[name="email"]').val();
            email=email.replace(/ /g,'');
            var nombre=$('input[name = "nombre"]').val();
            nombre=nombre.replace(/ /g,'');
            var telefono=$('input[name = "telefono"]').val();
            var resEmail = this.valEmail(email);
            vm.userRole=='seller'?vm.dataToValidate.numeroticket=true:vm.dataToValidate.numeroticket=false;
            vm.$store.state.formData.origin == 'panel_seller'?vm.dataToValidate.numeroticket=true:vm.dataToValidate.numeroticket=false;
            if((vm.userRole == "admin" || vm.userRole == "user") && vm.$store.state.formData.origin == 'panel_seller'){
                vm.dataToValidate.nombrechofer=false;
                vm.dataToValidate.nombrevendedor=true;
            }else{
                vm.dataToValidate.nombrevendedor=false;
            }
            if (resEmail != 1) {
                if(email.length == 0){
                    msgError += "- Debe indicar un <b>Email</b><br>";
                }else{
                    msgError += "- Debe indicar un <b>Email válido.</b><br>";
                }
                error++;
            }
            if (nombre == '' || nombre.length <= 2) {
                if(nombre.length == 0) {
                    msgError += '- Debe indicar un <b>Nombre</b><br>';
                }else{
                    msgError += '- Debe indicar un <b>Nombre</b> válido. (mayor a 2 caracteres)<br>';
                }
                error++;
            }
            var respTel = this.valTel(telefono);
            if (respTel != 1) {
                msgError += '- Debe indicar un <b>Teléfono de 10 digitos.</b><br>';
                error++;
            }
            if(vm.formData.service=='Round Trip'){
                vm.dataToValidate.departuredate=true;
                vm.dataToValidate.departuretime=true;
                vm.dataToValidate.departureairline=true;
                vm.dataToValidate.departureflight=true;
            }else{
                vm.dataToValidate.departuredate=false;
                vm.dataToValidate.departuretime=false;
                vm.dataToValidate.departureairline=false;
                vm.dataToValidate.departureflight=false;
            }
            var arrayToValidate=Object.keys(vm.formData);
            Object.keys(vm.dataToValidate).forEach(function(validatorName){
                if(vm.dataToValidate[validatorName]){/*preguntamos si hay que validar?*/
                    if(!arrayToValidate.includes(validatorName) || vm.formData[validatorName] == '' || vm.formData[validatorName] == null){
                            msgError += '- Debe indicar un <b>'+validatorName+'</b><br>';
                            error++;
                    }
                }
            });

            console.log('error: '+error);
            if(error>0){
                $('#modalAlertBody').html(msgError);
                $('#modalAlert').modal('show');
            }else{
                if(val){// if parameter entered to this function is true
                    vm.updateReservation();
                }else{
                    vm.storeReservation();
                }
            }
        },
        valEmail(email){
            var emailRegex;
            var resEmail;
            console.log(' - function valEmail: '+email);
            emailRegex=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            resEmail=emailRegex.test(email);
            resEmail=resEmail==true?1:0;
            console.log(' - Resultado Email: '+resEmail);
            return resEmail;
        },
        valTel(telefono) {
            var telefono=telefono;
            var respTel;
            console.log(' - function valTel: '+telefono)
            var regexRepeat = /^(?!.*(.)\1{6})/;
            telefono = telefono.replace(/ /g, '');
            telefono = telefono.replace(/\D/g, '');
            var resRepeat = regexRepeat.test(telefono);
            respTel = (telefono.length == 10 && resRepeat == true) ? 1 : 0; console.log(' - Resultado Telefono: '+respTel);
            return respTel;
        },
        shaEmail(email){
            console.log('- function: shaEmail('+email+') ');
            $.ajax({
                type:"GET",
                url:"API/sha256.php",
                data:{' text ':email},
                success:function(response){
                    response=$.parseJSON(response);
                    console.log(response.sha);
                    $('#emailHASH ').val(response.sha);
                }
            });
        },
        clearFormData(){
            this.$store.state.formData=[];
        }
    },
    computed: {
        ...mapGetters({
            formData: 'formData'
        })
    },
    watch:{
        'formData.unit':function(val){
            if(val  == ""){return this.$store.state.unitOptions=false;}
        },
        'formData.arrivaldate':function(val){
            if(Object.prototype.toString.call(val ) === '[object Date]'){
                return val;
            }else{return this.formData.arrivaldate= new Date(val);}
        },
        'formData.arrivaltime':function(val){
            let d= this.formData.arrivaldate;
            if(Object.prototype.toString.call(val ) === '[object Date]'){
                return val;
            }else{
                let [hours, minutes, seconds] = val.split(':');
                d.setHours(+hours);
                d.setMinutes(minutes);
                d.setSeconds(seconds);
                return this.formData.arrivaltime=d;
            }
        },
        'formData.departuredate':function(val){
            if(val){
                if(Object.prototype.toString.call(val ) === '[object Date]'){
                    return val;
                }else{return this.formData.departuredate= new Date(val);}
            }else{return this.formData.departuredate= Date();}
        },
        'formData.departuretime':function(val){
            if(val && this.formData.service == 'Round Trip'){
                if(Object.prototype.toString.call(val ) === '[object Date]'){
                    return this.formData.departuretime=val;
                }else{
                    let date= this.formData.departuredate;
                        let [hours, minutes, seconds] = val.split(':');
                        date.setHours(+hours);
                        date.setMinutes(minutes);
                        date.setSeconds(seconds);
                    return this.formData.departuretime=date;
                }
            }else{return new Date();}
        }
    },
    props: [
        'routeTransfers',
        'getReservations',
        '_token',
        'userRole',
        'updateRoute',
        'storeRoute'
    ],

}
</script>
