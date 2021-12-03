<template>
<div>
<top-navigation/>
<sidebar mainMenu="Stock-Master" subMenu="Product-Assembly" />
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-info"><strong>Product Assembly</strong></h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-info" href="#">Home</a></li>
              <li class="breadcrumb-item active"><a class="text-info" href="#">Inventory</a></li>
              <li class="breadcrumb-item active">Product Assembly</li>
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
            <h5 class="m-0 text-info text-left">Assemble Product by selecting raw materials</h5>
            </div>
            <div class="card-body">
            <form>
            <div class="row">
            <div class="col-md-4">
                <h6 class="text-info mt-2">Choose Product:</h6>
            </div>
            <div class="col-md-8">
                <input type="number" class="form-control form-control-sm">
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6 class="text-info mt-2">Choose Size:</h6>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control form-control-sm">
                </div>
                <div class="col-md-3">
                 <button class="btn btn-info">Add Item</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-danger">Remove</button>
                </div>
            </div>
            </form>
            <table class="table table-bordered  mt-3 mb-3">
                <thead>
                    <th>#</th>
                    <th>Raw Material</th>
                    <th>Qty/Unit Required</th>
                </thead>
                <tbody>
                    <tr>
                    <td><input type="checkbox"></td>
                    <td><input type="number" class="form-control form-control-sm"></td>
                    <td><input type="text"   class="form-control form-control-sm"></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-3 offset-md-3">
                    <button class="btn btn-info">Submit</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-danger">Cancel</button>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-7">
              <div class="card">
                <div class="card-header">
                <h5 class="m-0 text-info text-left">Assembled Products</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 offset-md-8 mb-2">
                      <input type="text" placeholder="search by typing here" class="form-control form-control-sm">
                    </div>
                  </div>
                <table class="table table-bordered">
                    <thead>
                      <th>SL</th>
                      <th>Product Name</th>
                      <th>Raw Materials</th>
                      <th>Qty./Unit Required</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>demo</td>
                        <td>10</td>
                        <td>30</td>
                        <td style="text-align: center;" class="noExport">
                          <div class="btn-group">
                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="false" style="margin-left:-20px;">
                              <i class="fas fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" role="menu" style="margin-left:-20px;">
                              <a href="#" class="dropdown-item">View/ Edit</a>
                              <a href="#" class="dropdown-item">Delete</a>
                              <a href="#" class="dropdown-item">View Transactions</a>
                              <a href="#" class="dropdown-item">Print as PDF</a>
                              <a href="#" class="dropdown-item">Preview</a>
                              <a href="#" class="dropdown-item">Deactivate</a>
                            </div>
                          </div>
                        </td>
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