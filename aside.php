<?php 
    // session_start();
    $currentPage = basename($_SERVER['PHP_SELF']);
    // echo $currentPage;
?>

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Material Dashboard</span>
      </a>
    </div>

    <hr class="horizontal light mt-0 mb-2">

    <!-- Scrollable content wrapper -->
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main" style="flex-grow: 1; overflow-y: auto; height: calc(100% - 240px);">
      <ul class="navbar-nav">

        <!-- dashboard bar  -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'dasboard.php') ? 'active' : ''; ?>" href="dasboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <!-- protfolio name sidebar side -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'protfolio-name.php') ? 'active' : ''; ?>" href="protfolio-name.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">badge</i>
            </div>
            <span class="nav-link-text ms-1">Protfolio Name</span>
          </a>
        </li>

        <!-- menu || navebar select  -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'tables.php') ? 'active' : ''; ?>" href="tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Memu || Navbar</span>
          </a>
        </li>

        <!-- Header Part add  -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'bodyHeader.php') ? 'active' : ''; ?>" href="bodyHeader.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">wysiwyg</i>
            </div>
            <span class="nav-link-text ms-1">Body Header</span>
          </a>
        </li>

        <!-- Social media link or icons  -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'social.php') ? 'active' : ''; ?>" href="social.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">connect_without_contact</i>
            </div>
            <span class="nav-link-text ms-1">Social Media</span>
          </a>
        </li>

        <!-- About Me -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'aboutMe.php') ? 'active' : ''; ?>" href="aboutMe.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">info</i>
            </div>
            <span class="nav-link-text ms-1">About Me</span>
          </a>
        </li>

        <!-- Contact Info-->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'contact-info.php') ? 'active' : ''; ?>" href="contact-info.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">perm_contact_calendar</i>
            </div>
            <span class="nav-link-text ms-1">Contact Info</span>
          </a>
        </li>

        <!-- skills -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'skills.php') ? 'active' : ''; ?>" href="skills.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">psychology</i>
            </div>
            <span class="nav-link-text ms-1">Skills</span>
          </a>
        </li>

        <!-- education part -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'education.php') ? 'active' : ''; ?>" href="education.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">school</i>
            </div>
            <span class="nav-link-text ms-1">Education</span>
          </a>
        </li>

        <!-- experience part -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'experience.php') ? 'active' : ''; ?>" href="experience.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">navigation</i>
            </div>
            <span class="nav-link-text ms-1">Experience</span>
          </a>
        </li>

        <!-- experience part -->
        <li class="nav-item">
          <a class="nav-link text-white <?= ($currentPage == 'protfolio_profile.php') ? 'active' : ''; ?>" href="protfolio_profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">manage_accounts</i>
            </div>
            <span class="nav-link-text ms-1">Protfolio Profile</span>
          </a>
        </li>

      </ul>
    </div>

    <!-- Fixed account pages section at the bottom -->
    <div class="fixed-bottom" style="position: absolute; padding-bottom: 16px; bottom: 0; width: 100%; height: 100px;">
      <ul class="navbar-nav" style="height: 100%; display: flex; flex-direction: column; justify-content: flex-end;">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>

        <!-- Sign in or sign out buttons -->
        <?php if (isset($_SESSION["isAdmin"])) { ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="../signout.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">logout</i>
              </div>
              <span class="nav-link-text ms-1">Log Out</span>
            </a>
          </li>
        <?php } elseif (!isset($_SESSION["isAdmin"])) { ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="./pages/sign-in.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./pages/sign-up.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </aside>