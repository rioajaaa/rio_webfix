<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Memuat CSS Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="h2 mb-1 text-gray-800"><?php echo $judul; ?></h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">Form Tambah Data</h5><br>
                <form action="" method="POST">

                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="berita_judul" name="berita_judul" placeholder="Judul Berita">
                        <?= form_error('berita_judul', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="berita_isi" name="berita_isi" placeholder="Isi Berita">
                        <?= form_error('berita_isi', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <input type="date" class="form-control" id="berita_upload" name="berita_upload" placeholder="Waktu Upload">
                        <?= form_error('berita_upload', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto" placeholder="Pilih Foto">
                        </div>
                    </div>

                    <a href="<?= base_url('Berita') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-info float-right">Tambah berita</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Memuat script JavaScript Bootstrap 5 (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>