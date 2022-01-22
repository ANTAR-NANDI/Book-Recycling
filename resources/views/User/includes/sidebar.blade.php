<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="active">
          <a href="{{ URL::to('/admin/home')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
        </li>
        <li class="submenu">
          <a href="#"><i class="fe fe-document"></i> <span> Pharmaceuticals </span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li> <a style="color:white" href="" data-toggle="modal" data-target="#modalContactForm">
                Add Pharmaceutical</a></li>
            <li><a href="{{ URL::to('/admin/pharma-list')}}">Manage Pharmaceuticals</a></li>

          </ul>
        </li>
        <li class="submenu">
          <a href="#"><i class="fe fe-document"></i> <span> Vaccine </span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li> <a href="" data-toggle="modal" data-target="#modalVaccineForm">
                Add Vaccine</a></li>
            <li><a href="{{ URL::to('/admin/vaccine-list')}}">Manage Vaccines</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Patients</span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li> <a href="" data-toggle="modal" data-target="#modalVaccineForm">
                Add Patient</a></li>
            <li> <a href="{{ URL::to('/admin/patient-list')}}">Manage Patients</a></li>

          </ul>
        </li>
        <li class="submenu">
          <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Reports</span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">

            <li> <a href="{{ URL::to('/admin/total-sales')}}">
                Totals Sales</a></li>
          </ul>
        </li>

        <!-- <li>
          <a href="specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
        </li>
        <li>
          <a href="doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
        </li>
        <li>
          <a href="patient-list.html"><i class="fe fe-user"></i> <span>Patients</span></a>
        </li>
        <li>
          <a href="reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
        </li>
        <li>
          <a href="transactions-list.html"><i class="fe fe-activity"></i> <span>Transactions</span></a>
        </li>
        <li>
          <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
        </li>
        <li class="submenu">
          <a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li><a href="invoice-report.html">Invoice Reports</a></li>
          </ul>
        </li> -->

      </ul>

    </div>
  </div>
</div>