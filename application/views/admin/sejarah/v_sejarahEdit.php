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
                <!-- <h5 class="card-title">Form Edit Pengajar Al Amin</h5><br> -->
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $sejarah['id']; ?>">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" value="<?= $sejarah['judul_sejarah']; ?>" class="form-control" id="judul_sejarah" name="judul_sejarah" placeholder="Judul Sejarah">
                        <?= form_error('judul_sejarah', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <input type="text" value="<?= $sejarah['isi_sejarah']; ?>" class="form-control" id="isi_sejarah" name="isi_sejarah" placeholder="Isi Sejarah">
                        <?= form_error('isi_sejarah', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <input type="text" value="<?= $sejarah['penutup_sejarah']; ?>" class="form-control" id="penutup_sejarah" name="penutup_sejarah" placeholder="Penutup Sejarah">
                        <?= form_error('penutup_sejarah', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <img src="<?= base_url('assets/img/ponpes/') . $sejarah['foto']; ?>" style="width: 100px; margin-bottom: 5px;" class="img-thumbnail">
                        <input type="file" class="custom-file-input row col-lg-12" name="foto" id="foto">
                        <?= form_error('foto', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>

                    <a href="<?= base_url('Sejarah') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-info float-right">Edit Sejarah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Memuat script JavaScript Bootstrap 5 (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>