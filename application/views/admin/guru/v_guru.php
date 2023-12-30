<div class="container-fluid py-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Guru/tambah" class="btn btn-info mb-2">Tambah Data Pengajar</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td><strong>No</strong></td>
                        <td><strong>Nama Pengajar</strong></td>
                        <td><strong>No Induk</strong></td>
                        <td><strong>Jenis Kelamin</strong></td>
                        <td><strong>Jabatan Pengajar</strong></td>
                        <td><strong>Foto Pengajar</strong></td>
                        <td><strong>Action</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($guru as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nama_pengajar']; ?></td>
                            <td><?= $us['noin_pengajar']; ?></td>
                            <td><?= $us['jenis_kelamin']; ?></td>
                            <td><?= $us['jabatan_pengajar']; ?></td>
                            <td><img src="<?= base_url('assets/img/ponpes/') . $us['foto']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('Guru/hapus/') . $us['id']; ?>" class="btn btn-danger px-3">Hapus</a>
                                <a href="<?= base_url('Guru/edit/') . $us['id']; ?>" class="btn btn-warning px-3">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>