import Vue from 'vue'
import Router from 'vue-router'
import ToppageContents from './components/ToppageContents'
import TruefalseContents from './components/TruefalseContents'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'ToppageContents',
      component: ToppageContents
    },
    {
      path: '/mainpage',
      name: 'TruefalseContents',
      component: TruefalseContents
    },
  ]
})