
import Dashboard  from './components/user/dashboard';
import RawMaterials from './components/user/stockMaster/rawMaterials'

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
        {
            path: '/raw-materials',
            component: RawMaterials,
            name: "raw-materials"
        },

  ]
}