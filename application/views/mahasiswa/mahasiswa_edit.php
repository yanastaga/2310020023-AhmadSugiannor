<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa Oleh Ahmad Sugiannor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #d4fc79, #96e6a1);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.85);
            border-radius: 20px;
            border: none;
            width: 100%;
            max-width: 500px;
        }

        .card-header {
            background: linear-gradient(90deg, #2b9348, #55a630);
            color: white;
            border-radius: 20px 20px 0 0;
            font-weight: 600;
            font-size: 1.25rem;
        }

        .btn-primary {

            background-color: #0d6efd;
            border-color: #0d6efd;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }


        .btn-update {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                Form Edit Mahasiswa
            </div>
            <div class="card-body">

                <form action="<?php echo site_url('mahasiswa/perbaharui/') . $mahasiswa->id_mahasiswa ?>" method="post">

                    <div class="mb-3">
                        <label for="NIM" class="form-label">NIM</label>
                        <input type="text" name="NIM" id="NIM" class="form-control" value="<?= $mahasiswa->NIM ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                        <input type="text" name="nama_mhs" id="nama_mhs" class="form-control" value="<?= $mahasiswa->nama_mhs ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_prodi" class="form-label">Program Studi</label>
                        <select name="id_prodi" id="id_prodi" class="form-control" required>
                            <option value=""></option>

                            <?php foreach ($prodi as $ps) : ?>
                                <option
                                    value="<?= $ps->id_prodi; ?>"
                                    <?= ($mahasiswa->id_prodi == $ps->id_prodi) ? 'selected' : ''; ?>>
                                    <?= $ps->nama_prodi; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <input type="submit" value="Perbaharui Data" class="btn btn-primary">
                        <a href="<?php echo site_url('mahasiswa'); ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>