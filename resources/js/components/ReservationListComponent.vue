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

            <b-table-column field="reservation" label="RESERVATION" width="40" :td-attrs="columnTdAttrs" numeric v-slot="props">
                {{ props.row.reservation }}
            </b-table-column>

            <b-table-column field="name" label="NAME" :td-attrs="columnTdAttrs" v-slot="props">
                {{ props.row.name }}
            </b-table-column>

            <b-table-column field="email" label="E-MAIL" :td-attrs="columnTdAttrs" v-slot="props">
                {{ props.row.email }}
            </b-table-column>

            <b-table-column field="passengers" label="PASSENGERS" width="40" :td-attrs="columnTdAttrs" numeric v-slot="props">
                {{ props.row.passengers }}
            </b-table-column>

            <b-table-column field="service" label="SERVICE" :td-attrs="columnTdAttrs" v-slot="props">
                {{ props.row.service }}
            </b-table-column>

            <b-table-column field="unit" label="UNIT" :td-attrs="columnTdAttrs" v-slot="props">
                {{ props.row.unit }}
            </b-table-column>

            <b-table-column field="destination" label="DESTINATION" :td-attrs="columnTdAttrs" v-slot="props">
                {{ props.row.destination }}
            </b-table-column>

            <b-table-column class="centered" field="pricenormal" label="PRICE NORMAL" width="140" :td-attrs="columnTdAttrs" numeric v-slot="props">
                $ {{ props.row.pricenormal }} USD
            </b-table-column>

            <b-table-column class="centered" field="pricepaypal" label="PRICE PAYPAL" width="140" :td-attrs="columnTdAttrs" numeric v-slot="props">
                $ {{ props.row.pricepaypal }} USD
            </b-table-column>

            <!-- <b-table-column field="date" label="Date" :th-attrs="dateThAttrs" :td-attrs="columnTdAttrs" centered v-slot="props">
                <span class="tag is-success">
                    @{{ new Date(props.row.date).toLocaleDateString() }}
                </span>
            </b-table-column> -->

            <!-- <b-table-column label="Gender" :td-attrs="columnTdAttrs" v-slot="props">
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
    </section>
</template>


<script>
    export default {
        data() {
            return {
                data:[],
                isLoading: false,

            }
        },
        mounted(){
            this.fetchData();
        },
        methods: {
            fetchData(){
                axios.get(this.getReservations).then((r)=>{
                    this.data =r.data;
                });
            },
            dateThAttrs(column) {
                return column.label === 'Date' ? {
                    title: 'This title is sponsored by "th-attrs" prop',
                    class: 'has-text-success'
                } : null
            },
            columnTdAttrs(row, column) {
                if (row.id === 'Total') {
                    if (column.label === 'ID') {
                        return {
                            colspan: 4,
                            class: 'has-text-weight-bold',
                            style: {
                                'text-align': 'left !important'
                            }
                        }
                    } else if (column.label === 'Gender') {
                        return {
                            class: 'has-text-weight-semibold'
                        }
                    } else {
                        return {
                            style: {display: 'none'}
                        }
                    }
                }
                return null
            }
        },
        props: ['getReservations'],
    }
</script>
