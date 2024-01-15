import { createRouter, createWebHistory } from 'vue-router'
import Inicio from './components/HelloWorld.vue'
import Cargar from './components/cargar_archivos.vue'
import Editar from './components/Editardescripcion.vue'


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
  {
    path: '/editar',
    name: 'Editar',
    component: Editar
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router