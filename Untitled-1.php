<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Set up email
    $to = "anugrahanggi1707@gmail.com"; // Ganti dengan email tujuan
    $subject = "Konfirmasi Kehadiran dari $name";
    $message = "Nama: $name\nEmail: $email\n\nTelah mengonfirmasi kehadiran.";
    $headers = "From: noreply@yourdomain.com";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Terima kasih telah mengonfirmasi kehadiran Anda!";
    } else {
        echo "Maaf, terjadi kesalahan. Silakan coba lagi.";
    }
}
?>
