<template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Dashboard</h1>
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

                <p>248</p>
              </div>
              <div class="icon">
                <i class="fas fa-hamburger fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Store</h5>

                <p>1</p>
              </div>
              <div class="icon">
                <i class="fas fa-store fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Users</h5>

                <p>2</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-alt fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h6>Today's Earning</h6>
                <p>65</p>
              </div>
              <div class="icon">
                <i class="fas fa-dollar-sign fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>Weekly Earning</h6>
                <p>420</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-invoice-dollar fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h6>Monthly Earning</h6>
                <p>12,000</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-invoice-dollar fa-2x" style="font-size:40px"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-6">
            <canvas id="myChart1"></canvas>
          </div>
          <div class="col-md-6">
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</template>
<script>
// import Sidebar from './layout/sidebar.vue'
// import TopNavigation from './layout/topNavigation.vue'
// import BtmFooter from './layout/footer.vue'
export default {
//   components:{
//     'sidebar':Sidebar,
//     'top-navigation':TopNavigation,
//     'btm-footer':BtmFooter
//   },
  data(){
    return {
      message: 'Some Message'
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