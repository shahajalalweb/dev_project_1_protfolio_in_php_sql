<?php
session_start();
if (!isset($_SESSION['isAdmin'])) {
  header('Location: pages/sign-in.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('../head.php') ?>

<body class="g-sidenav-show  bg-gray-100">
  <!-- sidebar in details left sidebar  -->
  <?php include("../aside.php") ?>
  <!-- main part in body  -->
  <main class="main-content border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-7 position-relative z-index-2">
          <div class="card card-plain mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <h2 class="font-weight-bolder mb-0">General Statistics</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-5 col-sm-5">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div
                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Bookings</p>
                    <h4 class="mb-0">281</h4>
                  </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                </div>
              </div>

              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div
                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">leaderboard</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                    <h4 class="mb-0">2,300</h4>
                  </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                </div>
              </div>

            </div>
            <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div
                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">store</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                    <h4 class="mb-0 ">34k</h4>
                  </div>
                </div>

                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
                </div>
              </div>

              <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div
                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Followers</p>
                    <h4 class="mb-0 ">+91</h4>
                  </div>
                </div>

                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 ">Just updated</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- footer include  -->
    <?php include('../footer.php') ?>

  </main>

  <!-- plugin in theme dev  -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
            onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
            onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- js script file  -->
  <?php include('../script.php') ?>

</body>

</html>