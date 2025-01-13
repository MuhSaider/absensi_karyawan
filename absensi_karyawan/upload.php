<?php
// Proses upload file
$upload_message = ""; // Variabel untuk menyimpan pesan upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $upload_dir = 'uploads/'; // Direktori penyimpanan file
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true); // Buat folder jika belum ada
    }

    $file_name = basename($_FILES['file']['name']);
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_path = $upload_dir . $file_name;

    // Pindahkan file ke direktori uploads
    if (move_uploaded_file($file_tmp, $file_path)) {
        $upload_message = "<p class='success-message'>File berhasil diupload!</p>";
    } else {
        $upload_message = "<p class='error-message'>Gagal mengupload file.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Slip Gaji</title>
    <style>
        /* Gaya dasar body */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container untuk upload */
        .upload-container {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Judul halaman */
        .upload-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Input file */
        .upload-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px dashed #007bff;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .upload-container input[type="file"]:hover {
            border-color: #0056b3;
        }

        /* Tombol upload */
        .upload-container button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .upload-container button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .upload-container button:active {
            transform: translateY(0);
        }

        /* Pesan sukses atau error */
        .success-message {
            color: #28a745;
            margin-top: 15px;
            font-weight: bold;
        }

        .error-message {
            color: #dc3545;
            margin-top: 15px;
            font-weight: bold;
        }

        /* Tombol kembali */
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #6c757d;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .back-button:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .back-button:active {
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .back-button::before {
            content: "←"; /* Ikon panah */
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h2>Upload File</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit">Upload File</button>
        </form>
        <!-- Menampilkan pesan upload di dalam container -->
        <?php if (!empty($upload_message)) echo $upload_message; ?>
        <h2><a href="absen" class="back-button">Kembali</a></h2>
    </div>
</body>
</html>