<template>
  <nav class="navbar des navbar-main navbar-expand-sm px-0 mx-0 shadow-none z-index-sticky" id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-0"> <!-- Removed px-3 -->
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 " id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <!-- <a href=""
              class="nav-link text-white font-weight-bold px-0 user" target="_blank"> -->
              <!-- <i class="fa fa-user me-sm-1 user"></i>
              <span class="d-sm-inline d-none text-dark">Admin</span> -->
            <!-- </a> -->
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
  background-color: rgb(161, 179, 206);
  background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5));
}

.navbar {
  width: 100%;
  height: 70px;
}

.container-fluid {
  padding-right: 0; /* Reset default padding */
  padding-left: 0; /* Reset default padding */
}

.user{
  margin-right: 16vh;
  color: black;
}
</style>