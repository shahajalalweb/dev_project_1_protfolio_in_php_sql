<?php
    include("database.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // edit text recived 
    $id = $_POST["bodyEdit"];
    $editH = $_POST["bodyHeader"];
    $editD = $_POST["bodyDetails"];

    // File received
    $cvP = $_FILES['cvP']['name'];
    $bodyBGI = $_FILES['bodyBGI']['name'];

    $target_dir = "uploads/";

    $target_cvP = $target_dir . basename($cvP);
    $target_bodyBGI = $target_dir . basename($bodyBGI);

    if (move_uploaded_file($_FILES["cvP"]["tmp_name"], $target_cvP) && move_uploaded_file($_FILES["bodyBGI"]["tmp_name"], $target_bodyBGI)) {

        // Escape special characters in user input
        $bodyHeadEscaped = $connectionDB->real_escape_string($editH);
        $bodyDetailsEscaped = $connectionDB->real_escape_string($editD);
        $target_cvPEscaped = $connectionDB->real_escape_string($target_cvP);
        $target_bodyBGIEscaped = $connectionDB->real_escape_string($target_bodyBGI);

        // Prepare the SQL query
        $bodyHeadInsertSql = "
        UPDATE `header_text` 
        SET 
            `heading` = '$bodyHeadEscaped', 
            `details_head` = '$bodyDetailsEscaped', 
            `download_file` = '$target_cvPEscaped', 
            `image` = '$target_bodyBGIEscaped' 
        WHERE 
            `id` = '$id'
    ";


        if ($connectionDB->query($bodyHeadInsertSql)) {
            header("Location: pages/bodyHeader.php");
        }
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}
