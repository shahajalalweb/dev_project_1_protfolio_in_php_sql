<?php
session_start();

include("database.php");

// bodyBGI cvP bodyHeader bodyDetails 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bodyHead = $_POST["bodyHeader"];
    $bodyDetails = $_POST["bodyDetails"];

    // File received
    $cvP = $_FILES['cvP']['name'];
    $bodyBGI = $_FILES['bodyBGI']['name'];

    $target_dir = "uploads/";

    // Check if the directory exists, if not, create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_cvP = $target_dir . basename($cvP);
    $target_bodyBGI = $target_dir . basename($bodyBGI);

    if (move_uploaded_file($_FILES["cvP"]["tmp_name"], $target_cvP) && move_uploaded_file($_FILES["bodyBGI"]["tmp_name"], $target_bodyBGI)) {

        // Escape special characters in user input
        $bodyHeadEscaped = $connectionDB->real_escape_string($bodyHead);
        $bodyDetailsEscaped = $connectionDB->real_escape_string($bodyDetails);
        $target_cvPEscaped = $connectionDB->real_escape_string($target_cvP);
        $target_bodyBGIEscaped = $connectionDB->real_escape_string($target_bodyBGI);

        // Prepare the SQL query
        $bodyHeadInsertSql = "INSERT INTO `header_text` (`heading`, `details_head`, `download_file`, `image`) VALUES ('$bodyHeadEscaped', '$bodyDetailsEscaped', '$target_cvPEscaped', '$target_bodyBGIEscaped')";

        if ($connectionDB->query($bodyHeadInsertSql)) {
            header("Location: pages/bodyHeader.php");
        }
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}
