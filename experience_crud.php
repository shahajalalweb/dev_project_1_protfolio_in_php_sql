<?php 
session_start();
include("database.php");
//delete id added and delete 
if (isset($_GET['deleteID'])) {
    $del_id = $_GET['deleteID'];
   // Assuming id is an integer, no need for quotes
   $delSql = "DELETE FROM `experience` WHERE `id` = $del_id";
   if ($connectionDB->query($delSql)) {
       $_SESSION['socialDelSuc'] = true;
       header('Location: pages/experience.php');
   }

}
//added education sql and connection
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit'])) {
    $company_name = $_POST['company_name'];
    $company_locatoin = $_POST['location'];
    $work_name = $_POST['job_title'];
    $work_time = $_POST['time'];
    $details = $_POST['details'];

    $eduCon_sql = "INSERT INTO `experience`(`company_name`, `company_locatoin`, `work_name`, `work_time`, `work_details`) VALUES ('$company_name','$company_locatoin','$work_name','$work_time','$details')";

    if ($connectionDB->query($eduCon_sql)) {
        $_SESSION["addSuc"] = true;
        header("Location: pages/experience.php");
    }
   
}

//edit education  details_edit   
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit_edit'])) {

    $id_edit = $_POST['submit_edit'];
    $company_name_edit = $_POST['company_name_edit'];
    $company_locatoin_edit = $_POST['company_locatoin_edit'];
    $work_name_edit = $_POST['work_name_edit'];
    $work_time_edit = $_POST['work_time_edit'];
    $work_details_edit = $_POST['work_details_edit'];
    

    $editEducation_sql = "UPDATE `experience` SET `company_name`='$company_name_edit',`company_locatoin`='$company_locatoin_edit',`work_name`='$work_name_edit',`work_time`='$work_time_edit',`work_details`='$work_details_edit' WHERE `id`='$id_edit'";

    if ($connectionDB->query($editEducation_sql)) {
        $_SESSION["editSuc"] = true;
        header("Location: pages/experience.php");
    }
   
}




?>