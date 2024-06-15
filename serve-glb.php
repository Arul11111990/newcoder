<?php
// public/serve-glb.php
session_start();

/* // Optional: Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    http_response_code(403);
    exit('Forbidden');
} */

// Path to the GLB file in the secure directory
$filePath = 'https://raw.githubusercontent.com/Arul11111990/newcoder/2010dd3b567a04639c6111d0c1291cec3ecbba75/assets/4-TC-RAL-3001.glb';

if (file_exists($filePath)) {
    header('Content-Type: model/gltf-binary');
    header('Content-Disposition: inline; filename="S3E_Ani1.glb"');
    header('Content-Length: ' . filesize($filePath));
    readfile($filePath);
    exit;
} else {
    http_response_code(404);
    exit('File not found');
}
?>
