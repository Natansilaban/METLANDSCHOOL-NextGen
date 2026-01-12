<?php
// Database Configuration (jika diperlukan)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'smk_metland_db');

// Site Configuration
define('SITE_NAME', 'SMK Metland Cileungsi');
define('SITE_TAGLINE', 'The High Standard in Vocational Education');
define('SITE_URL', 'http://localhost/SMK_Metland');

// Contact Information
define('CONTACT_PHONE', '(021) 82496976');
define('CONTACT_EMAIL', 'info@smkmetland.net');
define('CONTACT_ADDRESS', 'Jl. Kota Taman Metropolitan, Cileungsi Kidul, Kec. Cileungsi, Kabupaten Bogor, Jawa Barat 16820');
define('CONTACT_WEBSITE', 'www.smkmetland.net');

// Social Media
define('SOCIAL_WHATSAPP', '6281293395500');
define('SOCIAL_FACEBOOK', '#');
define('SOCIAL_INSTAGRAM', '#');
define('SOCIAL_YOUTUBE', '#');

// Date & Time
date_default_timezone_set('Asia/Jakarta');

// Session Start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Helper function to get asset path (handles subdirectory detection)
function get_asset_path($path) {
    $script_path = $_SERVER['PHP_SELF'];
    // Check if we're in a subdirectory (pages/ folder)
    if (strpos($script_path, '/pages/') !== false || strpos($script_path, '\\pages\\') !== false) {
        return '../' . $path;
    }
    return $path;
}

// Helper function to get base path for navigation
function get_base_path() {
    $script_path = $_SERVER['PHP_SELF'];
    // Check if we're in a subdirectory (pages/ folder)
    if (strpos($script_path, '/pages/') !== false || strpos($script_path, '\\pages\\') !== false) {
        return '../';
    }
    return '';
}

// Cache busting version
define('ASSETS_VERSION', '1.0.8');
?>
