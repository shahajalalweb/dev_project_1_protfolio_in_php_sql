<?php
session_start();
include("../database.php");

if(!$_SESSION['isAdmin']) {
    header('Location: sign-in.php');
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
                                <h6 class="text-white text-capitalize ps-3">Education</h6>
                            </div>
                        </div>

                        <!-- Input and Add Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">University
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">university location
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Education year
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Add skills
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="justify-content-between border-1">
                                        <tr>
                                            <?php
                                            if (isset($_GET['editID'])) {
                                                $editID = $_GET['editID'];
                                                $educationSelect_sql = "SELECT * FROM `education` WHERE `id` = '$editID'";
                                                $educationSelect = $connectionDB->query($educationSelect_sql);
                                                if ($educationSelect->num_rows > 0) {
                                                    $editRow = $educationSelect->fetch_assoc(); ?>
                                                    <!-- input edit filed  -->
                                                    <form action="../education_crud.php" method="post">
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill</label> -->
                                                                    <input type="text" name="university_edit" class="form-control" placeholder="<?php echo $editRow['university'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                    <input type="text" name="subject_edit" placeholder="<?php echo $editRow['subject'] ?>" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                    <input type="text" name="location_edit" placeholder="<?php echo $editRow['location_university'] ?>" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline">
                                                                    <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                    <input type="text" name="educationyear_edit" placeholder="<?php echo $editRow['year'] ?>" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1 gap-2">
                                                                <div class="input-group input-group-outline h-36">
                                                                    <textarea class="p-2" style="width: 250px; height: 100px;" placeholder="<?php echo $editRow['details'] ?>" name="details_edit"></textarea>
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
                                                <form action="../education_crud.php" method="post">
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill</label> -->
                                                                <input type="text" name="university" class="form-control" placeholder="University name" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                <input type="text" name="subject" placeholder="Subject name" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                <input type="text" name="location" placeholder="University location" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1 gap-2">
                                                            <div class="input-group input-group-outline">
                                                                <!-- <label class="form-label">Type here skill value percentage</label> -->
                                                                <input type="text" name="educationyear" placeholder="Education year" class="form-control" required>
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
                                        $eduCon_sql = "SELECT * FROM `education`";
                                        $conEducation = $connectionDB->query($eduCon_sql);

                                        if ($conEducation->num_rows > 0) {
                                            while ($row = $conEducation->fetch_assoc()) { ?>
                                                <!-- showing data in navbar  -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['university'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['subject'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['location_university'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['year'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span style="white-space: normal; word-wrap: break-word;"><?php echo $row['details'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">
                                                        <a href="education.php?editID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
                                                            Edit
                                                        </a>
                                                        <a href="../education_crud.php?deleteID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
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