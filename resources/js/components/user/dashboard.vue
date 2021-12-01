<template>
<div>
  <top-navigation/>
  <sidebar mainMenu='Dashboard'/>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info"><strong>Dashboard</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>Products</h6>
                <p>250</p>
              </div>
              <div class="icon">
                <i class="fas fa-pizza-slice fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>Users</h6>
                <p>2</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-alt fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h6>Today's Sales</h6>
                <p>6,500</p>
              </div>
              <div class="icon">
                <i class="fas fa-rupee-sign fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h6>Monthly Sales</h6>
                <p>12,000</p>
              </div>
              <div class="icon">
                <i class="fas fa-arrow-down fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h6>Monthly Purchases</h6>
                <p>12,000</p>
              </div>
              <div class="icon">
                <i class="fas fa-arrow-up fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h6>Monthly Expenses</h6>
                <p>12,000</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-invoice-dollar fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>



        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <h4>Sales <span class="float-right">
                  <div class="form-group">
                    <select class="form-control form-control-sm">
                      <option>Today</option>
                      <option>This Week</option>
                      <option>This Month</option>
                      <option>This Year</option>
                    </select>
                  </div>
                </span></h4>
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Total Sales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Dine In</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Takeaway</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Delivery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Online</a>
                  </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                  <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                    <canvas id="myChart1"></canvas>
                  </div>
                  <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                    <canvas id="myChart2"></canvas>
                  </div>
                  <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                    <canvas id="myChart3"></canvas>
                  </div>
                  <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                    <canvas id="myChart4"></canvas>
                  </div>
                  <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                    <canvas id="myChart5"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h6 class="m-0">Items Sold (Today)</h6>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 402px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                    </tr>
                    <tr>
                      <td>134</td>
                      <td>Jim Doe</td>
                    </tr>
                    <tr>
                      <td>494</td>
                      <td>Victoria Doe</td>
                    </tr>
                    <tr>
                      <td>832</td>
                      <td>Michael Doe</td>
                    </tr>
                    <tr>
                      <td>982</td>
                      <td>Rocky Doe</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </div>
</template>
<script>
import Sidebar from './layout/sidebar.vue'
//import Sidebar from './layout/sidebar.vue'
import TopNavigation from './layout/topNavigation.vue'
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