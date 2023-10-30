<?php   ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8" id="logoimgc">
    <span class="brand-text font-weight-light">Own Way</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="" class="img-circle elevation-2" style="height: 90px; width:90px; " id="proimg" alt="User Image" />
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo  $_SESSION['name']; ?></a><br>
        <input type='submit' id='updateAdminProfile' value='UPDATE PROFILE'  class='btn btn-block btn-outline-warning  btn-sm'>
      </div>
    </div>


<!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard

            </p>
          </a>        
        </li>
        <li class="nav-item" id="fristoption">
                <a href="" class="nav-link" id="GRI">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guide Registration Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="VG" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Verify Guides</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="BSP">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Basic Subscription Pack</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="aps">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Place in card</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="SPP">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add sechdule_trip</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="MHD">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Hotel Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="MTD">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Travel Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="MSI">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Subcription Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" id="MTR">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Tour Request</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage other things</p>
                </a>
              </li>
              
            </ul>
          </li>
        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
            </p>
          </a>
        </li> -->
        <!--  -->
    </nav>  
  </div>
</aside>
