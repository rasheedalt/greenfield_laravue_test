<template>
    <div class="">
       <div class="col-md-12 col-lg-12">
            <h3 class="text-center">{{ student[0].first_name }} {{ student[0].last_name }}</h3>
        </div>
       <div class="col-md-12 col-lg-12">
            <h3 class="text-center">Courses List</h3>
        </div>
        <div  v-for="course in student[0].courses" :key="course.id">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">{{ course.name }}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            student: {},
            };
        },
        created() {
            this.axios.get(`http://localhost:8000/api/student/${this.$route.params.id}`).then((response) => {
            this.student = response.data;
            console.log(response.data);
            });
        }
    }
</script>
