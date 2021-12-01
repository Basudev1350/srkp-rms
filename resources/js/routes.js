
import Dashboard  from './components/user/dashboard';

export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [

        /** ../user/dashboard.vue UI link  **/      
        {
            path: '/dashboard',
            component: Dashboard,
            name: "dashboard"
        },


  ]
}