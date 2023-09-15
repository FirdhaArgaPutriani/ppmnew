<?php

// Get the filename from the query parameter
$filename = isset($_GET['filename']) ? $_GET['filename'] : '';

if (!empty($filename)) {
    // Specify the directory path where your files are stored

    $fileDirectory = 'D:/xampp/htdocs/ppmnew/assets/data/kotasehat/';

    // Combine the directory path and filename
    $filePath = $fileDirectory . $filename;

    // Check if the file exists
    if (file_exists($filePath)) {
        // Set appropriate headers for file download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . filesize($filePath));

        // Read the file and output its contents
        readfile($filePath);

        exit;
    } else {
        // Handle the case where the file does not exist
        echo 'File not found: ' . $filename;
    }
} else {
    // Handle the case where the filename is not provided in the query parameter
    echo 'Invalid filename.';
}

?>
