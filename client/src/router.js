import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'fullcalendar/dist/fullcalendar.css'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
    {
      path: '/todolist',
      name: 'todolist',
      component: () => import('./views/Todolist.vue')
    },
      {
          path: '/inventory',
          name: 'inventory',
          component: () => import('./views/Inventory.vue')
      },
      {
      path: '/agenda',
      name: 'agenda',
      component: () => import(/* webpackChunkName: "about" */ './views/agenda.vue')
    }
  ]
})
