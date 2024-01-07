<?php
// Deskripsi fungsi deskripsi antara karakter input dengan karakter aslinya 
function deskripsi($input) {
    $key = array(
        'a' => '~', 'b' => '$', 'c' => '^', 'd' => '#', 'e' => '+',
        'f' => '!', 'g' => '%', 'h' => '_', 'i' => '=', 'j' => '*',
        'k' => 'P', 'l' => 'Q', 'm' => 'R', 'n' => 'S', 'o' => 'T',
        'p' => 'A', 'q' => 'B', 'r' => 'C', 's' => 'D', 't' => 'E',
        'u' => ')', 'v' => '(', 'w' => '{', 'x' => ',', 'y' => '`', 'z' => '"',
        '1' => 'F', '2' => 'G', '3' => 'H', '4' => 'I', '5' => 'J',
        '6' => 'U', '7' => 'V', '8' => 'W', '9' => 'X', '0' => 'Y',
    );

    // Melakukan substitusi karakter dalam teks berdasarkan array $key
    $deskripsi = str_replace(array_values($key), array_keys($key), $input);
    return $deskripsi;
}

// Pengecekan apakah halaman diakses menggunakan metode POST atau tidak
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil nilai input dari user
    $ciphertext = $_POST["ciphertext"];
    // Memanggil fungsi deskripsi untuk melakukan deskripsi teks dari cipherteks
    $plaintext = deskripsi($ciphertext);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deskripsi Teks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .result-border {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 10px;
            margin-top: 15px;
            background-color: #f9f9f9; /* Warna latar belakang hasil deskripsi */
        }

        .btn-blue {
            background-color: #0074cc; /* Warna biru */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px; /* Efek cembung */
            cursor: pointer;
            transition: background-color 0.3s ease; /* Animasi perubahan warna latar belakang */
        }

        .btn-blue:hover {
            background-color: #005aa6; /* Warna biru lebih gelap saat hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Deskripsi Teks</h2>
        <form action="" method="post">
            <label for="ciphertext">Masukkan Cipherteks :</label>
            <input type="text" name="ciphertext" id="ciphertext" value="<?php echo isset($ciphertext) ? $ciphertext : ''; ?>">

            <?php if (isset($plaintext)): ?>
            <div class="result-border">
                <label><p>Hasil Deskripsi: <?php echo $plaintext; ?></p></label>
            </div>
            <?php endif; ?>

            <br>
            <button class="btn-blue" type="submit">Deskripsi</button>
        </form>
    </div>
</body>
</html>
