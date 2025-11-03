<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa Oleh Ahmad Sugiannor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #d4fc79, #96e6a1);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
            margin: 0;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        .card {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.5);
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

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-shadow: none !important;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus {
            border-color: #2b9348;
            box-shadow: 0 0 0 0.25rem rgba(43, 147, 72, 0.25) !important;
        }

        .btn-primary {
            background-color: #2b9348;
            border-color: #2b9348;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, border-color 0.3s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            background-color: #55a630;
            border-color: #55a630;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-update {}
    </style>
</head>

<body>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <i class="fas fa-user-edit"></i> Form Edit Mahasiswa
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
                            <option value="">Pilih Program Studi</option> <?php foreach ($prodi as $ps) : ?>
                                <option
                                    value="<?= $ps->id_prodi; ?>"
                                    <?= ($mahasiswa->id_prodi == $ps->id_prodi) ? 'selected' : ''; ?>>
                                    <?= $ps->nama_prodi; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Perbaharui Data
                        </button>

                        <a href="<?php echo site_url('mahasiswa'); ?>" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>