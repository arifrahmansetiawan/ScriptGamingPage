<?php
// Ambil data dari formulir kontak
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Atur alamat email penerima
$to = "awanarif.d3@gmail.com";

// Atur subjek email
$subject = "Pesan dari Formulir Kontak";

// Atur pesan email
$email_message = "Nama: $name\n";
$email_message .= "Email: $email\n";
$email_message .= "Pesan:\n$message\n";

// Atur header email
$headers = "From: $email\n";
$headers .= "Reply-To: $email\n";

// Kirim email
$mail_sent = mail($to, $subject, $email_message, $headers);

// Periksa apakah email berhasil dikirim
if ($mail_sent) {
    echo "Pesan Anda berhasil dikirim. Terima kasih!";
} else {
    echo "Maaf, ada masalah dalam mengirim pesan Anda. Silakan coba lagi nanti.";
}
?>
