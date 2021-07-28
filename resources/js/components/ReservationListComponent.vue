<template>
    <section>

        <b-table
            :data="isEmpty ? [] : data"
            :bordered="true"
            :striped="true"
            :hoverable="true"
            :loading="isLoading"
            :mobile-cards="true">

            <b-table-column field="id" label="ID" width="40" :td-attrs="columnTdAttrs" numeric v-slot="props">
                @{{ props.row.id }}
            </b-table-column>

            <b-table-column field="first_name" label="First Name" :td-attrs="columnTdAttrs" v-slot="props">
                @{{ props.row.first_name }}
            </b-table-column>

            <b-table-column field="last_name" label="Last Name" :td-attrs="columnTdAttrs" v-slot="props">
                @{{ props.row.last_name }}
            </b-table-column>

            <b-table-column field="date" label="Date" :th-attrs="dateThAttrs" :td-attrs="columnTdAttrs" centered v-slot="props">
                <span class="tag is-success">
                    @{{ new Date(props.row.date).toLocaleDateString() }}
                </span>
            </b-table-column>

            <b-table-column label="Gender" :td-attrs="columnTdAttrs" v-slot="props">
                <span>
                    <b-icon
                        v-if="props.row.id !== 'Total'"
                        pack="fas"
                        :icon="props.row.gender === 'Male' ? 'mars' : 'venus'">
                    </b-icon>
                    @{{ props.row.gender }}
                </span>
            </b-table-column>

            <template #empty>
                <div class="has-text-centered">No records</div>
            </template>

        </b-table>
    </section>
</template>


<script>
    export default {
        data() {
            const data = [
                { 'id': 1, 'first_name': 'Jesse', 'last_name': 'Simmons', 'date': '2016/10/15 13:43:27', 'gender': 'Male' },
                { 'id': 2, 'first_name': 'John', 'last_name': 'Jacobs', 'date': '2016/12/15 06:00:53', 'gender': 'Male' },
                { 'id': 3, 'first_name': 'Tina', 'last_name': 'Gilbert', 'date': '2016/04/26 06:26:28', 'gender': 'Female' },
                { 'id': 4, 'first_name': 'Clarence', 'last_name': 'Flores', 'date': '2016/04/10 10:28:46', 'gender': 'Male' },
                { 'id': 5, 'first_name': 'Anne', 'last_name': 'Lee', 'date': '2016/12/06 14:38:38', 'gender': 'Female' },
                { 'id': 'Total', 'gender': '2 Females, 3 Males' },
            ]

            return {
                data,
                isEmpty: false,
                isBordered: false,
                isStriped: false,
                isNarrowed: false,
                isHoverable: false,
                isFocusable: false,
                isLoading: false,
                hasMobileCards: true
            }
        },
        methods: {
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
        }
    }
</script>
