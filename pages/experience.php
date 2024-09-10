<!-- company_name company_locatoin work_name work_time work_details -->
<?php
session_start();
include("../database.php");

?>

<!DOCTYPE html>
<html lang="en">

<?php include("../head.php") ?>

<body class="g-sidenav-show  bg-gray-200">
    <!-- aside / side bar  -->
    <?php include("../aside.php") ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <!-- protfolio name  -->
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <!-- Card Header -->
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Education</h6>
                            </div>
                        </div>

                        <!-- Input and Add Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company Name
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company location
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">job title
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">work time
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Add experience
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="justify-content-between border-1">
                                        <tr>
                                            <?php
                                            if (isset($_GET['editID'])) {
                                                $editID = $_GET['editID'];
                                                $educationSelect_sql = "SELECT * FROM `experience` WHERE `id` = '$editID'";
                                                $educationSelect = $connectionDB->query($educationSelect_sql);
                                                if ($educationSelect->num_rows > 0) {
                                                    $editRow = $educationSelect->fetch_assoc(); ?>
                                                    <!-- input edit filed  -->
                                                    <form action="../experience_crud.php" method="post">
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill</label> -->
                                                                    <input type="text" name="company_name_edit" class="form-control" placeholder="<?php echo $editRow['company_name'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                    <input type="text" name="company_locatoin_edit" placeholder="<?php echo $editRow['company_locatoin'] ?>" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                    <input type="text" name="work_name_edit" placeholder="<?php echo $editRow['work_name'] ?>" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                    <input type="text" name="work_time_edit" placeholder="<?php echo $editRow['work_time'] ?>" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline h-36">
                                                                    <textarea class="p-2" style="width: 250px; height: 100px;" placeholder="<?php echo $editRow['work_details'] ?>" name="work_details_edit"></textarea>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button type="submit" name="submit_edit" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue" value="<?php echo $editRow['id']; ?>">Edit</button>
                                                        </td>
                                                    </form>
                                                <?php }
                                            } else { ?>
                                                <!-- input added filed  -->
                                                <form action="../experience_crud.php" method="post">
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill</label> -->
                                                                <input type="text" name="company_name" class="form-control" placeholder="Company name" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                <input type="text" name="location" placeholder="location" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                <input type="text" name="job_title" placeholder="Job title" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                <input type="text" name="time" placeholder="experience year" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline h-36">
                                                                <textarea class="p-2" style="width: 250px; height: 100px;" placeholder="Details" name="details"></textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="submit" name="submit" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Add</button>
                                                    </td>
                                                </form>
                                            <?php }
                                            ?>

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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">University</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">University Location</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Education year</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example Row -->
                                        <?php
                                        // nave/menu data select 
                                        $eduCon_sql = "SELECT * FROM `experience` ORDER BY `id` DESC";
                                        $conEducation = $connectionDB->query($eduCon_sql);

                                        if ($conEducation->num_rows > 0) {
                                            while ($row = $conEducation->fetch_assoc()) { ?>
                                                <!-- showing data in navbar  -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['company_name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['company_locatoin'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['work_name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['work_time'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['work_details'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">
                                                        <a href="experience.php?editID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
                                                            Edit
                                                        </a>
                                                        <a href="../experience_crud.php?deleteID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
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

