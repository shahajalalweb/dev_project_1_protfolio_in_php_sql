<?php
session_start();

include("database.php");

// bodyBGI cvP bodyHeader bodyDetails 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $editID = $_POST['editID'];
    $aboutInfo = $_POST["heading_about"];
    $aboutDetails = $_POST["paragroup_about"];

    // image received
    $about_image = $_FILES['image_about']['name'];

    $target_dir = "uploads/";

    // Check if the directory exists, if not, create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_img = $target_dir . basename($about_image);

    if (move_uploaded_file($_FILES["image_about"]["tmp_name"], $target_img)) {

        // Escape special characters in user input
        $aboutInfoEscaped = $connectionDB->real_escape_string($aboutInfo);
        $aboutDetailsEscaped = $connectionDB->real_escape_string($aboutDetails);
        $target_aboutBGIEscaped = $connectionDB->real_escape_string($target_img);

        // Prepare the SQL query
        $updateQuery = "UPDATE `about` SET 
                `heading_about` = '$aboutInfoEscaped',
                `paragraph_about` = '$aboutDetailsEscaped',
                `image_about` = '$target_aboutBGIEscaped' 
                WHERE `id` = '$editID'";

        if ($connectionDB->query($updateQuery)) {
            header("Location: pages/aboutMe.php");
        }
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}
