<template>
<div>
<top-navigation/>
<sidebar mainMenu="Report-Master" subMenu="Menu-Wise-Report" />
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-info"><strong>Menu Wise Report</strong></h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-info" href="#">Home</a></li>
              <li class="breadcrumb-item active"><a class="text-info" href="#">Report Master</a></li>
              <li class="breadcrumb-item active">Menu Wise Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-4">
            <div class="card">
            <div class="card-header">
            <h6 class="m-0 text-info text-left"> Menu wise report </h6>
            </div>
            <div class="card-body">
            <form class="mt-3"> 
             <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="text-grey">Select Store</label>
                        <select class="form-control form-control-sm">
                            <option selected=""> -- Select Store -- </option>
                            <option value="option1"> Option1 </option>
                            <option value="option2"> Option2 </option>
                        </select>
                    </div>
                 </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                   <div class="form-group">
                       <label class="text-grey">Select Date</label>
                       <input type="date" class="form-control form-control-sm">
                </div>
            </div>
             </div>
             <div class="col-md-4 offset-md-4">
             <input type="submit" class="btn btn-info btn-sm mt-3" value="Generate Report">
             </div>
            </form>
            </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
            <h5 class="m-0 text-info text-left"> Sales Report: </h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 offset-md-9 mb-2">
                  <input type="text" placeholder="search by typing here" class="form-control form-control-sm">
                </div>
              </div>
                <table class="table table-bordered">
                    <thead>
                      <th>SL</th>
                      <th>Category</th>
                      <th>Product</th>
                      <th>Size</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Amount</th>
                    </thead>
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
import TopNavigation from '../layout/topNavigation.vue'

export default {
  components:{
    //  apexcharts: VueApexCharts,
    'sidebar':Sidebar,
    'top-navigation':TopNavigation,
    // 'btm-footer':BtmFooter
  },
  data(){
    return {
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