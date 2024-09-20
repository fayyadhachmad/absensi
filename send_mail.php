<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@gmail.com"; // Ganti dengan email Gmail kamu
    $subject = "Formulir Absensi";

    // Mengambil data dari form
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hadir = isset($_POST['hadir']) ? 'Hadir' : 'Tidak Hadir';
    $asal_kota = $_POST['asal_kota'];

    // Menyusun isi email
    $message = "Nama: $nama\n";
    $message .= "NPM: $npm\n";
    $message .= "Jenis Kelamin: $jenis_kelamin\n";
    $message .= "Status Kehadiran: $hadir\n";
    $message .= "Kelas: $asal_kota\n";

    // Header untuk email
    $headers = "From: noreply@yourdomain.com";

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email berhasil dikirim!";
    } else {
        echo "Email gagal dikirim.";
    }
}
?>
