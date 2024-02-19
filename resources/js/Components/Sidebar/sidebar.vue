<template>
  <aside class="sidenav bg navbar navbar-vertical navbar-expand-xs border-0   fixed-start "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0"
        href=" https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html " target="_blank">
        <img src="../../assets/img/logo.png" class="navbar-brand-img logo" alt="main_logo" />
        <span class="ms-1 font-weight-bold">Hotel Management</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <Link  :href="route('dashboard')" class="nav-link active"
            aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-shop text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboards</span>
          </Link>
          <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link" aria-controls="applicationsExamples"
            role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Types</span>
          </a>
          <div class="collapse" id="applicationsExamples">
            <ul class="nav ms-4">
              <li class="nav-item">
                <Link class="nav-link" :href="route('hotel_types')">
                <span class="sidenav-mini-icon"> K </span>
                <span class="sidenav-normal">
                  Hotel Types
                </span>
                </Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" :href="route('room_types')">
                <span class="sidenav-mini-icon"> W </span>
                <span class="sidenav-normal">
                  Room Types
                </span>
                </Link>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link" aria-controls="ecommerceExamples"
            role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Catagories</span>
          </a>
          <div class="collapse" id="ecommerceExamples">
            <ul class="nav ms-4">
              <li class="nav-item">
                <Link class="nav-link" :href="route('hotel.entry')">
                  <span class="sidenav-mini-icon"> O </span>
                  <span class="sidenav-normal"> Hotels </span>
                </Link>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<style>

.logo{
 
  height: 5rem;
}

.bg{
  background-color: rgb(255, 255, 255);
  background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5));

}


</style>
