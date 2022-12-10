// import './bootstrap';

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'

import axios from 'axios'
import VueAxios from 'vue-axios'

import 'v-calendar/dist/style.css';
import VCalendar from 'v-calendar';

import Signup from './Register.vue'
import Signin from './Signin.vue'
import Home from './Home.vue'
import Dashboard from './Dashboard.vue'
import Aml from './Aml.vue'
import Calander from './Calander.vue'
import FileUpload from './FileUpload.vue'
import CreateAml from './CreateAml.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/signup', component: Signup },
  { path: '/signin', component: Signin },
  { path: '/calander', component: Calander},
  {
    path: '/',
    component: Dashboard,
    children: [
      { path: 'create-aml', component:CreateAml},
      { path: 'aml', component: Aml },
      { path: 'file', component: FileUpload},
    ]
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})


const app = createApp(App)

app.use(VueAxios, axios)
app.use(VCalendar, {})
app.use(router)
app.mount("#app")





