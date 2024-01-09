<div class="container-fluid py-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Sejarah/tambah" class="btn btn-info mb-2">Tambah</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td><strong>No</strong></td>
                        <td><strong>Judul Sejarah</strong></td>
                        <td><strong>Isi Sejarah</strong></td>
                        <td><strong>Penutup Sejarah</strong></td>
                        <td><strong>Foto</strong></td>
                        <td><strong>Action</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sejarah as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['judul_sejarah']; ?></td>
                            <td><?= substr($us['isi_sejarah'], 0, 50); ?></td>
                            <td><?= substr($us['isi_sejarah'], 0, 50); ?></td>
                            <td><img src="<?= base_url('assets/img/ponpes/') . $us['foto']; ?>" style="max-width: 650px; max-height: 650px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('Sejarah/hapus/') . $us['id']; ?>" class="btn btn-danger px-3">Hapus</a>
                                <a href="<?= base_url('Sejarah/edit/') . $us['id']; ?>" class="btn btn-warning px-3">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>