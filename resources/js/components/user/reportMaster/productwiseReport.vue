<template>
<div>
<top-navigation/>
<sidebar mainMenu="Report-Master" subMenu="Product-Wise-Report" />
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Product wise report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Report Master</li>
              <li class="breadcrumb-item active">Product Wise Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-6">
            <div class="card">
            <div class="card-header">
            <h5 class="m-0 text-info text-left"> Product wise report </h5>
            </div>
            <div class="card-body">
            <form class="mt-3"> 
             <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-grey">Select Date</label>
                        <input type="date" class="form-control form-control-sm" >
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-grey">Select Store</label>
                        <select class="form-control form-control-sm">
                            <option selected=""> -- Select Store -- </option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                        </select>
                    </div>
                 </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <label class="text-grey">Select Product</label>
                    <select class="form-control form-control-sm">
                        <option selected=""> -- Select Product -- </option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                 </div>
                </div>
             </div>
             <input type="submit" class="btn btn-info btn-sm mt-3" value="Generate Report">
            </form>
            </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
            <h5 class="m-0 text-info text-left"> Product wise report </h5>
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
                      <th>Date</th>
                      <th>Store Name</th>
                      <th>Total Customer</th>
                      <th>Total Sale Quantity</th>
                      <th>Sale Amount</th>
                    </thead>
                    <tbody>
                      <tr>
                      <td>1</td>
                      <td>29-11-2021</td>
                      <td>store1</td>
                      <td>150</td>
                      <td>1000</td>
                      <td>150</td>
                      </tr>
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