<?php
session_start();
include("../database.php");

if(!$_SESSION['isAdmin']) {
    header('Location: sign-in.php');
}

if (isset($_GET['id'])) {
    $delID = $_GET['id'];
    // Assuming id is an integer, no need for quotes
    $delSql = "DELETE FROM `header_text` WHERE `id` = $delID";
    if ($connectionDB->query($delSql)) {
        $_SESSION['bodyDelSuc'] = true;
    }
}

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
                                <h6 class="text-white text-capitalize ps-3">Body Header</h6>
                            </div>
                        </div>

                        <!-- Input and Add Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Input Body header
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Input body details
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CV
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Background Image
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ADD
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="justify-content-between border-1">
                                        <tr>
                                            <!-- input added filed  -->
                                            <?php
                                            if (isset($_GET['editID'])) {
                                                $editID = $_GET['editID'];
                                                $editSql = "SELECT * FROM `header_text` WHERE `id` = '$editID'";
                                                // Correct the variable name here
                                                if ($sqlData = $connectionDB->query($editSql)) {
                                                    if ($sqlData->num_rows > 0) {
                                                        $selectEdit = $sqlData->fetch_assoc(); ?>
                                                        <form action="../bodyEdit.php" method="post" enctype="multipart/form-data">
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-1">
                                                                    <div class="input-group input-group-outline">
                                                                        <input type="text" name="bodyHeader" class="form-control" placeholder="<?php echo $selectEdit['heading']; ?>" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-1">
                                                                    <div class="input-group input-group-outline">
                                                                        <!-- <label class="form-label"></label> -->
                                                                        <input type="text" name="bodyDetails" placeholder="<?php echo $selectEdit['details_head']; ?>" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-1">
                                                                    <div class="input-group input-group-outline">
                                                                        <label class="form-label"></label>
                                                                        <input type="file" name="cvP" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1 gap-1">
                                                                    <div class="input-group input-group-outline">
                                                                        <label class="form-label"></label>
                                                                        <input type="file" name="bodyBGI" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="submit" name="bodyEdit" value="<?php echo $selectEdit['id']; ?>" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Edit</button>
                                                            </td>
                                                        </form>
                                                <?php }
                                                }
                                            } else { ?>
                                                <form action="../bodyAdd.php" method="post" enctype="multipart/form-data">
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-1">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here header</label>
                                                                <input type="text" name="bodyHeader" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-1">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Type here details</label>
                                                                <input type="text" name="bodyDetails" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-1">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label"></label>
                                                                <input type="file" name="cvP" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-1">
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label"></label>
                                                                <input type="file" name="bodyBGI" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="submit" name="bodyAdd" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Add</button>
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Header text</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">File CV</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- data showing in body header part  -->
                                        <?php
                                        $selectHeaderSql = "SELECT * FROM `header_text`";
                                        $selectCon = $connectionDB->query("$selectHeaderSql");
                                        if ($selectCon->num_rows > 0) {
                                            while ($headRow = $selectCon->fetch_assoc()) { ?>
                                                <!-- showing data in navbar  -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $headRow['heading'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $headRow['details_head'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <a class="btn btn-outline-danger btn-sm mb-0" href="../<?php echo $headRow['download_file'] ?>" target="_blank">View CV</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div style="width: 150px; height: 70px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                                                            <img src="../<?php echo $headRow['image']; ?>" alt="BG" style="width: 100%; height: 100%; object-fit: cover;">
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">
                                                        <a href="bodyHeader.php?editID=<?php echo $headRow['id'] ?>" class="btn btn-outline-danger btn-sm mb-0">Edit</a>
                                                        <a href="bodyHeader.php?id=<?php echo $headRow['id'] ?>" class="btn btn-outline-danger btn-sm mb-0">Delete</a>
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