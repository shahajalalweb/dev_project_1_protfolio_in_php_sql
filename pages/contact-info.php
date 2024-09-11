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
                                <h6 class="text-white text-capitalize ps-3">Contact Info</h6>
                            </div>
                        </div>

                        <!-- Input and Add Section -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-between mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profetion
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Website
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Add contact
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="justify-content-between border-1">
                                        <tr>
                                            <!-- input added filed  -->
                                            <form action="../contact_crud.php" method="post">
                                                <td>
                                                    <div class="d-flex px-2 py-1 gap-2">
                                                        <div class="input-group input-group-outline">
                                                            <label class="form-label">Type here name</label>
                                                            <input type="text" name="name" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1 gap-2">
                                                        <div class="input-group input-group-outline">
                                                            <label class="form-label">Type here profetion</label>
                                                            <input type="text" name="profetion" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1 gap-2">
                                                        <div class="input-group input-group-outline">
                                                            <label class="form-label">Type here phone</label>
                                                            <input type="text" name="phone" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1 gap-2">
                                                        <div class="input-group input-group-outline">
                                                            <label class="form-label">Type here email</label>
                                                            <input type="text" name="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1 gap-2">
                                                        <div class="input-group input-group-outline">
                                                            <label class="form-label">Type here website</label>
                                                            <input type="text" name="website" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="submit" name="submit" class="btn btn-outline-primary btn-sm mb-0 me-3 text-blue">Add</button>
                                                </td>
                                            </form>
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">profetion</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Website</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example Row -->
                                        <?php
                                        // nave/menu data select 
                                        $contactInfoSql = "SELECT * FROM `contact_info`";
                                        $connectContactInfo = $connectionDB->query($contactInfoSql);

                                        if ($connectContactInfo->num_rows > 0) {
                                            while ($row = $connectContactInfo->fetch_assoc()) { ?>
                                                <!-- showing data in navbar  -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['profetion'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['phone'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['email'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <span><?php echo $row['website'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">
                                                        <a href="../contact_crud.php?deleteID=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm mb-0">
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