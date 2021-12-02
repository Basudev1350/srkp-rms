<template>
    <!-- Navbar -->
   
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar main-sidebar-custom elevation-4 sidebar-dark-primary">
      <!-- Brand Logo -->
      <a href="#" class="brand-link" style="background-image: linear-gradient(180deg,#1f6300,#133b00);">
        <img src="dist/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">SRKP-RMS</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar os-host os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden os-host-overflow os-host-overflow-y os-theme-light">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
  
          <li class="nav-item">
            <router-link to="/dashboard" v-if="mainMenu == 'Dashboard'" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </router-link>
             <router-link to="/dashboard" v-else class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </router-link>
          </li>
           <li class="nav-item menu-is-opening menu-open" v-if="mainMenu == 'Stock-Master'">
            <router-link to="" class="nav-link active">
              <i class="nav-icon fa fa-archive"></i>
                <p>Stock Master<i class="fas fa-angle-left right"></i></p>
            </router-link>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/raw-materials" v-if="subMenu == 'Raw-Materials'" class="nav-link active">
                  <i class="fa fa-archive nav-icon"></i>
                    <p>Raw Materials</p>
                </router-link>
                <router-link to="/raw-materials" v-else class="nav-link">
                  <i class="fa fa-archive nav-icon"></i>
                    <p>Raw Materials</p>
                </router-link>
              </li>
               <li class="nav-item">
                <router-link to="/product-assembly" v-if="subMenu == 'Product-Assembly'"  class="nav-link active">
                  <i class="fa fa-archive nav-icon"></i>
                  <p>Product Assembly</p>
                 </router-link>
                 <router-link to="/product-assembly" v-else class="nav-link">
                  <i class="fa fa-archive nav-icon"></i>
                  <p>Product Assembly</p>
                 </router-link>
               </li>
            </ul>
          </li>
          <li class="nav-item" v-else>
            <router-link to="" class="nav-link">
               <i class="nav-icon fa fa-archive"></i>
                <p>Stock Master<i class="fas fa-angle-left right"></i></p>
            </router-link>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <router-link to="/raw-materials" class="nav-link ">
                <i class="fa fa-archive nav-icon"></i>
                <p>Raw Materials</p>
              </router-link>
              </li>
              <li class="nav-item">
                  <router-link to="/product-assembly" class="nav-link">
                    <i class="fa fa-archive nav-icon"></i>
                    <p>Product Assembly</p>
                 </router-link>
                </li>
            </ul>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pizza-slice"></i>
                <p>Product Master</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>Orders & Billing</p>
              </a>
            </li>

            <li class="nav-item menu-is-opening menu-open" v-if="mainMenu == 'Report-Master'">
              <router-link to="" class="nav-link active">
                <i class="nav-icon fas fa-list"></i>
                <p>Report Master<i class="fas fa-angle-left right"></i></p>
              </router-link>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <router-link to="/menu-wise-report" v-if="subMenu == 'Menu-Wise-Report'" class="nav-link active">
                   <i class="fas fa-list nav-icon"></i>
                    <p>Menu Wise Report</p>
                </router-link>
                <router-link to="/menu-wise-report" v-else class="nav-link">
                   <i class="fas fa-list nav-icon"></i>
                    <p>Menu Wise Report</p>
                </router-link>
              </li>
               
                 <li class="nav-item">
                <router-link to="/product-wise-report" v-if="subMenu == 'Product-Wise-Report'" class="nav-link active">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Product Wise Report</p>
                </router-link>
                <router-link to="/product-wise-report" v-else class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Product Wise Report</p>
                </router-link>
              </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Sales Report</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Purchase Report</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item menu-is-opening menu-open" v-else>
              <router-link to="" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>Report Master<i class="fas fa-angle-left right"></i></p>
              </router-link>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                   <router-link to="/menu-wise-report" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Menu Wise Report</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link to="/product-wise-report" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Product Wise Report</p>
                  </router-link>
                 </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Sales Report</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>Purchase Report</p>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-th-large"></i>
                <p>Tables</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-cogs nav-icon"></i>
                <p>Settings</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-users nav-icon"></i>
                <p>User Management</p>
              </a>
            </li>




  
  
  
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
  
      <div class="sidebar-custom">
        <p class="text-gray mb-0">Today is: dd/mm/yyyy</p>
        <p class="text-gray">Time Now is: hh:mm:ss AM</p>
      </div>
      <!-- /.sidebar -->
    </aside>
</template>
<script>
export default {
  mainMenu:'',
  subMenu:'',
  submenuMenu:'',
  props:{
    mainMenu: String,
    subMenu: String,
    submenuMenu: String
  }
}
</script>