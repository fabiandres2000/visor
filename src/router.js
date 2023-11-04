import { createRouter, createWebHistory } from 'vue-router'
import Inicio from './components/HelloWorld.vue'
import Cargar from './components/cargar_archivos.vue'

const routes = [
  {
    path: '/',
    name: 'Inicio',
    component: Inicio
  },
  {
    path: '/carga',
    name: 'Cargar',
    component: Cargar
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router