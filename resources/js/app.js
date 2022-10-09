// import './bootstrap';

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'

import Signup from './Register.vue'
import Signin from './Signin.vue'
import Home from './Home.vue'
import Dashboard from './Dashboard.vue'
import UserDeatils from './UserDetails.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/signup', component: Signup },
  { path: '/signin', component: Signin },
  { path: '/dashboard', component: Dashboard },
  { path: '/user', component: UserDeatils },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

const app = createApp(App)
app.use(router)
app.mount("#app")