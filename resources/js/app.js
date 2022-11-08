// import './bootstrap';

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'

import 'v-calendar/dist/style.css';
import VCalendar from 'v-calendar';

import Signup from './Register.vue'
import Signin from './Signin.vue'
import Home from './Home.vue'
import Dashboard from './Dashboard.vue'
import UserDeatils from './UserDetails.vue'
import Aml from './Aml.vue'
import Calander from './Calander.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/signup', component: Signup },
  { path: '/signin', component: Signin },
  {
    path: '/',
    component: Dashboard,
    children: [
      { path: 'dashboard', component: UserDeatils },
      { path: 'user', component: UserDeatils },
      { path: 'aml', component: Aml },
      { path: 'calander', component: Calander}
    ]
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})


const app = createApp(App)
app.use(VCalendar, {})
app.use(router)
app.mount("#app")





