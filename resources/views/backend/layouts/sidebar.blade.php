   <!-- ========== App Menu ========== -->
   <div class="app-menu navbar-menu">
     <!-- LOGO -->
     <div class="navbar-brand-box">
       <!-- Dark Logo-->
       <a href="index.html" class="logo logo-dark">
         <span class="logo-sm">
           <img src="{{ URL::asset('backend_assets/images/logo-sm.png') }}" alt="" height="22">
         </span>
         <span class="logo-lg">
           <img src="{{ URL::asset('backend_assets/images/logo-dark.png') }}" alt="" height="17">
         </span>
       </a>
       <!-- Light Logo-->
       <a href="index.html" class="logo logo-light">
         <span class="logo-sm">
           <img src="{{ URL::asset('backend_assets/images/logo-sm.png') }}" alt="" height="22">
         </span>
         <span class="logo-lg">
           {{-- <img src="{{ URL::asset('backend_assets/images/logo-light.png') }}" alt="" height="17"> --}}
           <h6>Tropica</h6>
         </span>
       </a>
       <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
         id="vertical-hover">
         <i class="ri-record-circle-line"></i>
       </button>
     </div>

     <div id="scrollbar">
       <div class="container-fluid">

         <div id="two-column-menu">
         </div>
         <ul class="navbar-nav" id="navbar-nav">
           <li class="menu-title"><span data-key="t-menu">Menu</span></li>
           <li class="nav-item">
             <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
               aria-expanded="false" aria-controls="sidebarDashboards">
               <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
             </a>
             <div class="collapse menu-dropdown" id="sidebarDashboards">
               <ul class="nav nav-sm flex-column">
                 <li class="nav-item">
                   <a href="{{ route('admin.dashboard') }}" class="nav-link" data-key="t-analytics">
                     Dashboard </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('admin.general.settings') }}" class="nav-link" data-key="t-analytics">
                     General Settings </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('admin.content.list') }}" class="nav-link" data-key="t-analytics">
                     Content MGT</a>
                 </li>

               </ul>
             </div>
           </li> <!-- end Dashboard Menu -->




           <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>




           <li class="nav-item">
             <a class="nav-link menu-link" href="#usersMenu" data-bs-toggle="collapse" role="button"
               aria-expanded="false" aria-controls="usersMenu">
               <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Users</span>
             </a>
             <div class="collapse menu-dropdown" id="usersMenu">
               <ul class="nav nav-sm flex-column">
                 <li class="nav-item">
                   <a class="nav-link menu-link" href="{{ route('admin.users.index') }}">
                     Users
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('admin.users.transaction.approval') }}" class="nav-link" data-key="t-analytics">
                     Transaction Approval MGT
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('admin.users.wallet.recharge') }}" class="nav-link" data-key="t-analytics">
                     Manual Wallet Recharge MGT</a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('admin.users.withraw') }}" class="nav-link" data-key="t-analytics">
                     Withdraw
                   </a>
                 </li>

               </ul>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link menu-link" href="{{ route('admin.qrcode.list') }}">
               <i class="ri-account-circle-line"></i> <span data-key="t-widgets">QR Code MGT</span>
             </a>
           </li>




         </ul>
       </div>
       <!-- Sidebar -->
     </div>

     <div class="sidebar-background"></div>
   </div>
   <!-- Left Sidebar End -->
   <!-- Vertical Overlay-->
   <div class="vertical-overlay"></div>