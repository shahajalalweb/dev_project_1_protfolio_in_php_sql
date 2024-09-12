<?php 

include("database.php");

// SQL query to create the first table
$sql1 = "CREATE TABLE IF NOT EXISTS protfolio_name (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
)";

$sql2 = "CREATE TABLE IF NOT EXISTS menu_bar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255)
)";

$sql3 = "CREATE TABLE IF NOT EXISTS header_text (
    id INT AUTO_INCREMENT PRIMARY KEY,
    heading VARCHAR(255),
    details_head VARCHAR(255),
    download_file VARCHAR(255),
    image VARCHAR(255)
)";

$sql4 = "CREATE TABLE IF NOT EXISTS about (
    id INT AUTO_INCREMENT PRIMARY KEY,
    heading_about VARCHAR(255),
    paragraph_about VARCHAR(255),
    image_about VARCHAR(255)
)";

$sql5 = "CREATE TABLE IF NOT EXISTS contact_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    profetion VARCHAR(255),
    phone VARCHAR(255),
    email VARCHAR(255),
    website VARCHAR(255)
)";

$sql6 = "CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    value VARCHAR(255)
)";

$sql7 = "CREATE TABLE IF NOT EXISTS experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(255),
    company_locatoin VARCHAR(255),
    work_name VARCHAR(255),
    work_time VARCHAR(255),
    work_details VARCHAR(255)
)";

$sql8 = "CREATE TABLE IF NOT EXISTS social (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    icon_name VARCHAR(255),
    info_details VARCHAR(255)
)";

$sql9 = "CREATE TABLE IF NOT EXISTS education (
    id INT AUTO_INCREMENT PRIMARY KEY,
    university VARCHAR(255),
    subject VARCHAR(255),
    location_university VARCHAR(255),
    year VARCHAR(255),
    details VARCHAR(255)
)";

$sql10 = "CREATE TABLE IF NOT EXISTS profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    profile_name VARCHAR(255),
    profile_icon VARCHAR(255),
    profile_link VARCHAR(255)
)";

// Array of SQL queries
$sql_queries = [$sql1, $sql2, $sql3, $sql4, $sql5, $sql6, $sql7, $sql8, $sql9, $sql10];

// Loop through each SQL query and execute
foreach ($sql_queries as $sql) {
    if (!$connectionDB->query($sql)) {
        // Handle errors if the query fails
        $error_message = "Error creating table: " . $connectionDB->error;
        // You can log this or handle it as needed
    }
}


?>