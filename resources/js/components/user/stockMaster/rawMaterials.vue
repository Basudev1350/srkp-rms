<template>
<div>
<top-navigation/>
<sidebar mainMenu="Stock-Master" subMenu="Raw-Materials" />
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-info"><strong>Raw Materials</strong></h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inventory</li>
              <li class="breadcrumb-item active">Manage Inventory</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-5">
            <div class="card">
            <div class="card-header">
            <h5 class="m-0 text-info text-left">Add Raw Materials</h5>
            </div>
            <div class="card-body">
            <form class="mt-3"> 
             <div class="form-group">
                 <label class="text-grey">Material Name</label>
                 <input type="text" class="form-control form-control-sm" >
             </div>
             <div class="row">
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-grey">Unit</label>
                        <input type="number" class="form-control form-control-sm" >
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-grey">Min Qty</label>
                        <input type="text" class="form-control form-control-sm" >
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-grey">Opening stock</label>
                        <input type="text" class="form-control form-control-sm" >
                    </div>
                 </div>
             </div>
             <input type="submit" class="btn btn-info btn-sm mt-3" value="Add Raw Material">
            </form>
            </div>
            </div>
        </div>
        <div class="col-md-7">
              <div class="card">
                <div class="card-header">
                <h5 class="m-0 text-info text-left">Inventory Details On:</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 offset-md-8 mb-2">
                      <input type="text" placeholder="search by typing here" class="form-control form-control-sm">
                    </div>
                  </div>
                  <table class="table table-bordered">
                    <thread>
                      <tr>
                      <th>SL</th>
                      <th>Material</th>
                      <th>Unit</th>
                      <th>Opening Stock</th>
                      <th>Closing Stock</th>
                      <th>Action</th>
                      </tr>
                    </thread>
                    <tbody>
                      
                    </tbody>
                </table>
                </div>
              </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</div>  
</template>
<script>
import Sidebar from '../layout/sidebar.vue'
//import Sidebar from './layout/sidebar.vue'
import TopNavigation from '../layout/topNavigation.vue'
// import BtmFooter from './layout/footer.vue'
// import VueApexCharts from 'vue-apexcharts'

// Vue.component('apexchart', VueApexCharts)
export default {
  components:{
    //  apexcharts: VueApexCharts,
    'sidebar':Sidebar,
    'top-navigation':TopNavigation,
    // 'btm-footer':BtmFooter
  },
  data(){
    return {
    // chartOptions: {
    //     chart: {
    //       id: 'basic-bar'
    //     },
    //     xaxis: {
    //       categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
    //     }
    //   },
    //   series: [{
    //     name: 'series-1',
    //     data: [30, 40, 45, 50, 49, 60, 70, 91]
    //   }]
    };
  },
  methods:{
    logout()
    {
      axios.post('logout').then(function()
      {
        document.location.href = "/login";
      })
    },
  },
}
</script>