<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <i class="fas fa-sitemap"></i>
      </div>
      <div class="sidebar-brand-text mx-3">
        NET
        TRACKER
      </div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    
    {{-- <li class="nav-item">
      <a class="nav-link" href="{{ route('products') }}">
        <i class="fas fa-boxes"></i>
        <span>Products</span></a>
    </li> --}}

    {{-- Task --}}
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-tasks"></i>
          <span>Task</span>
      </a>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('issues.index') }}">Issue</a> 
              <a class="collapse-item" href="{{ route('products_out') }}">Failover</a>
          </div>
      </div>
    </li>

    {{-- Clients --}}
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-building"></i>
          <span>Clients</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('clients.index') }}">Data</a>
          </div>
      </div>
    </li>
    
    {{-- Doc --}}
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
          aria-expanded="true" aria-controls="collapseTree">
          <i class="fas fa-info-circle"></i>
          <span>Documentation</span>
      </a>
      <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('products_out') }}">How To</a>
              <a class="collapse-item" href="{{ route('products_out') }}">Issue</a>
          </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('profile') }}">
        <i class="fas fa-user-circle"></i>
        <span>Profile</span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>