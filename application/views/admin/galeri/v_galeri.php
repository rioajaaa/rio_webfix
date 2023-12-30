<div class="container-fluid py-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Galeri/tambah" class="btn btn-info mb-2">Tambah</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td><strong>No</strong></td>
                        <td><strong>Judul</strong></td>
                        <td><strong>Keterangan</strong></td>
                        <td><strong>Waktu Upload</strong></td>
                        <td><strong>Foto</strong></td>
                        <td><strong>Action</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($galeri as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['galeri_judul']; ?></td>
                            <td><?= substr($us['galeri_keterangan'], 0, 50); ?>...</td>
                            <td><?= $us['galeri_upload']; ?></td>
                            <td><img src="<?= base_url('assets/img/') . $us['foto']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('Galeri/hapus/') . $us['id']; ?>" class="btn btn-danger px-3">Hapus</a>
                                <a href="<?= base_url('Galeri/edit/') . $us['id']; ?>" class="btn btn-warning px-3">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>