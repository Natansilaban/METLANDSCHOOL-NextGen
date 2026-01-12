<?php
/**
 * Script untuk mengecek dan menghapus file gambar PNG/JPG yang error
 */

$images_dir = __DIR__ . '/assets/images/';
$deleted_files = [];
$error_files = [];

if (!is_dir($images_dir)) {
    die("Folder images tidak ditemukan!\n");
}

echo "Memeriksa file gambar...\n\n";

$files = glob($images_dir . '*.{png,jpg,jpeg}', GLOB_BRACE);

foreach ($files as $file) {
    $filename = basename($file);
    $filesize = filesize($file);
    
    // Cek ukuran file
    if ($filesize === 0 || $filesize < 100) {
        echo "❌ File terlalu kecil atau kosong: $filename ($filesize bytes)\n";
        if (unlink($file)) {
            $deleted_files[] = $filename;
            echo "   ✓ Dihapus\n";
        } else {
            $error_files[] = $filename;
            echo "   ✗ Gagal menghapus\n";
        }
        continue;
    }
    
    // Cek apakah file adalah gambar valid
    $image_info = @getimagesize($file);
    if ($image_info === false) {
        echo "❌ File bukan gambar valid: $filename\n";
        if (unlink($file)) {
            $deleted_files[] = $filename;
            echo "   ✓ Dihapus\n";
        } else {
            $error_files[] = $filename;
            echo "   ✗ Gagal menghapus\n";
        }
        continue;
    }
    
    // Cek ekstensi sesuai dengan type
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $mime_type = $image_info['mime'];
    
    $valid_extension = false;
    if ($mime_type === 'image/png' && $extension === 'png') $valid_extension = true;
    if ($mime_type === 'image/jpeg' && ($extension === 'jpg' || $extension === 'jpeg')) $valid_extension = true;
    
    if (!$valid_extension) {
        echo "⚠️  Ekstensi tidak sesuai dengan tipe file: $filename (MIME: $mime_type)\n";
        // Tidak dihapus, hanya warning
    }
}

echo "\n" . str_repeat("=", 50) . "\n";
echo "Ringkasan:\n";
echo "File yang dihapus: " . count($deleted_files) . "\n";
if (count($deleted_files) > 0) {
    foreach ($deleted_files as $file) {
        echo "  - $file\n";
    }
}

if (count($error_files) > 0) {
    echo "\nFile yang gagal dihapus: " . count($error_files) . "\n";
    foreach ($error_files as $file) {
        echo "  - $file\n";
    }
}

echo "\nSelesai!\n";
?>
