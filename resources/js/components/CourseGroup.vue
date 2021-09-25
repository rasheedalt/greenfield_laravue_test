<template>
    <div class="row">
       <div class="col-md-12 col-lg-12">
        <h3 class="text-center">Group Courses</h3>
        </div>
        <div  v-for="group in groups" :key="group.id">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">{{ group.name }}</div>

                    <div class="card-body">
                        <p><span class="font-weight-bold">Course:</span> {{ group.course.name }}</p>
                        <p><span class="font-weight-bold">Lecturer:</span> {{ group.lecturer.first_name }} {{ group.lecturer.last_name }}</p>
                        <p><span class="font-weight-bold">Students:</span></p>
                        <ul v-for="student in group.course.students" :key="student.id">
                            <li><router-link
                            :to="{ name: 'student', params: { id: student.id } }"
                            class=""
                            >{{ student.first_name }} </router-link>
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
        data() {
            return {
            groups: [],
            };
        },
        created() {
            this.axios.get(`http://localhost:8000/api/course-groups/${this.$route.params.id}`).then((response) => {
            this.groups = response.data;
            console.log(response.data)
            });
        }
    }
</script>
