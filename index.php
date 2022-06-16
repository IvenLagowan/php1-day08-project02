<a href="create.php">[+] Create</a>

<hr>

<?php

if (isset($_GET['nama_lengkap']) && isset($_GET['email'])) {
    // Menangkap Data
    $nama_lengkap = $_GET['nama_lengkap'];
    $email = $_GET['email'];

    // Menampilkan Data
    echo $nama_lengkap;
    echo '<br><br>';
    echo $email;
}



?> 