<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa oleh Ahmad Sugiannor - 2310020023</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", sans-serif;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="card text-center p-4" style="max-width: 500px;">
        <div class="card-header bg-primary text-white">
            <h3>Selamat Datang di Web Metode Row</h3>
        </div>
        <div class="card-body">
            <p class="fs-5">
                <?= "Nama saya <b>{$row->nama_mhs}</b> dan NIM <span class='badge bg-info text-dark'>{$row->NIM}</span>"; ?>
            </p>
        </div>
        <div class="card-footer text-muted">
            &copy; <?= date("Y"); ?> - Data Mahasiswa
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>