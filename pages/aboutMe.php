<?php
session_start();
include("../database.php");

if(!$_SESSION['isAdmin']) {
    header('Location: sign-in.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delQuery = "DELETE FROM `about` WHERE `id`='$id'";
    if ($connectionDB->query($delQuery)) {
        $_SESSION['delSuc'] = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include("../head.php") ?>

<body class="g-sidenav-show  bg-gray-200">
    <!-- aside / side bar  -->
    <?php include('../aside.php') ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <!-- protfolio name  -->
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <!-- Card Header -->
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">About Me</h6>
                            </div>
                        </div>

                        <!-- Input and Add Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">input about your self
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">input about more details
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">input your image
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ADD NAME
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="justify-content-between border-1">
                                        <tr>
                                            <?php
                                            if (isset($_GET['editID'])) {
                                                $editID = $_GET['editID'];
                                                $editSql = "SELECT * FROM `about` WHERE `id` = '$editID'";
                                                // Correct the variable name here
                                                if ($sqlData = $connectionDB->query($editSql)) {
                                                    if ($sqlData->num_rows > 0) {
                                                        $selectEdit = $sqlData->fetch_assoc(); ?>
                                                        <form action="../aboutEdit.php" method="post" enctype="multipart/form-data">
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-2">
                                                                    <div class="input-group input-group-outline">
                                                                        <textarea class="p-2" style="width: 300px; height: 150px;" placeholder="<?php echo $selectEdit['heading_about'] ?>" name="heading_about"></textarea>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                                <td>
                                                                    <div class="d-flex px-2 py-1 gap-2">
                                                                        <div class="input-group input-group-outline h-36">
                                                                            <textarea class="p-2" style="width: 300px; height: 150px;" placeholder="<?php echo $selectEdit['heading_about'] ?>" name="paragroup_about"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-2">
                                                                    <div class="input-group input-group-outline">
                                                                        <!-- <label class="form-label">Type here name</label> -->
                                                                        <input type="file" name="image_about" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="submit" value="<?php echo $selectEdit['id'] ?>" name="editID" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Edit</button>
                                                            </td>
                                                        </form>

                                                <?php   }
                                                }  ?>
                                            <?php } else { ?>
                                                <!-- input added filed  -->
                                                <form action="../aboutAdd.php" method="post" enctype="multipart/form-data">
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <textarea class="p-2" style="width: 300px; height: 150px;" placeholder="Type here about info" name="heading_about"></textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline h-36">
                                                                <textarea class="p-2" style="width: 300px; height: 150px;" placeholder="Type here about details" name="paragroup_about"></textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here name</label> -->
                                                                <input type="file" name="image_about" class="form-control" required>
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">About info</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">About details</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example Row -->
                                        <?php
                                        // nave/menu data select 
                                        $nameSelectSql = "SELECT * FROM `about`";
                                        $nameConnect = $connectionDB->query($nameSelectSql);

                                        if ($nameConnect->num_rows > 0) {
                                            while ($row = $nameConnect->fetch_assoc()) { ?>
                                                <!-- showing data in navbar  -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['heading_about'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['paragraph_about'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <img style="height: 100px; width: 150px;" src="../<?php echo $row['image_about'] ?>" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">
                                                        <a href="aboutMe.php?editID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
                                                            Edit
                                                        </a>
                                                        <a href="aboutMe.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
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
    <?php include('../plugin.php'); ?>


    <!--   Core JS Files   -->
    <?php include('../script.php') ?>
</body>

</html>