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
                <!-- <h5 class="card-title">Form Tambah Data Pengajar Al Amin</h5><br> -->
                <form action="" method="POST">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="nama_pengajar" name="nama_pengajar" placeholder="Nama Pengajar">
                        <?= form_error('nama_pengajar', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="noin_pengajar" name="noin_pengajar" placeholder="No Induk">
                        <?= form_error('noin_pengajar', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="">Silahkan Pilih</option>
                            <option value="Laki laki">Laki laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="jabatan_pengajar" name="jabatan_pengajar" placeholder="Jabatan Pengajar">
                        <?= form_error('jabatan_pengajar', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto" placeholder="Pilih Foto">
                        </div>
                    </div>
                    <a href="<?= base_url('Guru') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-info float-right">Tambah Data Pengajar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Memuat script JavaScript Bootstrap 5 (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>