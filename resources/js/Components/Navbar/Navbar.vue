<template>
  <nav class="navbar des navbar-main navbar-expand-sm px-0 mx-0 shadow-none z-index-sticky" id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-0"> <!-- Removed px-3 -->
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 " id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="../../pages/authentication/signin/illustration.html"
              class="nav-link text-white font-weight-bold px-0" target="_blank">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Admin</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  // Your component logic
}
</script>

<style scoped>
.des {
  background-color: rgba(197, 196, 177, 0.61);
}

.navbar {
  width: 100%;
}

.container-fluid {
  padding-right: 0; /* Reset default padding */
  padding-left: 0; /* Reset default padding */
}
</style>