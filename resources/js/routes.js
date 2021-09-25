import Home from './components/Home.vue';
import Student from './components/Student.vue';
import Semester from './components/Semester.vue';
import CourseGroup from './components/CourseGroup.vue';

export const routes = [{
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'semster',
        path: '/semesters',
        component: Semester
    },
    {
        name: 'groups',
        path: '/course-groups/:id',
        component: CourseGroup
    },
    {
        name: 'student',
        path: '/student/:id',
        component: Student
    }
];
