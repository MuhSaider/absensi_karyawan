<?php
$upload_dir = 'uploads/'; // Direktori penyimpanan file
$files = scandir($upload_dir); // Ambil daftar file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
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
        .download-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .download-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .download-container table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .download-container th, .download-container td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .download-container th {
            background-color: #007bff;
            color: #fff;
        }
        .download-container tr:hover {
            background-color: #f1f1f1;
        }
        .download-container a {
            color:rgb(255, 255, 255);
            text-decoration: none;
            font-weight: bold;
        }
        .download-container a:hover {
            text-decoration: underline;
        }
        .btn-download {
            background-color: #28a745;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-download:hover {
            background-color: #218838;
        }
        @media (max-width: 768px) {
            .download-container {
                padding: 15px;
            }
            .download-container th, .download-container td {
                padding: 8px;
            }
        }
        /* Tambahan untuk tombol kembali di tengah */
        .center-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="download-container">
        <h2>Download File</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama File</th>
                    <th>Ukuran File</th>
                    <th>Unduh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($files as $file) {
                    if ($file !== '.' && $file !== '..') {
                        $file_path = $upload_dir . $file;
                        $file_size = filesize($file_path);
                        echo "<tr>
                                <td>$file</td>
                                <td>" . round($file_size / 1024, 2) . " KB</td>
                                <td><a href='$file_path' class='btn-download' download>Unduh</a></td>
                            </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="center-button">
        <h2><a href="absen" class="back-button">Kembali</a></h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>