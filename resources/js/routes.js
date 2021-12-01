
import Dashboard  from './components/dashboard';

export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [

        /** dashboard.vue UI link  **/      
        {
            path: '/dashboard',
            component: Dashboard,
            name: "dashboard"
        },


  ]
}