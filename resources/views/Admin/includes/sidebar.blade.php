 <!-- START SIDEBAR-->
 <nav class="page-sidebar" id="sidebar">
   <div id="sidebar-collapse">
     <div class="admin-block d-flex">
       <div>
         <img src="{{ asset('Admin/img/admin-avatar.png')}}" width="45px" />
       </div>
       <div class="admin-info">
         <div class="font-strong">Antar Nandi</div><small>Administrator</small>
       </div>
     </div>
     <ul class="side-menu metismenu">
       <li>
         <a class="active" href="{{route('admin-home')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
           <span class="nav-label">Dashboard</span>
         </a>
       </li>
       <!-- <li class="heading">FEATURES</li> -->
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
           <span class="nav-label">Users</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="{{route('admin-user-list')}}">Manage Users</a>
           </li>
           <li>
             <a href="{{route('admin-user-list')}}">Reported Users</a>
           </li>
           <li>
             <a href="{{route('admin-block-user')}}">Non-Paid User</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
           <span class="nav-label">Books</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="{{route('admin-books-list')}}">Manage Books</a>
           </li>
           <li>
             <a href="{{route('admin-manage-post')}}">Manage Post</a>
           </li>

         </ul>
       </li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
           <span class="nav-label">Inbox</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="{{route('admin-messages')}}">Messages</a>
           </li>
           <li>
             <a href="{{route('admin-report-user')}}">Users Report</a>
           </li>

         </ul>
       </li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
           <span class="nav-label">Reports</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="{{route('admin-total-sales')}}">Total Sales</a>
           </li>

         </ul>
       </li>
       <li>
         <a class="active" href="{{route('admin-home')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
           <span class="nav-label">Notifications</span>
         </a>
       </li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
           <span class="nav-label">Setting</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="{{route('admin-total-sales')}}">Total Sales</a>
           </li>

         </ul>
       </li>
       <!-- <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-bar-chart"></i>
           <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="charts_flot.html">Flot Charts</a>
           </li>
           <li>
             <a href="charts_morris.html">Morris Charts</a>
           </li>
           <li>
             <a href="chartjs.html">Chart.js</a>
           </li>
           <li>
             <a href="charts_sparkline.html">Sparkline Charts</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
           <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="maps_vector.html">Vector maps</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
           <span class="nav-label">Icons</span>
         </a>
       </li>
       <li class="heading">PAGES</li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
           <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="mailbox.html">Inbox</a>
           </li>
           <li>
             <a href="mail_view.html">Mail view</a>
           </li>
           <li>
             <a href="mail_compose.html">Compose mail</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="calendar.html"><i class="sidebar-item-icon fa fa-calendar"></i>
           <span class="nav-label">Calendar</span>
         </a>
       </li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
           <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="invoice.html">Invoice</a>
           </li>
           <li>
             <a href="profile.html">Profile</a>
           </li>
           <li>
             <a href="login.html">Login</a>
           </li>
           <li>
             <a href="register.html">Register</a>
           </li>
           <li>
             <a href="lockscreen.html">Lockscreen</a>
           </li>
           <li>
             <a href="forgot_password.html">Forgot password</a>
           </li>
           <li>
             <a href="error_404.html">404 error</a>
           </li>
           <li>
             <a href="error_500.html">500 error</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
           <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">
           <li>
             <a href="javascript:;">Level 2</a>
           </li>
           <li>
             <a href="javascript:;">
               <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
             <ul class="nav-3-level collapse">
               <li>
                 <a href="javascript:;">Level 3</a>
               </li>
               <li>
                 <a href="javascript:;">Level 3</a>
               </li>
             </ul>
           </li>
         </ul>
       </li> -->
     </ul>
   </div>
 </nav>
 <!-- END SIDEBAR-->