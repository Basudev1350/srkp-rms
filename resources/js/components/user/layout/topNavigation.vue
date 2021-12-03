<template>
     <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block mr-2">
          <a href="#" class="btn bg-gradient-success btn-sm"><i class="fa fa-plus"></i> New Order</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="btn bg-gradient-success btn-sm"><i class="fa fa-clock"></i> Happy Hour</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!-- Logout Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" @click="logout">
            <i class="fas fa-power-off"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-item">
              <!-- Logout Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Hi, Souvik Kundu
                  </h3>
                  <p class="text-sm">Last logged in: 12:20 AM</p>
                  <button type="submit" class="btn btn-sm btn-danger mt-2">Log Out</button>
                </div>
              </div>
              <!-- Logout End -->
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
</template>
<script>
export default {
    data(){
        return{}
    },
    methods:{
      logout()
        {
            axios.post('/logout').then(function(){
                document.location.href = "/login";
            })
        },
    },  
}
</script>