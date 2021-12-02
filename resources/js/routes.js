
import Dashboard          from './components/user/dashboard';
import RawMaterials       from './components/user/stockMaster/rawMaterials'
import ProductAssembly    from './components/user/stockMaster/productAssembly'
import ProductwiseReport  from './components/user/reportMaster/productwiseReport'
import MenuwiseReport     from './components/user/reportMaster/menuwiseReport'

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
        {
            path: '/product-assembly',
            component: ProductAssembly,
            name: "product-assembly"
        },
        {
            path: '/product-wise-report',
            component: ProductwiseReport,
            name: "product-wise-report"
        },
        {
            path: '/menu-wise-report',
            component: MenuwiseReport,
            name: "menu-wise-report"
        },


  ]
}