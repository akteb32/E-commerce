<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
      target="_blank">
      <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
      <span class="ms-1 text-sm text-dark">Creative Tim</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <ul class="navbar-nav">


        <li class="nav-item mt-3">
          <h6 class="ps-3 text-uppercase text-xs text-secondary fw-bold">Main</h6>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 bg-gradient-dark text-white rounded shadow-sm"
            href="/welcome">
            <i class="material-symbols-rounded me-2 fs-5 text-primary">dashboard</i>
            <span class="nav-link-text text-primary">Dashboard</span>
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 text-dark" href="/welcome">
            <i class="material-symbols-rounded me-2 text-primary fs-5">dashboard</i>
            <span class="text-sm fw-normal">Dashboard</span>
          </a>
        </li>


        <li class="nav-item mt-3">
          <h6 class="ps-3 text-uppercase text-xs text-secondary fw-bold">Store Management</h6>
        </li>


        {{-- <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 bg-gradient-dark text-white rounded shadow-sm"
            href="/category">
            <i class="text-primary text-sm">Category table</i>
          </a>
        </li> --}}


         {{-- category --}}
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 text-dark" href="/category">
            <span class="text-sm fw-normal text-primary">Category Table</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 text-dark" href="/category-create">
            <span class="text-sm fw-normal text-primary">Create Category</span>
          </a>
        </li>

        {{-- subcategory --}}
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 text-dark" href="/subcategory">
            <span class="text-sm fw-normal text-primary">Subcategory Table</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 text-dark" href="/subcategory-create">
            <span class="text-sm fw-normal text-primary">Create Subcategory</span>
          </a>
        </li>

           {{-- product --}}
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 text-dark" href="/product">
            <span class="text-sm fw-normal text-primary">Product Table</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 text-dark" href="/product-create">
            <span class="text-sm fw-normal text-primary">Create Product</span>
          </a>
        </li>



      </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn btn-outline-dark mt-4 w-100"
        href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree"
        type="button">Documentation</a>
      <a class="btn bg-gradient-dark w-100"
        href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to
        pro</a>
    </div>
  </div>
</aside>