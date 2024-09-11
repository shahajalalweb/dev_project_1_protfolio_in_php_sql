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
                                <h6 class="text-white text-capitalize ps-3">Protfolio Profile</h6>
                            </div>
                        </div>

                        <!-- Input and Add Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profile Name
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">icon
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Link
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ADD profile
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
                                                $editSql = "SELECT * FROM `profiles` WHERE `id` = '$editID'";
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
                                                                        <input type="text" name="editSocialName" placeholder="<?php echo $selectEdit['profile_name'] ?>" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-2">
                                                                    <div class="input-group input-group-outline">
                                                                        <!-- <label class="form-label">Type here icon name</label> -->
                                                                        <input type="text" name="editSocialIcon" placeholder="<?php echo $selectEdit['profile_icon'] ?>" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-2">
                                                                    <div class="input-group input-group-outline">
                                                                        <!-- <label class="form-label">Type here link</label> -->
                                                                        <input type="text" name="editSocialLink" placeholder="<?php echo $selectEdit['profile_link'] ?>" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="submit" name="editProfile" value="<?php echo $selectEdit['id'] ?>" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Edit</button>
                                                            </td>
                                                        </form>
                                                <?php }
                                                }
                                            } else { ?>
                                                <!-- input added filed  -->
                                                <form action="../profile_crud.php" method="post">
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here profile</label>
                                                                <input type="text" name="profile_name" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here icon</label>
                                                                <input type="text" name="profile_icon" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here link</label>
                                                                <input type="text" name="profile_link" class="form-control" required>
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
                                        $nameSelectSql = "SELECT * FROM `profiles`";
                                        $nameConnect = $connectionDB->query($nameSelectSql);

                                        if ($nameConnect->num_rows > 0) {
                                            while ($row = $nameConnect->fetch_assoc()) { ?>
                                                <!-- showing data in navbar  -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['profile_name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <?php echo $row['profile_icon'] ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['profile_link'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">
                                                        <a href="protfolio_profile.php?editID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
                                                            Edit
                                                        </a>
                                                        <a href="../protfolio_profile_crud.php?deleteID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
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

    <?php include('../plugin.php'); ?>

    <!--   Core JS Files   -->
    <?php include('../script.php') ?>
</body>

</html>