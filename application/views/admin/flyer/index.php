<!DOCTYPE html>
<html>

<head>
    <title>Data Flyer</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body class="p-4">
    <div class="container">
        <h2>Data Flyer</h2>
        <a href="<?php echo site_url('admin/dashboard'); ?>" style="text-decoration:none;"> Kembali</a>
        <a href="<?= site_url('admin/tambah'); ?>" class="btn btn-primary mb-3">+ Tambah Flyer</a>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Flyer</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Status</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($flyers)): ?>
                    <?php $no = 1; foreach ($flyers as $f): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $f->nama_flyer; ?></td>
                            <td><?= $f->id_kategori; ?></td>
                            <td>
                                <?php if (!empty($f->gambar)): ?>
                                    <img src="<?= base_url('uploads/flyer/' . $f->gambar); ?>" width="80">
                                <?php else: ?>
                                    <span class="text-muted">Tidak ada gambar</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $f->tgl_mulai; ?></td>
                            <td><?= $f->tgl_selesai; ?></td>
                            <td><?= $f->status; ?></td>
                            <td>
                                <a href="<?= base_url('index.php/admin/edit/'.$f->id_flyer) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('index.php/admin/hapus/'.$f->id_flyer) ?>" onclick="return confirm('Yakin hapus?');" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data flyer</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
