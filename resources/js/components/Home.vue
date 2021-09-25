<template>
    <div class="row">
        <div  v-for="semester in semesters" :key="semester.id">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">{{ semester.name }} Semester</div>

                    <div class="card-body">
                        <ul>
                            <li> <router-link :to="{ name: 'groups', params: { id: semester.id } }">
                            View Course Groups</router-link>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
        data() {
            return {
            semesters: [],
            };
        },
        created() {
            this.axios.get("http://localhost:8000/api/semesters").then((response) => {
            this.semesters = response.data;
            });
        },
        methods: {
            deleteStudent(id) {
            this.axios
                .delete(`http://localhost:8000/api/students/${id}`)
                .then((response) => {
                let i = this.students.map((data) => data.id).indexOf(id);
                this.students.splice(i, 1);
                });
            },
        },
    }
</script>
