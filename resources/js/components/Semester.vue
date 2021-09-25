<template>
  <div>
    <div class="container">
      <h2>Students</h2>
      <div class="panel panel-primary">
        <div class="panel-heading">
            Students
            <router-link to="/add" class="btn btn-info pull-right" style="margin-top:-7px;margin-left:2px;">Add Student</router-link>
        </div>
        <div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Year</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="semester in semesters" :key="semester.id">
                <td>{{ semester.id }}</td>
                <td>{{ semester.name }}</td>
                <td>{{ semester.number }}</td>
                <td>{{ semester.year }}</td>
                <td>{{ semester.start_date }}</td>
                <td>{{ semester.end_date }}</td>
                <td>
                  <div class="btn-group" role="group">
                    <router-link
                      :to="{ name: 'groups', params: { id: student.id } }"
                      class="btn btn-success"
                      >Edit</router-link
                    >
                    <button
                      class="btn btn-danger"
                      @click="deleteStudent(student.id)"
                    >
                      Details
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      students: [],
    };
  },
  created() {
    this.axios.get("http://localhost:8000/api/students").then((response) => {
      this.students = response.data;
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
};
</script>
