<?php
session_start();
include("../database.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Material Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>


<body class="g-sidenav-show  bg-gray-200">
    <!-- aside / side bar  -->
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">

        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="../index.php">
                <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Material Dashboard</span>
            </a>
        </div>

        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <!-- dashboard bar  -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="../index.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <!-- protfolio name sidebar  -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="protfolio-name.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">badge</i>
                        </div>
                        <span class="nav-link-text ms-1">Protfolio Name</span>
                    </a>
                </li>

                <!-- menu || navbar  -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="tables.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Memu || Navbar</span>
                    </a>
                </li>

                <!-- Body Header Part add  -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="bodyHeader.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">wysiwyg</i>
                        </div>
                        <span class="nav-link-text ms-1">Body Header</span>
                    </a>
                </li>

                <!-- Social media link or icons  -->
                <li class="nav-item">
                    <a class="nav-link text-white active" href="social.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">connect_without_contact</i>
                        </div>
                        <span class="nav-link-text ms-1">Social Media</span>
                    </a>
                </li>

                <!-- About Me -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="aboutMe.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">info</i>
                        </div>
                        <span class="nav-link-text ms-1">About Me</span>
                    </a>
                </li>

                <!-- Contact Info-->
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact-info.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">perm_contact_calendar</i>
                        </div>
                        <span class="nav-link-text ms-1">Contact Info</span>
                    </a>
                </li>

                <!-- skills -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="skills.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">psychology</i>
                        </div>
                        <span class="nav-link-text ms-1">Skills</span>
                    </a>
                </li>

                <!-- profile link  -->
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/profile.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>

                <!-- singin or singout button showing and hidding  -->
                <?php if (isset($_SESSION["isAdmin"])) { ?>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="../signout.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">logout</i>
                            </div>
                            <span class="nav-link-text ms-1">Log Out</span>
                        </a>
                    </li>

                <?php } elseif (!isset($_SESSION["isAdmin"])) { ?>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="./pages/sign-in.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">login</i>
                            </div>
                            <span class="nav-link-text ms-1">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="./pages/sign-up.php">
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



    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <!-- protfolio name  -->
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <!-- Card Header -->
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Social Media</h6>
                            </div>
                        </div>

                        <!-- Input and Add Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Media Name
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Icon Name
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Input your Media Link
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ADD Media
                                            </th>
                                        </tr>
                                    </thead>

                                    <!-- form add -->
                                    <tbody class="justify-content-between border-1">
                                        <tr>

                                            <!-- input added filed  -->
                                            <?php
                                            if (isset($_GET['editID'])) {
                                                $editID = $_GET['editID'];
                                                $editSql = "SELECT * FROM `social` WHERE `id` = '$editID'";
                                                // Correct the variable name here
                                                if ($sqlData = $connectionDB->query($editSql)) {
                                                    if ($sqlData->num_rows > 0) {
                                                        $selectEdit = $sqlData->fetch_assoc(); ?>
                                                        <!-- input added filed  -->
                                                        <form action="../socialEdit.php" method="post">
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-2">
                                                                    <div class="input-group input-group-outline">
                                                                        <!-- <label class="form-label">Type here media</label> -->
                                                                        <input type="text" name="editSocialName" placeholder="<?php echo $selectEdit['name'] ?>" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-2">
                                                                    <div class="input-group input-group-outline">
                                                                        <!-- <label class="form-label">Type here icon name</label> -->
                                                                        <input type="text" name="editSocialIcon" placeholder="<?php echo $selectEdit['icon_name'] ?>" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-2">
                                                                    <div class="input-group input-group-outline">
                                                                        <!-- <label class="form-label">Type here link</label> -->
                                                                        <input type="text" name="editSocialLink" placeholder="<?php echo $selectEdit['info_details'] ?>" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="submit" name="editSocialID" value="<?php echo $selectEdit['id'] ?>" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Edit</button>
                                                            </td>
                                                        </form>
                                                <?php }
                                                }
                                            } else { ?>
                                                <!-- input added filed  -->
                                                <form action="../socialAdd.php" method="post">
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here media</label>
                                                                <input type="text" name="addSocialName" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here icon name</label>
                                                                <input type="text" name="addSocialIcon" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here link</label>
                                                                <input type="text" name="addSocialLink" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="submit" name="submit" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Add</button>
                                                    </td>
                                                </form>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Data Display Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">icon</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">link</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- Example Row -->
                                        <?php
                                        // nave/menu data select 
                                        $nameSelectSql = "SELECT * FROM `social`";
                                        $nameConnect = $connectionDB->query($nameSelectSql);

                                        if ($nameConnect->num_rows > 0) {
                                            while ($row = $nameConnect->fetch_assoc()) { ?>
                                                <!-- showing data in navbar  -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">

                                                            <span><?php echo $row['name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <?php echo $row['icon_name'] ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['info_details'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">
                                                        <a href="social.php?editID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
                                                            Edit
                                                        </a>
                                                        <a href="../socialDel.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php  }
                                        }
                                        ?>

                                    </tbody>
                                </table>
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

    <!--   Core JS Files   -->
    <?php include('../script.php') ?>
</body>

</html>