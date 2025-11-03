<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CRUD Program Studi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #d4fc79, #96e6a1);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 50px;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            border: none;
        }

        .table thead {
            background: #2f9e44;
            color: white;
        }

        .table tbody tr:hover {
            background-color: rgba(40, 167, 69, 0.2);
            transition: 0.3s;
        }

        .header-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2b9348;
        }

        hr {
            border: 1px solid #2b9348;
            width: 200px;
            margin: 10px auto;
        }

        .card-header {
            background: linear-gradient(90deg, #2b9348, #55a630);
            color: white;
            border-radius: 20px 20px 0 0;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="header-title">Data Program Studi</h1>
            <hr>
        </div>

        <div class="text-start mb-3">
            <a href="<?php echo site_url('prodi/tambah'); ?>" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> Tambah Prodi
            </a>

        </div>

        <div class="card shadow-lg">
            <div class="card-header">
                <h5 class="mb-0">📚 Daftar Program Studi</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode Prodi</th>
                            <th>Nama Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($prodi as $row) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->kode_prodi; ?></td>
                                <td><?= $row->nama_prodi; ?></td>
                                <td>
                                    <a href="<?php echo site_url('prodi/edit/') . $row->id_prodi; ?>" class="btn btn-primary btn-sm me-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <a href="<?php echo site_url('prodi/hapus/') . $row->id_prodi; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data prodi ini?');">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>