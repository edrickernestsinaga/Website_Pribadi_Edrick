<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simpan data ke dalam file (atau simpan di database sesuai kebutuhan)
    $data = "Nama: $name\nEmail: $email\nPesan: $message\n---\n";
    file_put_contents("messages.txt", $data, FILE_APPEND);

    // Berikan respons
    echo "Pesan telah diterima.";
  }
?>