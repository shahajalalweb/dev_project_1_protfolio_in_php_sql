<?php 
session_start();
include("database.php");
//delete id added and delete 
if (isset($_GET['deleteID'])) {
    $del_id = $_GET['deleteID'];
   // Assuming id is an integer, no need for quotes
   $delSql = "DELETE FROM `education` WHERE `id` = $del_id";
   if ($connectionDB->query($delSql)) {
       $_SESSION['socialDelSuc'] = true;
       header('Location: pages/education.php');
   }

}
//added education sql and connection
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit'])) {
    $education = $_POST['university'];
    $subject = $_POST['subject'];
    $location = $_POST['location'];
    $educationyear = $_POST['educationyear'];
    $details = $_POST['details'];

    $eduCon_sql = "INSERT INTO `education`(`university`, `subject`, `location_university`, `year`, `details`) VALUES ('$education','$subject','$location','$educationyear','$details')";

    if ($connectionDB->query($eduCon_sql)) {
        $_SESSION["addSuc"] = true;
        header("Location: pages/education.php");
    }
   
}

//edit education  details_edit   
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit_edit'])) {
    $submit_edit = $_POST['submit_edit'];
    $university_edit = $_POST['university_edit'];
    $subject_edit = $_POST['subject_edit'];
    $location_edit = $_POST['location_edit'];
    $educationyear_edit = $_POST['educationyear_edit'];
    $details_edit = $_POST['details_edit'];

    $editEducation_sql = "UPDATE `education` SET `university`='$university_edit',`subject`='$subject_edit',`location_university`='$location_edit',`year`='$educationyear_edit',`details`='$details_edit' WHERE `id`='$submit_edit'";

    if ($connectionDB->query($editEducation_sql)) {
        $_SESSION["editSuc"] = true;
        header("Location: pages/education.php");
    }
   
}




?>